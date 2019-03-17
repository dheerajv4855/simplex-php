<?php 


class DB
{
	private $conn;
	function __construct(DBInterface $dbinterface)
	{
		
		//$this->conn = new SQLite3('mysqlitedb.db');
		//$this->conn = new PDO('sqlite:mysqlitedb.db');
		$this->conn = $dbinterface->connect();
		
	}
	public function getConn()
	{
		return $this->conn;
	}
	function createTable()
	{
		try{
		$this->conn->exec("CREATE TABLE IF NOT EXISTS USERS(id INTEGER PRIMARY KEY AUTOINCREMENT, username VARCHAR(100),fullname VARCHAR(100));");	
		}
		catch(Exception $err)
		{
			
		}
	}
	function insertUser($data)
	{
		$qry = $this->conn->prepare("INSERT INTO USERS(username,fullname) values(?,?)");
		$qry->execute($data);
		return $qry;
	}
}