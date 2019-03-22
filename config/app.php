<?php 

$middleware = [
	'auth'=>AppMiddleware::class,
	'demo'=>DemoMiddleware::class,
];

$config = [
	"DB_HOST"=>"localhost",
	"DB_USERNAME"=>"root",
	"DB_PASSWORD"=>"",
	"DB_NAME"=>"demo",
];