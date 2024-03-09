<?php
require_once '../functions/interactSQL.php';
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    if(empty($username) || empty($email) || empty($pass)){
        header("Location:add_user.php?error=emptydata");
    }
    $passHash = password_hash($pass,PASSWORD_DEFAULT);

    $result = insert($username,$email,$passHash);
    if($result){
        header("Location:add_user.php?notification=suscess");
    }
    else{
        header("Location:add_user.php?error=Error ");
    }
}
