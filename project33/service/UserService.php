<?php
require_once root.'/models/User.php';

class UserService{
    public function getUerByName($name,$pass)
    {
        $dbConnection = new DBConnection();
        $conn = $dbConnection->getConnection();
        if($conn != null){
            $sql = "select * from users where username='$name' and passwordd='$pass'";
            $smtm = $conn->query($sql);

            while ($row = $smtm->fetch()){
                $user = new User($row['username'], $row['passwordd'], $row['rolee'],$row['employeeID']);
                if($user){
                    return $user;
                }
                else{
                    return null;
                }
            }

        }
    }
}