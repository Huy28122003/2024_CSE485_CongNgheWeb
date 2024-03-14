<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    
</body>
</html>


<?php
require_once root.'/config/header.php';
?>
<main class="mt-3">
    <div class="container">
        <div class="row">
            <div class="col-md">
                <h2 class="text-center text-primary">Thêm mới nhân viên</h2>
                <form action="index.php?controller=department&action=add" method="post">
                    <div class="mb-4">
                        <label for="username" class="form-label">Tên đơn vị</label>
                        <input class="form-control" type="text" name="name" id="" required>
                    </div>
                    <div class="mb-4">
                        <label for="pass" class="form-label">Địa chỉ</label>
                        <input class="form-control" type="text" name="address" id="" required>
                    </div>
                    <div class="mb-4">
                        <label for="email" class="form-label">Email</label>
                        <input class="form-control" type="email" name="email" id="" required>
                    </div>
                    <div class="mb-4">
                        <label for="pass" class="form-label">Điện thoại</label>
                        <input class="form-control" type="number" name="phone" id="" required>
                    </div>
                    <div class="mb-4">
                        <label for="pass" class="form-label">Logo</label>
                        <input class="form-control" type="text" name="logo" id="">
                    </div>
                    <div class="mb-4">
                        <label for="pass" class="form-label">Website</label>
                        <input class="form-control" type="text" name="website" id="" required>
                    </div>
                    <div class="mb-4">
                        <label for="pass" class="form-label">Đơn vị trực thuộc</label>
                        <input class="form-control" type="text" name="parentDepartmentId" id="" required>
                    </div>
                    <button class="btn btn-primary" type="submit">Thêm</button>
                </form>
            </div>
        </div>
    </div>
</main>
</body>
</html>
