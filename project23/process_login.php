<?php
    require_once ("data.php");
    session_start();
    if($_SERVER["REQUEST_METHOD"] == 'POST'){
        if (isset($_POST['username']) && isset($_POST['password'])) {
            $userN = $_POST['username'];
            $passW = $_POST['password'];
            $u = null;
            $count=0;
            foreach ($users as $user) {
                if ($userN == $user['username'] && password_verify($passW, $user['password'])) {
                    $count++;
                    $_SESSION['user_id'] = $user['username'];
                    setcookie('logged_in', true, time() + 60 * 60 * 24 * 30, "/");
                    header('Location: profile.php');
                }
            }
            if($count == 0){
                echo"Lỗi thông tin đăng nhập";
            }
        }

    }
