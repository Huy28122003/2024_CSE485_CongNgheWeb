<?php

include 'users.php';
global $users;
session_start();
if (!isset($_SESSION['user_id']) || !isset($_COOKIE['logged_in']) ||
    $_SESSION['user_role'] !== "admin") {
    header('Location: login.php');
}

$username = $_GET['username'];

// Include the user data file
require_once 'users_data.php';

// Find the user in the data array
$user = null;
foreach ($users as $u) {
    if ($u['username'] === $username) {
        $user = $u;
        break;
    }
}

if ($user) {
    echo "<h2>Edit User: " . $user['name'] . "</h2>";
} else {
    echo "User not found.";
}
?>