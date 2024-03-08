
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
        <h3>Nhập thông tin</h3>
        <?php if(isset($_GET['notification']) &&$_GET['notification']=='suscess'): ?>
            <div class="alert alert-success">
                suscess
            </div>
        <?php endif;?>
        <form action="process_add_user.php" method="post">
            <div class="mb-3">
                <label for="username" class="form-label">Tên: </label>
                <input type="text" name="username" class="form-control" id="name" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="pass" aria-describedby="emailHelp">

            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </main>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
