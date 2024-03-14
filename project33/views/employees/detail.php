<?php
require_once root.'/config/header.php';

// canhpuss

?>

<main class="mt-3">
    <div class="container">
        <div class="row">
            <div class="col-md">
                <h2 class="text-center text-primary">Thông tin chi tiết nhân viên</h2>
                <table class="table table-bordered">
                    <tbody>
                    <tr>
                        <th scope="row">ID</th>
                        <td><?= $employee->getId() ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Tên</th>
                        <td><?= $employee->getFullname() ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Address</th>
                        <td><?= $employee->getAddress() ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Email</th>
                        <td><?= $employee->getEmail() ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Điện thoại</th>
                        <td><?= $employee->getPhone() ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Vị trí</th>
                        <td><?= $employee->getPosition() ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Ảnh đại diện</th>
                        <td><?= $employee->getAvatar() ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Mã đơn vị</th>
                        <td><?= $employee->getDepartmentID() ?></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
</body>
</html>