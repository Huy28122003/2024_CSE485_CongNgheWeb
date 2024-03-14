<?php
require_once 'C:/laragon/www/2024_CSE485_CongNgheWeb/project33/config/config.php';
require_once root.'/service/UserService.php';
require_once root.'/controllers/UserController.php';
if(isset($_GET['id'])){
    $name= $_GET['id'];
    $userService = new UserService();
    $userService->deleteUser($name);
    $newuser = new UserController();
    $newuser->index();
}

