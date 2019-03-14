<?php 

class Router
{
	private $routeURI;
	private $prefix;
	private $middleware;

	function __construct()
	{
			global $middleware;			
			$this->middleware = $middleware;
			$this->routeURI = $_SERVER['REQUEST_URI'];

	}

	function group($prefix,$func,$middle=[])
	{
		$request = new RequestClass();		
		if(strpos($this->routeURI, $prefix) !== false)
		{			
			if(count($middle)>0)				
			foreach ($middle as $value) {
				$class =  $this->middleware[$value];
				$a = new $class;
				$a->run($request);
			}
			$this->prefix = $prefix;			
			echo call_user_func($func,$this);
		}		
	}
	function get($route,$func)
	{	
		$route = $this->prefix.$route;		
		if($this->routeURI === $route && $_SERVER['REQUEST_METHOD'] === "GET")
		{		
		$request = new RequestClass();
		echo call_user_func($func,$request);	
		}		
		// json_encode($response);
	}
	/*function post()
	{
		echo "post";
	}*/
}