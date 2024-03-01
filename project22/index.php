

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>User</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<div class="container">
    <h2><b>ACCOUNT SETTINGS</b></h2>
    <?php
    $user = [
        "id" => 1,
        "name" => "Lam Nguyen",
        "email" => "Lamnguyen@example.com",
        "avatar" => "uploads/default_avatar.png"
    ];
    ?>
    <div class="row">
        <div class="col-3">
            <p style="color: orangered">Profile</p>
            <p>Password</p>
            <p>Integrations</p>
            <p>Billing</p>
        </div>
        <div class="col-12 col-md-8">
            <form action="update_profile.php" method="post" enctype="multipart/form-data">
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