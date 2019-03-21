<?php 

/**
* 
*/
class Request 
{
	
	function __construct()
	{
		# code...		
		foreach ($_REQUEST as $key => $value)			
			$this->{$key} = $value;
		
	}
}