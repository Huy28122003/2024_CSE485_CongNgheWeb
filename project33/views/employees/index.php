<?php
require_once root.'/config/header.php';
?>

<main class="mt-3">
    <div class="container">
        <div class="row">
            <div class="col-md">
                <h2 class="text-center text-primary">Danh sách quản lí nhân viên</h2>
                <?php if (isset($_GET['msg'])): ?>
                    <div class="alert alert-success" role="alert">
                        <?= $_GET['msg'] ?>
                    </div>
                <?php endif; ?>
                <a href="<?= DOMAIN.'index.php?controller=employee&action=add' ?>" class="btn btn-primary">Thêm mới</a>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col"> Mã nhân viên</th>
                        <th scope="col"> Tên nhân viên</th>
                        <th scope="col"> Địa chỉ</th>
                        <th scope="col"> Email</th>
                        <th scope="col"> Điện thoại</th>
                        <th scope="col"> Phòng ban</th>
                        <th scope="col"> Ảnh đại diện</th>
                        <th scope="col"> Mã đơn vị</th>
                        <th scope="col" colspan="3" class="text-center"> Thao tác </th>
                    </tr>
                    </thead>
                    <tbody>
                    <!--                    --><?php //$i = 0; ?>
                    <?php
                    $employeeService = new EmployeeService();
                    $employees = $employeeService->getAllEmployee();
                    ?>
                    <?php foreach ($employees as $employee): ?>
                        <tr>
                            <td><?= $employee->getId(); ?></td>
                            <td><?= $employee->getFullname(); ?></td>
                            <td><?= $employee->getAddress(); ?></td>
                            <td><?= $employee->getEmail(); ?></td>
                            <td><?= $employee->getPhone(); ?></td>
                            <td><?= $employee->getPosition(); ?></td>
                            <td><img src="<?php echo DOMAIN.$employee->getAvatar(); ?>" alt="logo" width="30px" height="30px">
                            </td>
                            <td><?= $employee->getDepartmentID(); ?></td>
                            <td>
                                <a href="<?= DOMAIN.'index.php?controller=employee&action=detail&id='. $employee->getId() ?>" class="btn btn-primary"><i
                                        class="fa-solid fa-eye"></i></a>
                            </td>
                            <td>
                                <a href="<?= DOMAIN.'index.php?controller=employee&action=edit&id='. $employee->getId() ?>" class="btn btn-warning"><i class="fa-solid fa-pencil"></i></a>
                            </td>
                            <td>
                                <form action="<?= DOMAIN.'index.php?controller=employee&action=delete&id='. $employee->getId() ?>" method="POST" onsubmit="return confirm('Bạn muốn xóa nhân viên này?')">
                                    <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
</body>
</html>
<!--canhpusss-->
