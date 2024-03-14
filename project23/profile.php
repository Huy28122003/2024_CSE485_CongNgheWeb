<<<<<<< HEAD
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

=======

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
>>>>>>> main
