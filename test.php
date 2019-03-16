/*header("Access-Control-Allow-Origin: *");
include('DBInterface.php');
include('db.php');
include('DB1.php');
include('class/Router.php');
include('class/Request.php');
include('class/RequestClass.php');

include('traits/Helpers.php');
include("class/Kernal.php");
$pdo = new DB1();
$db = new DB($pdo);
$conn = $db->getConn();

$router = new Router($middleware);
//$request = new RequestClass();
/*$db->createTable();
$db->insertUser(['ANAND','ANAND VISHWAKARMA']);
$db->insertUser(['AJAY','AJAY GUPTA']);
$db->insertUser(['Manoj','Manoj Yadav']);
$db->insertUser(['ARJUN','Arjun Sharma']);
*/


//$result = $conn->query("SELECT * FROM USERS",PDO::FETCH_ASSOC);

//echo json_encode($result->fetchAll());


/*$router->get('/home',function(Request $request) {
		//return $request->SERVER_NAME;

		return json_encode("home");
	
});



$router->group('/api',function($router){

	$router->get("/home",function(){
		echo "group=> home";
	});
	$router->get("/about",function(){
		echo "group=> about";
	});
},["auth"]);

$router->get('/about',function(Request $request) {
	echo "About";
});*/


/*$router  = new Router();
$router->group('/api',function($router){

	$router->get("/home",function(){
		echo "group=> home";
	});
	$router->get("/about",function(){
		echo "group=> about";
	});
},["auth"]);*/
