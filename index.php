<?php 
include_once("./vendor/autoload.php");
include_once("./vendor/class/Kernal.php");
include_once("app.php");

class App {
	public function get($class)
	{
		return ServiceContainer::boot($class);
	}
}

