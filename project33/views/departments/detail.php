<?php
include root.'/config/header.php';
?>
<main class="mt-3">
    <div class="container">
        <div class="row">
            <div class="col-md">
                <h2 class="text-center text-primary">Thông tin chi tiết nhân viên</h2>
                <table class="table table-bordered">
                    <tbody>
                    <tr>
                        <th scope="row">Mã đơn vị</th>
                        <td><?= $department->getId() ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Tên đơn vị</th>
                        <td><?= $department->getName() ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Address</th>
                        <td><?= $department->getAddress() ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Email</th>
                        <td><?= $department->getEmail() ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Điện thoại</th>
                        <td><?= $department->getPhone() ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Logo</th>
                        <td>
                            <img src="<?php echo DOMAIN.$department->getLogo(); ?>" alt="logo" width="100px" height="100px">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Website</th>
                        <td><?= $department->getWebsite() ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Mã đơn vị trực thuộc</th>
                        <td><?= $department->getParentDepartmentId() ?></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>