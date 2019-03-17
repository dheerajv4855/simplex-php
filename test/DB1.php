<?php 

 class DB1 implements DBInterface{
	
	private $conn;
	function __construct()
	{
		
	}
	function connect()
	{
		$this->conn = new PDO('sqlite:mysqlitedb.db');
		return $this->conn;
	}
}