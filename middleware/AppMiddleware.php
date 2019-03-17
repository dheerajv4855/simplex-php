<?php 
class AppMiddleware {

	public function run(Request $request)
	{
		//var_dump($request);
		echo "from AppMiddleware<br>";
	}
}