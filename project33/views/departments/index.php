<?php
require_once root.'/config/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý đơn vị</title>
</head>
<body>

<main class="mt-3">
    <div class="container">
        <div class="row">
            <div class="col-md">
                <h2 class="text-center text-primary">Danh sách quản lí đơn vị</h2>
                <?php if (isset($_GET['msg'])): ?>
                    <div class="alert alert-success" role="alert">
                        <?= $_GET['msg'] ?>
                    </div>
                <?php endif; ?>
                <a href="<?= DOMAIN.'index.php?controller=department&action=add' ?>" class="btn btn-primary">Thêm mới</a>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col"> STT</th>
                        <th scope="col"> Tên đơn vị</th>
                        <th scope="col"> Địa chỉ</th>
                        <th scope="col"> Email</th>
                        <th scope="col"> Điện thoại</th>
                        <th scope="col"> Logo</th>
                        <th scope="col"> Website</th>
                        <th scope="col"> Đơn vị trực thuộc</th>
                        <th scope="col" colspan="3" class="text-center"> Thao tác</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $departmentService = new DepartmentService();
                    $departments = $departmentService->getTenDepartment();

                    // echo "<pre>";
                    //  print_r($departments);
                    // echo "</pre>";

                    ?>
                    <?php foreach ($departments as $department): ?>
                        <tr>
                            <td><?= $department->getId(); ?></td>
                            <td><?= $department->getName(); ?></td>
                            <td><?= $department->getAddress(); ?></td>
                            <td><?= $department->getEmail(); ?></td>
                            <td><?= $department->getPhone(); ?></td>
                            <td>
                                
                                <img src="<?php echo DOMAIN.$department->getLogo(); ?>" alt="logo" width="30px" height="30px">
                            </td>
                            <td><?= $department->getWebsite(); ?></td>
                            <td><?= $department->getParentDepartmentId(); ?></td>
                            <td>
                                <a href="<?= DOMAIN.'index.php?controller=department&action=detail&id='. $department->getId() ?>" class="btn btn-primary">
                                <i class="fa-solid fa-eye"></i></a>
                            </td>
                            <td>
                                <a href="<?= DOMAIN.'index.php?controller=department&action=edit&id='. $department->getId() ?>" class="btn btn-warning"><i class="fa-solid fa-pencil"></i></a>
                            </td>

                            <!-- <td>
                                <form action="<?= DOMAIN.'index.php?controller=department&action=delete&id='. $department->getId() ?>" method="POST" onsubmit="return confirm('Đơn vị này có nhiều nhân viên đang hoạt động bạn không thể xóa!')">
                                    <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                                </form>
                            </td> -->

                            <td>
                                <form action="<?= DOMAIN.'index.php?controller=department&action=delete&id='. $department->getId() ?>" method="POST" onsubmit="return confirm('Đơn vị này có nhiều nhân viên đang hoạt động bạn không thể xóa!')">
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
