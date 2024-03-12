<?php
require_once 'config/config.php';

$controller = isset($_GET['controller'])? $_GET['controller'] : 'home';
$action = isset($_GET['action'])? $_GET['action'] : 'index';
$controller = ucfirst($controller);
$controller = $controller."Controller";
$path = 'controllers/'.$controller.'.php';


if(!file_exists($path)){
    die('Tep tin khong ton tai');
    exit(1);
}
include ($path);
$myController = new $controller();
if(!method_exists($controller, $action)){
    die('Phuong thuc ko ton tai');
    exit(1);
}
$myController->$action();

?>



