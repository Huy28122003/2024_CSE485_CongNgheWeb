
<?php
require_once root.'/config/header.php';
?>

<main class="mt-3">
    <div class="container">
        <div class="row">
            <div class="col-md">
                <h2 class="text-center text-primary">Thêm mới nhân viên</h2>
                <?php if (isset($_GET['errs'])): ?>
                    <div class="alert alert-danger" role="alert">
                        <?= $_GET['errs'] ?>
                    </div>
                <?php endif; ?>
                <form action="index.php?controller=employee&action=add" method="post">
                    <div class="mb-4">
                        <label for="username" class="form-label">Tên nhân viên</label>
                        <input class="form-control" type="text" name="username" id="username">
                    </div>
                    <div class="mb-4">
                        <label for="pass" class="form-label">Địa chỉ</label>
                        <input class="form-control" type="text" name="address" id="address">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="form-label">Email</label>
                        <input class="form-control" type="email" name="email" id="email">
                    </div>
                    <div class="mb-4">
                        <label for="pass" class="form-label">Điện thoại</label>
                        <input class="form-control" type="number" name="phone" id="phone">
                    </div>
                    <div class="mb-4">
                        <label for="pass" class="form-label">Vị trí</label>
                        <input class="form-control" type="text" name="position" id="position">
                    </div>
                    <div class="mb-4">
                        <label for="pass" class="form-label">Ảnh đại diện</label>
                        <input class="form-control" type="text" name="avatar" id="avatar">
                    </div>
                    <div class="mb-4">
                        <label for="pass" class="form-label">Đơn vi trực thuộc</label>
                        <input class="form-control" type="text" name="departmentID" id="departmentID">
                    </div>
                    <button class="btn btn-primary" type="submit">Tạo</button>
                </form>
            </div>
        </div>
    </div>
</main>
</body>
</html>
