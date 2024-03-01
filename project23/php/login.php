<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<?php
$users = [
 [
 "username" => "baotdv",
 "password" => password_hash("123", PASSWORD_DEFAULT), // Store hashed password
 "name" => "Bao Tap Code",
 "email" => "2151062720@e.tlu.edu.vn"
 ],
 // Add more users...
];
?>
<form class="form-layout" action="process_login.php" method="post">
    <h1>Login</h1>
    <div>Username: <input type="text" name="username" required></div>
    <br>
    <div>Password: <input type="password" name="password" required></div>
    <br>
    <button type="submit">Login</button>

</form>
</body>
</html>