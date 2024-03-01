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
$user = [
    "id" => 1,
    "name" => "John Doe",
    "email" => "johndoe@example.com",
    "avatar" => "../uploads/default_avatar.png" // Initial avatar URL
];

?>
<form class="form-layout" action="update_profile.php" method="post" enctype="multipart/form-data">
    <h2>Profile Information</h2>
    <div >
    <img class ="avatar-upload" src="../uploads/default_avatar.png">
    </div>
    <label class="input-layout" for="name">Name:</label>
    <input class="input-layout" type="text" name="name" value="<?php echo $user['name']; ?>" required>
    <br>
    <label class="input-layout" for="email">Email:</label>
    <input class="input-layout" type="email" name="email" value="<?php echo $user['email']; ?>" disabled>
    <br>
    <label class="input-layout" for="avatar">Avatar:</label>
    <input class="input-layout" type="file" name="avatar" accept="image/*">
    <br>
    <button class="button-submit" type="submit">Update Profile</button>
</form>


</body>
</html>