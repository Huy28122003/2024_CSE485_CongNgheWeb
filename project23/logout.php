<?php
session_start();
<<<<<<< HEAD
session_destroy(); // Destroy session
setcookie('logged_in', "", 1, "/"); // Expire cookie
header('Location: login.php'); // Redirect to login page
?>

=======

session_destroy();
setcookie('logged_in', "", 1, "/");

header('Location: login.php');
?>
>>>>>>> main
