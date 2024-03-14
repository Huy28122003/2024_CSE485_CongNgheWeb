<?php
require_once '/laragon/www/2024_CSE485_CongNgheWeb/project33/config/config.php';
require_once root.'/models/User.php';
require_once root.'/service/UserService.php';
require_once root.'/controllers/UserController.php';

if(isset($_POST['password'])&&isset($_POST['role'])&&isset($_POST['employeeid'])){
    $user = new User($_POST['username'],$_POST['password'],$_POST['role'],$_POST['employeeid']);
    $userService = new UserService();
    if($userService->editUser($user)){
        header('location:http://localhost/2024_CSE485_CongngheWeb/project33/index.php?controller=user&success');
        $userController =new UserController();
        $userController->index();
    }
    else {
        echo "Lỗi";
    }

}