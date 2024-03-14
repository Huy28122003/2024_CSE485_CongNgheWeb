<?php
if(isset($_GET['msgg']) && isset($_GET['id']) ){
    $user = $_GET['msgg'];
    $id = $_GET['id'];

}
else{
    $user="";
}


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
          integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <title>Admin</title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand text-primary" href="#">Quản lí danh bạ</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="index.php">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <?php if (isset($_GET['controller']) && $_GET['controller'] == 'department'): ?>
                            <a class="nav-link active" href="index.php?controller=department">Quản lí đơn vị</a>
                        <?php else: ?>
                            <a class="nav-link" href="index.php?controller=department">Quản lí đơn vị</a>
                        <?php endif; ?>
                    </li>
                    <li class="nav-item">
                        <?php if (isset($_GET['controller']) && $_GET['controller'] == 'employee'): ?>
                            <a class="nav-link active" href="index.php?controller=employee">Quản lí nhân viên</a>
                        <?php else: ?>
                            <a class="nav-link" href="index.php?controller=employee">Quản lí nhân viên</a>
                        <?php endif; ?>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?controller=user">Quản lí người dùng </a>
                    </li>
                </ul>
            </div>
            <div>
                <?php if(!empty($user)): ?>
                    <a href="" class="text-decoration-none text-success">Tài khoản: <strong><?= $user?></strong> </a>
                    <a href="index.php?controller=current" class="btn btn-danger" >Thoát</a>
                <?php endif; ?>
            </div>
        </div>
    </nav>
</header>