<?php 

/**
* 
*/
class RequestClass implements Request
{
	
	function __construct()
	{
		# code...
		foreach ($_SERVER as $key => $value) {
			# code...
			$this->{$key} = $value;
		}
	}
}