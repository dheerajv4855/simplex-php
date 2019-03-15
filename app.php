<?php 


$app = new App();
$route = $app->get("DBService");
echo "<pre>";
print_r($route);
/*
$route->get('/test',function(Request $request){	
	print_r("aaaa");
});

$route->post('/abc',function(Request $request){
	print_r($request->name);
});

$route->group('/api',function($route){

	$route->get('/test','HomeController@test');
	$route->get('/demo','HomeController@index');

},['demo']);
*/

