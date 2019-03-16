<?php 

$app = new App();
$router = $app->get("Router");

$router->group('/api',function($router){

	$router->get("/home",function(){
		echo "group=> home";
	});
	$router->get("/about",function(){
		echo "group=> about";
	});
},['demo']);


