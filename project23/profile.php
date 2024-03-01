<?php
include 'users.php';
global $users;
session_start();
if (!isset($_SESSION['user_id']) || !isset($_COOKIE['logged_in'])){
    header('Location: login.php');
}

$username = $_SESSION['user_id'];

$user = null;
foreach ($users as $u){
    if($u['username'] === $username){
        $user = $u;
        break;
    }
}
if ($user){
    echo "Welcome, " . $user['name'] . "!";
    echo "<br>Email: " . $user['email'];
    echo "<br><button type='submit' ><a href='logout.php'>Logout</a></button>";
} else {
    echo "Error: User not found";
}
?>