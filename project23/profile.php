<?php
require_once('data.php');
session_start();
foreach ($users as $user) {
    if ($user['username'] == $_SESSION['user_id']) {
        echo "Thông tin của bạn:";
        echo $user['username'];
        echo "<br>";
        echo $user['password'];
        echo "<br>";
        echo $user['name'];
        echo "<br>";
        echo $user['email'];
    }
}
?>

<a href="logout.php">Logout</a>

