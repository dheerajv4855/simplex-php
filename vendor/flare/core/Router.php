<?php 

class Router
{
	private $routeURI;
	public $prefix;
	private $middleware;
	private $controller;
	private $controllerMethod;
	private $request;
	private $response;
	private $reqMiddle;
	private $params=[];

	function __construct()
	{

			global $middleware;				
			$this->middleware = $middleware;
			$this->routeURI = $_SERVER['PATH_INFO'];
			$this->params[] = new Request();
			$this->params[] = new Response();
			$this->reqMiddle=[];
			
	}
	function group($prefix,$func,$middle=[])
	{				
		if(strpos($this->routeURI, $prefix) !== false)
		{	
			$this->reqMiddle = $middle;
			$this->prefix = $prefix;			
			call_user_func($func,$this);
		}		
	}
	function get($route,$func)
	{	 		
		$this->dispatch($route,$func,"GET");		
	}
	function post($route,$func)
	{	
		$this->dispatch($route,$func,"POST");		
	}
	function put($route,$func)
	{	
		$this->dispatch($route,$func,"PUT");		
	}
	function patch($route,$func)
	{	
		$this->dispatch($route,$func,"PATCH");		
	}
	function delete($route,$func)
	{	
		$this->dispatch($route,$func,"DELETE");		
	}
	function dispatch($route,$func,$method)
	{
		$route = $this->prefix.$route;			
		
		if(strpos($route,':') !== false)
		{
			$definedRoute = explode('/',$route);
			$requestRoute = explode('/',$this->routeURI);			
			foreach ($definedRoute as $key => $value) {			
				
				if(strpos($value,':')!== false){							
					$this->params[] = $requestRoute[$key];
					$definedRoute[$key] = $requestRoute[$key];
				}					
			}
			$route = implode('/', $definedRoute);
			$this->routeURI = implode('/', $requestRoute);
		
		}
		

		if($this->routeURI === $route && $_SERVER['REQUEST_METHOD'] === $method)
		{
				/**
				* Middleware Function call 
				**/
				if(count($this->reqMiddle)>0)				
				foreach ($this->reqMiddle as $value) {
					$class =  $this->middleware[$value];					
					$this->params[1] = call_user_func_array([new $class,'run'],$this->params);	
				}			

				if(is_string($func))
				{
					if(strpos($func,'@')!== false){				
						$cntl_arr = explode('@',$func);				
						echo call_user_func_array(array(new $cntl_arr[0],$cntl_arr[1]),$this->params);				
					}			
				}else{
					
					echo call_user_func_array($func,$this->params);	
					die;
				}
				
		}
	}
	function notFound()
	{
		echo "Route Not Found";
	}
	/*function post()
	{
		echo "post";
	}*/
}