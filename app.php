<?php 


$app = new App();
$router = $app->get("Router");

$router->get('/home',function()
{
	echo "From Home Route";
});