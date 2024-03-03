<?php
require_once ("data.php");
session_start();
if(!isset($_SESSION['user_name']) || $_SESSION['user_role']!='admin'|| !isset($_COOKIE['logged_in'])){
    header("Location: login.php");
}
$userN = $_GET['username'];
foreach ($users as $user){
    if($user['username']==$userN){
        echo $user['username']." ".$user['password']." ".$user['name']." ".$user['email'];
    }

}

