
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thêm người dùng</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
<div class="container mt-5">
    <h3 class="text-center text-success"> Thêm mới người dùng</h3>
    <?php if (isset($_GET['success'])){ ?>
    <div class="alert alert-success" role="alert">
        <?= "Thêm thành công" ?>
        <?php } ?>
        <form action="process_add.php" method="post">
            <div>
                <label for="username" class="form-label">Tên đăng nhập : </label>
                <input class="form-control" type="text" name="username" id="username">
            </div>
            <div>
                <label for="pass" class="form-label">Mật khẩu : </label>
                <input class="form-control" type="text" name="password" id="password">
            </div>
            <div>
                <label for="username" class="form-label">Kiểu (regular hoặc admin) : </label>
                <input class="form-control" type="text" name="role" id="role">
            </div>
            <div>
                <label for="username" class="form-label">Mã nhân viên : </label>
                <input class="form-control" type="text" name="employeeid" id="employeeid">
            </div>
            <button type="submit" class="btn btn-success mt-4"> Thêm mới</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
