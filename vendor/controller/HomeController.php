<?php 

class HomeController {

	function index()
	{
		echo "From HomeController index ";
	}
	function test(Request $request)
	{
		echo "<pre>";
		print_r($request);
		
	}
}