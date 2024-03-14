


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Đăng nhập</title>
</head>
<body>
<?php if (isset($_GET['msg'])): ?>
    <div class="alert alert-danger" role="alert">
        <?= $_GET['msg'] ?>
    </div>
<?php endif; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <div class="container" style="display: flex ; width: 650px ; height: 350px ; margin-top: 100px; box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.5)"  >
        <div class="row" style="flex: 2; margin-top: 20px;">
            <div class="col-md-8">
                <div class="text-center", style="color: red"><h3>Đăng nhập</h3> <p></p></div>
                <form action="index.php?controller=current&action=login" method="post">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tên đăng nhập</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Mật khẩu</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="passwordd">
                    </div>
                    <button type="submit" class="btn btn-primary" style="margin-top: 5px">Đăng nhập</button>
                </form>
            </div>
        </div>
        <div class="img" style="flex: 1">
            <img src="../project33/public/assets/img/logoTLU.jpg" style="width:170px;height:170px;margin-top: 60px">
        </div>
    </div>
</body>
</html>

