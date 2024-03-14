<?php
require_once root.'/config/config.php';
require_once root.'/service/UserService.php';
class UserController{
    public function index(){
        $userService=new UserService();
        $userstest=$userService->getAllUsers();

        include root.'/views/users/index.php';
    }
    public function addUser($user){
    }
}



