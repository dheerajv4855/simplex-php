<?php 

class ServiceContainer {

	static public $classArg;
	static public $container;
	static function boot($class)
	{
		
		$reflector = new ReflectionClass($class);
		if (!$reflector->isInstantiable()) {
			throw new Exception("Class {$class} is not instantiable");
		}
		$constructor = $reflector->getConstructor();
		$constructorArguments = $constructor->getParameters();
		self::$classArg = [];
		foreach ($constructorArguments as $argumentIndex => $constructorArgument) {
 			$argumentClassHint = $constructorArgument->getClass(); 
 			self::$classArg[] = new $argumentClassHint->name;
 			
		}	
		if(isset(self::$container[$class]) && (self::$container[$class] instanceOf $class))
		{			
			return self::$container[$class];
		}
		self::$container[$class] = $reflector->newInstanceArgs(self::$classArg);
		return self::$container[$class];				
		
	}
	

}