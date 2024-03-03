<?php
require_once("data.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    session_start();
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $user_found = false;
        foreach ($users as $u) {
            if ($u['username'] === $username && password_verify($password, $u['password'])) {
                $user_found = true;
                $_SESSION['user_name'] = $u['username'];
                $_SESSION['user_role'] = $u['role'];
                break;
            }
        }
        if ($user_found) {
            setcookie('logged_in', true, time() + 60 * 60 * 24 * 30, "/");
            header('Location: profile.php');
        } else {
            header("Location:login.php?error=Loi thong tin");
        }

    }
}
