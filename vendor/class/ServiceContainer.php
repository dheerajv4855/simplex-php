<?php 

class ServiceContainer {

	static function boot($class)
	{
		$reflector = new ReflectionClass($class);
		if (!$reflector->isInstantiable()) {
			throw new Exception("Class {$class} is not instantiable");
		}
		$constructor = $reflector->getConstructor();		
		return $reflector->newInstance();
	}

}