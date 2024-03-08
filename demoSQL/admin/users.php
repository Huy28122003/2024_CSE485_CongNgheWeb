<?php
require_once '../functions/interactSQL.php';
$users = getAllUsers();
//echo "<pre>";
//    print_r($users);
//echo"</pre>";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tin Viet Nam</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
<div class="container-fluid">
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">VietNam</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="dashboard.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Quản lý tin tức</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Quản lý người dùng</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Quản lý danh mục</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <a href="logout.php" class="text-decoration-none">Thoát</a>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <h3>Danh sách người dùng</h3>
        <a href="add_user.php"  class="btn btn-primary">Thêm mới</a>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Tên</th>
                <th scope="col">Thư điện tử</th>
                <th scope="col">Chi tiết</th>
                <th scope="col">Sửa</th>
                <th scope="col">Xóa</th>
                <th scope="col">Đổi mật khẩu</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <?php foreach ($users as $user): ?>
                    <th scope="row"><?php echo $user['user_id'];?></th>
                    <td><?php echo $user['username'];?></td>
                    <td><?php echo $user['email'];?></td>
                    <td>
                        <a href="user_detail.php?id=<?=$user['user_id'];?>" class="btn btn-primary">
                            <i class="bi bi-eye-fill"></i>
                        </a>
                    </td>
                    <td>
                        <a href="user_update.php?id=<?=$user['user_id'];?>"" class="btn btn-warning">
                            <i class="bi bi-pencil-fill"></i>
                        </a>
                    </td>
                    <td>
                        <a href="user_delete.php?id=<?=$user['user_id'];?>"" class="btn btn-dark">
                            <i class="bi bi-trash3-fill"></i>
                        </a>
                    </td>
                    <td>
                        <a href="user_change_pass.php?id=<?=$user['user_id'];?>" " class="btn btn-danger">
                            <i class="bi bi-key-fill"></i>
                        </a>
                    </td>
                </tr>
            <?php endforeach;?>

            </tbody>
        </table>

    </main>
    <footer>
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>
    </footer>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>