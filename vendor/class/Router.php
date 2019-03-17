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

	function __construct()
	{
			global $middleware;			
			$this->middleware = $middleware;
			$this->routeURI = $_SERVER['PATH_INFO'];
			$this->request = new RequestClass();
			$this->response = new Response();
			$this->reqMiddle=[];
	}
	function group($prefix,$func,$middle=[])
	{
				
		if(strpos($this->routeURI, $prefix) !== false)
		{	
			$this->reqMiddle = $middle;
			$this->prefix = $prefix;			
			echo call_user_func($func,$this);
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
	function dispatch($route,$func,$method)
	{
		$route = $this->prefix.$route;			
		if($this->routeURI === $route && $_SERVER['REQUEST_METHOD'] === $method)
		{
				if(count($this->reqMiddle)>0)				
				foreach ($this->reqMiddle as $value) {
					$class =  $this->middleware[$value];
					$a = new $class;
					$a->run($this->request);
				}				
				if(is_string($func))
				{
					if(strpos($func,'@')!== false){				
						$cntl_arr = explode('@',$func);				
						echo call_user_func(array(new $cntl_arr[0],$cntl_arr[1]),$this->request,$this->response);				
					}			
				}else
				echo call_user_func($func,$this->request,$this->response);	
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