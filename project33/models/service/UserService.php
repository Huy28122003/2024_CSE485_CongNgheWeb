<?php
require_once root.'/config/config.php';
require_once root.'/config/database.php';
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

    public function getAllUsers(){
        try{
            $dbConections= new DBConnection();
            $conn = $dbConections->getConnection();

            $sql = "SELECT * FROM Users";
            $stmt = $conn->query($sql);
            $users=[];
            while ($row = $stmt->fetch()){
                $user= new User($row['username'],$row['passwordd'],$row['rolee'],$row['employeeID']);
                $users[]=$user;            }
            return $users;
        }
        catch (PDOException $e){
            return $users=[];
        }


    }
    public function addNewUser(User $user){
        try{
            $dbconnection= new DBConnection();
            $conn=$dbconnection->getConnection();

            $sql = "INSERT INTO Users(username, passwordd,rolee,employeeID) VALUES (:username, :passwordd,:rolee, :employeeID)";
            $stmt = $conn->prepare($sql);
            $stmt->execute([':username' => $user->getName(), ':passwordd' => $user->getPass(), ':rolee' => $user->getRole(), ':employeeID' => $user->getEmployeeID()]);
            return true;
        }
        catch (PDOException $e) {
            return false;
        }
    }

    public function deleteUser($id){
        try {

            $dbConections= new DBConnection();
            $conn = $dbConections->getConnection();

            $sql="DELETE FROM Users WHERE username=:username";
            $stmt= $conn->prepare($sql);
            $stmt->execute(['username'=>$id]);
            return true;
        }
        catch (PDOException $e) {
            return false;
        }
    }


    public function editUser(User $user){
        try {
            $dbconnection= new DBConnection();
            $conn=$dbconnection->getConnection();

            $sql="UPDATE Users SET passwordd =:passwordd , rolee=:rolee, employeeID=:employeeID WHERE username=:username";
            $stmt=$conn->prepare($sql);
            $stmt->execute([ ':passwordd' => $user->getPass(), ':rolee' => $user->getRole(), ':employeeID' => $user->getEmployeeID(),':username' => $user->getName()]);
            return true;

        }
        catch (PDOException $e) {
            return false;

        }
    }
    public function searchUser($id){
        try {
            $dbconnection= new DBConnection();
            $conn=$dbconnection->getConnection();

            $sql="SELECT * FROM users WHERE username = :username";
            $stmt=$conn->prepare($sql);
            $stmt->execute(['username'=>$id]);
            $row = $stmt->fetch();

            $users= new User($row['username'],$row['passwordd'],$row['rolee'],$row['employeeID']);


            return $users;

        }
        catch (PDOException $e) {
            return $users =[];

        }
    }

}