<?php 
include_once("./vendor/autoload.php");
include_once("./vendor/class/Kernal.php");
include_once("app.php");

class App {
	public function get($class)
	{
		$reflector = new ReflectionClass($class);
		if (!$reflector->isInstantiable()) {
			throw new Exception("Class {$class} is not instantiable");
		}
		$constructor = $reflector->getConstructor();		
		return $reflector->newInstance();
	}
}

