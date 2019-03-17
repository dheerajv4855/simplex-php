<?php
class DemoMiddleware {

	public function run(Request $request)
	{
		//var_dump($request);
		echo "from DemoMiddleware<br>";
	}
}