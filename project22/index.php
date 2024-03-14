
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>User</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
$user = [
    "id" => 1,
    "name" => "John Doe",
    "email" => "johndoe@example.com",
    "avatar" => "uploads/default_avatar.jpg"
];
?>
<div class="container">
    <h2><b>ACCOUNT SETTINGS</b></h2>
    <div class="row">
        <div class="col-3">
            <p style="color: orangered">Profile</p>
            <p>Password</p>
            <p>Integrations</p>
            <p>Billing</p>
        </div>
        <div class="col-12 col-md-8">
            <form action="upload_profile.php" method="post" enctype="multipart/form-data">
                <h3>Profile Information</h3>
                <img class="round-image" src="<?php echo $user['avatar']; ?>" alt="<?php echo $user['name']; ?>"> <br>
                <label for="name">Name: </label>
                <input type="text" name="name" value="<?php echo $user['name']; ?>" required>
                <br>
                <label for="email">Email: </label>
                <input type="email" name="email" value="<?php echo $user['email']; ?>" disabled> <br>
                <label for="avatar">Avatar: </label>
                <input type="file" name="avatar" accept="image/*"> <br>
                <button type="submit">Update Profile</button>
            </form>
        </div>

    </div>
</div>
</body>
</html>
