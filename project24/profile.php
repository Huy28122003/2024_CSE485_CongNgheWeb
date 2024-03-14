<?php
<<<<<<< HEAD
require_once("data.php");
session_start();
if (!isset($_SESSION['user_name']) || !isset($_COOKIE['logged_in'])) {
    header('Location: login.php');
}
else{
    foreach ($users as $user){
        if($user['username'] == $_SESSION['user_name']){
            echo "Hello! ".$user['name'];
            echo "Email: ".$user['email'];
            if($_SESSION['user_role'] == 'user'){
                echo "<a href='edit_profile.php'>Edit profile</a>";
            }
            else{
                echo "<a href='admin_panel.php' class='text-decoration-none'>Admin panel</a>";
            }
        }
    }
}
=======

include 'users.php';
global $users;
global $authorization_levels;

session_start();

if(!isset($_SESSION['user_id']) || !isset($_COOKIE['logged_in'])){
    header('Location: login.php');
}

$username = $_SESSION['user_id'];
$user = null;

foreach ($users as $u) {
    if($u['username'] === $username){
        $user = $u;
        break;
    }
}

if($user){
    $user_role = $_SESSION['user_role'];
    echo "Welcome, ". $user['name'] . "!";
    echo "<br>Email: " . $user['email'];
    echo "<br><a href =''>Edit basic profile information</a>";

    if($user_role === "admin" && $authorization_levels[$user_role]['access_admin_panel']){
        echo "<br><a href='admin/admin_panel.php'>Admin Panel</a>";
    }
    echo "<br><a href='logout.php'><button>Logout</button></a>";
} else{
    echo "ERROR: User not found.";
}
>>>>>>> main
?>