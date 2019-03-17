<?php 

class HomeController extends Controller {

	function index(Request $request,Response $response)
	{
		//echo "From HomeController index ";
		echo "<pre>";
		print_r($request);
		exit;
		$response->json(["result"=>"HomeController@index"]);
	}
	function test(Request $request)
	{
		echo "<pre>";
		echo "HomeController => test";
		print_r($request);
		
	}
}