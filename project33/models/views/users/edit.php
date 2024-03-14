<?php
require_once 'process_add.php';
require_once root.'/config/header.php';
require_once root.'/service/UserService.php';
$usr=$_GET['id'];
$userServicee = new UserService();
$us = $userServicee->searchUser($usr);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chỉnh sửa thông tin người dùng</title>

</head>
<body>
<div class="container">
    <h3 class="text-center text-primary">Chỉnh sửa thông tin</h3>
    <form action="process_edit.php?id=<?="$usr";?>" method="post">
        <div>
            <label for="username" class="form-label">Tên đăng nhập : </label>
            <input class="form-control" type="text" name="username" id="username" value ="<?php echo $us->getName(); ?>" readonly>
        </div>
        <div>
            <label for="pass" class="form-label">Mật khẩu : </label>
            <input class="form-control" type="text" name="password" id="password" value ="<?= $us->getPass(); ?>">
        </div>
        <div>
            <label for="username" class="form-label">Kiểu (regular hoặc admin) : </label>
            <input class="form-control" type="text" name="role" id="role" value ="<?= $us->getRole(); ?>">
        </div>
        <div>
            <label for="username" class="form-label">Mã nhân viên : </label>
            <input class="form-control" type="text" name="employeeid" id="employeeid" value ="<?= $us->getEmployeeID(); ?>">
        </div>
        <button type="submit" class="btn btn-primary mt-3"> Cập nhật</button>
    </form>
</div>
</body>
</html>
