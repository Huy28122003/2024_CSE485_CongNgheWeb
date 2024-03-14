
<?php
require_once '/laragon/www/2024_CSE485_CongNgheWeb/project33/config/config.php';
require_once root.'/config/config.php';
include root.'/config/header.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quản lý người dùng</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
<div class="container md-3">
    <h3 class="text-center text-primary mt-5">Quản lý người dùng</h3>
    <a href="<?= DOMAIN."views/users/add.php";?>" class="btn btn-success mb-2">Thêm người dùng mới</a>
    <table class="table table-hover">
        <tr class="text-center ">
            <th scope="col"> Số thứ tự</th>
            <th scope="col"> Tên tài khoản</th>
            <th scope="col"> Mật khẩu</th>
            <th scope="col"> Quyền quản trị</th>
            <th scope="col"> Mã nhân viên</th>
            <th scope="col"> Sửa</th>
            <th scope="col"> Xóa</th>
        </tr>
        <?php
        $number=0;
        foreach ($userstest as $user){?>
            <tr class="text-center">
                <td><?= $number++; ?></td>
                <td><?= $user->getName() ?></td>
                <td><?= $user->getPass() ?></td>
                <td><?= $user->getRole() ?></td>
                <td><?= $user->getEmployeeID() ?></td>
                <td><a href="<?= DOMAIN."views/users/edit.php?id={$user->getName()}";?>"> <i class="bi bi-pencil-square"></i></a></td>
                <td><a href="<?= DOMAIN."views/users/delete.php?id={$user->getName()}";?>"> <i class="bi bi-trash-fill"></i></a></td>
            </tr>
            <?php
        }
        ?>

    </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>


