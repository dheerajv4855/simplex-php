<?php 

$app = new App();
$router = $app->get("Router");

$router->get('/home',function()
{
	echo "From Home Route";
});

$router->group('/app',function($router)
	{
		$router->get('/about','AboutController@index');
	},
	['auth','demo']
	);