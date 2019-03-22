<?php 
class Response 
{
	function json($data,$response_code=200)
	{
		http_response_code($response_code);
		header('Content-Type: application/json');
		echo json_encode($data);
	}

}