# simplex-php framework
this is small utility for creating laravel style routing and controller, not exactly similar but it is. it also have middleware support and symfony like service container.
for intializing routing we have to initialize App 

## route.php

```php
<?php
$app = new App();
$router = $app->get("Router");
$router->get('/home',function()
{
	echo "From Home Route";
});
```

we can get any class with automatic dependency resolve using get function of app class

## Controller Example
```php
<?php
$router->get('/app','AppController@index');
```

## Grouping Routes
```php
<?php
$router->group('/app',function($router)
	{
		$router->get('/about','AboutController@index');
	});
  ```
  
  ## Creating Middleware
  ```php
<?php
$router->group('/app',function($router)
	{
		$router->get('/about','AboutController@index');
	},['auth']);
  ```
  middleware class should be declare inside Config/app.php $middleware array
  
  ## Route Params 
  ```php 
  $router->get('/:user',function(Request $request,Response $response,$user)
  {
    echo "From Home Route";
  });
```
  
# more features comming soon...
