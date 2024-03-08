<?php
 function connect(){
    $conn = new mysqli("localhost","root","","democsdl");
    return $conn;
 }
 function getCategories(){
   $conn = connect();
   $strGetCategories = "select * from categories";

   $result = mysqli_query($conn,$strGetCategories);
   return $result;
 }

 function getNews(){
   $conn = connect();
   $strGetNews = "select *from News";
   $result = mysqli_query($conn,$strGetNews);
   return $result;
 }
 function getAllUsers()
 {
     $conn = connect();
     $strGetUsers = "select * from users order by user_id asc ";
     $result = mysqli_query($conn,$strGetUsers);
     $users = [];
     if(mysqli_num_rows($result)>0){
         while($row = mysqli_fetch_assoc($result)){
             $users [] = $row;
         }
     }
     return $users;
 }
 function insert($name,$email,$pass)
 {
     $conn = connect();
     $str = "insert into users(username,email,password) values ('$name','$email','$pass')";
     $result = mysqli_query($conn,$str);

     return $result;

 }