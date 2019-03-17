<?php 


$app = new App();
$route = $app->get("Router");


$route->get('/api/test',function(Request $request,Response $response){	
	$response->json(["result"=>"success"]);
	
});

$route->get('/abc/home','HomeController@index');
$route->get('/abc','HomeController@test');
/*
$route->group('/api',function($route){

	$route->get('/test','HomeController@test');
	$route->get('/demo','HomeController@index');


},['demo']);
*/

