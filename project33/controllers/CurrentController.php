<?php

class CurrentController
{
    public function index()
    {
        include root.'/views/usercurrent/index.php';
    }
    public function employee()
    {
        include root.'/views/usercurrent/employees.php';
    }
    public function login()
    {
        include root.'/views/usercurrent/login.php';
    }
}
