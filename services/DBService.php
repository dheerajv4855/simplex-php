<?php 

class DBService{
	private $router;
	private $config;
	function __construct(Config $config,Router $router){
		$this->router = $router;
		$this->config = $config;
		//echo $config->DB_NAME;
	}
}