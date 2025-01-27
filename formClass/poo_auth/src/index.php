<?php
require_once(__DIR__ . '/../vendor/autoload.php');

$dotenv = Dotenv\Dotenv::createimmutable(paths: "../");
$dotenv->load();

use App\Router;
use App\controller\LoginController;
use App\controller\HomeController;
use App\controller\RegisterController;
use App\controller\LogoutController;


$router = new Router();


$router->addRoute( "home",  new HomeController());
$router->addRoute( "login",  new LoginController());
$router->addRoute( "register",  new RegisterController());
$router->addRoute( "logout",  new LogoutController());

$router->delegate();


require_once("./controller/ControllerInterface.php");
require_once("./AffichableInterface.php");

$method = $_SERVER["REQUEST_METHOD"];
$route  = isset($_GET["route"]) ? $_GET["route"] : "home";

switch ($route){
    case "login":
        require_once("./controller/LoginController.php");
        $controller = new LoginController();
        break;
    case "logout":
        require_once("./controller/LogoutController.php");
        $controller = new LogoutController();
        break;
    case "register":
        require_once("./controller/RegisterController.php");
        $controller = new RegisterController();
        break;
    case "home":
    default:
        require_once("./controller/HomeController.php");
        $controller = new HomeController();
}

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $controller->doPOST();
} else {
    $controller->doGET();
}