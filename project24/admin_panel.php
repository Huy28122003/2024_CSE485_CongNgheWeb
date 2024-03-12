<?php
require_once("data.php");
session_start();
if (!isset($_SESSION['user_name']) || !isset($_COOKIE['logged_in']) ||
    $_SESSION['user_role'] !== "admin") {
    header('Location: login.php');
}

echo "<table class='table'>";
echo "<thead >";
echo "<tr><th>Username</th><th>Name</th><th>Email</th><th>Role</th><th>Actions</th></tr>";
echo "</thead >";
echo "<tbody >" ;
foreach ($users as $u) {
    echo "<tr>";
    echo "<td>" . $u['username'] . "</td>";
    echo "<td>" . $u['name'] . "</td>";
    echo "<td>" . $u['email'] . "</td>";
    echo "<td>" . $u['role'] . "</td>";
    echo "<td>";

    if ($u['username'] !== $_SESSION['user_name']) {
        echo "<a href='edit_user.php?username=" . $u['username'] . "'>Edit</a>";
    }
}

  echo"</tbody >";
echo"</table >";
