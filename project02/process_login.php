<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['user'])){
        $username = $_POST['user'];
        $password = $_POST['pass'];
        if($_FILES['file']['size']<10000){
            if(move_uploaded_file($_FILES['file']['tmp_name'], 'document/'.$_FILES['file']['name'])){

            }
        }
//        if($username == 'canh' && $password == 'aaa'){
//            header("Location:admin.php");
//        }
//        else{
//            header("Location:login.php?error=ERROR");
//        }
    }
}
?>