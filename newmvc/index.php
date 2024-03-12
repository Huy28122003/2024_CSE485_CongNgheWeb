<?php
include 'config/config.php';


//localhost/newmvc/index.php?controller=A&action=B
$controller = isset($_GET['controller'])? $_GET['controller'] : 'home';

if(isset($_GET['action'])){
    $action = $_GET['action'];
}else{
    $action = 'index';
}
//Phan tich URI > Controller: A = Cateogory, Home, Post, User
$controller = ucfirst($controller);
$controller = $controller.'Controller';
$path = 'controllers/'.$controller.'.php';

//Muc tieu sau cung
if(!file_exists($path)){
    die('Tep tin khong ton tai');
    exit(1);
}
include($path);
$myController = new $controller();
if(!method_exists($controller, $action)){
    die('Phuong thuc ko ton tai');
    exit(1);
}
$myController->$action();


