<?php
session_start();
session_destroy(); // Destroy session
setcookie('logged_in', "", 1, "/"); // Expire cookie
header('location: login.php'); // Redirect to login page
?>