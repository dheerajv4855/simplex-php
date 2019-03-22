<?php
class App {

	function __construct()
	{
		ServiceContainer::$container['App'] = $this;
	}

	public function get($class)
	{
		return ServiceContainer::boot($class);
	}
	 
}

