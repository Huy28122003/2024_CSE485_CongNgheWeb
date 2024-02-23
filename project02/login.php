<?php
   if(isset($_GET['error'])){
       echo  "<p style='color: chartreuse'>{$_GET['error']}</p>";
   }
?>

<form action="process_login.php" method="post" enctype="multipart/form-data">
    Username: <input type="text" name="user" id="">
    Password: <input type="password" name="pass" id="">
    File: <input type="file" name="file" id="">
    <button type="submit"> Login</button>
</form>