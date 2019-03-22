<?php 
class Config {
	
	function __construct()
	{
		global $config;
		foreach ($config as $key => $value) {
			$this->{$key} = $value;
		}
	}
}