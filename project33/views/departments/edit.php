
<?php
require_once root.'/config/header.php';
?>
<main class="mt-3">
    <div class="container">
        <div class="row">
            <div class="col-md">
                <h2 class="text-center text-primary">Điển thông tin</h2>
                <form action="index.php?controller=department&action=edit&id=<?= $department->getId() ?>" method="post">
                    <div class="mb-4">
                        <label for="username" class="form-label">Tên đơn vị</label>
                        <input class="form-control" type="text" name="name" id="" required value="<?php echo $department->getName() ?>">
                    </div>
                    <div class="mb-4">
                        <label for="pass" class="form-label">Địa chỉ</label>
                        <input class="form-control" type="text" name="address" id="" required value="<?php echo $department->getAddress() ?>">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="form-label">Email</label>
                        <input class="form-control" type="email" name="email" id="" required value="<?php echo $department->getEmail() ?>">
                    </div>
                    <div class="mb-4">
                        <label for="pass" class="form-label">Điện thoại</label>
                        <input class="form-control" type="number" name="phone" id="" required value="<?php echo $department->getPhone() ?>">
                    </div>
                    <div class="mb-4">
                        <label for="pass" class="form-label">Logo</label>
                        <input class="form-control" type="text" name="logo" id="" value="<?php echo $department->getLogo() ?>" >
                    </div>
                    <div class="mb-4">
                        <label for="pass" class="form-label">Website</label>
                        <input class="form-control" type="text" name="website" id="" required value="<?php echo $department->getWebsite() ?>">
                    </div>
                    <div class="mb-4">
                        <label for="pass" class="form-label">Đơn vị trực thuộc</label>
                        <input class="form-control" type="text" name="parentDepartmentId" id="" required value="<?php echo $department->getParentDepartmentId() ?>">
                    </div>
                    <button class="btn btn-primary" type="submit">Cập nhật</button>
                </form>
            </div>
        </div>
    </div>
</main>
</body>
</html>
