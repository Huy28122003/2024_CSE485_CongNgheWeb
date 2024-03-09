<<<<<<< HEAD
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
=======

<?php

include 'users.php';
global $users;

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

//Check if username exists
$user = null;
foreach ($users as $u){
    if ($u['username'] === $username){
        $user = $u;
        break;
    }
}
if ($user && password_verify($password, $user['password'])){
    $_SESSION['user_id'] = $user['username'];
    setcookie('logged_in', true, time() + 60 * 60 * 24 * 30, "/"); //Set cookie for 30 days
    header('Location: profile.php');
} else {
    echo "Invalid username or password";
}

?>
>>>>>>> main
