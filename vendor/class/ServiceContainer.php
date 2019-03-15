<?php 

class ServiceContainer {

	static function boot($class)
	{
		$objArr = [];
		$reflector = new ReflectionClass($class);
		if (!$reflector->isInstantiable()) {
			throw new Exception("Class {$class} is not instantiable");
		}
		$constructor = $reflector->getConstructor();
		$constructorArguments = $constructor->getParameters();
		
		foreach ($constructorArguments as $argumentIndex => $constructorArgument) {
 			$argumentClassHint = $constructorArgument->getClass(); 
 			
		}
		
		
		exit;
		return $reflector->newInstance();
	}

}