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