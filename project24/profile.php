<?php
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
?>