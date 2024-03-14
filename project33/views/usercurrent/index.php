<?php
include 'layout/header.php';
?>

<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h3 class="title">Đơn vị nổi bật</h3>
                </div>
            </div>
            <?php
            $departmentService = new DepartmentService();
            $departments = $departmentService->getTenDepartmentlimit();
            ?>
            <?php foreach ($departments as $department):?>
            <!-- shop -->
            <div class="col-md-4 col-xs-6">
                <div class="shop">
                    <div class="shop-img">
                        <img src="<?= DOMAIN.$department->getLogo();?>" alt="">
                    </div>
                    <div class="shop-body">
                        <h3><?= $department->getName();?></h3>
                        <a href="index.php?controller=current&action=detailde&msg=<?= $user ?>&idd=<?= $id?>&id=<?= $department->getId();?>" class="cta-btn">Chi tiết <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- /shop -->
            <?php endforeach;?>

        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->

<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">

            <!-- section title -->
            <div class="col-md-12">
                <div class="section-title">
                    <h3 class="title">Nhân viên nổi bật</h3>
                </div>
            </div>
            <!-- /section title -->
            <?php
            $employeeService = new EmployeeService();
            $employees = $employeeService->getEmployeelimit();
            ?>
            <!-- Products tab & slick -->
            <div class="col-md-12">
                <div class="row">
                    <?php foreach ($employees as $employee): ?>
                        <!-- product -->
                        <div class="col-md-4 col-xs-6" style="margin-top: 35px">
                            <div class="product">
                                <div class="product-img">
                                    <img src="<?= DOMAIN.$employee->getAvatar();?>" alt="">
                                    <div class="product-label">
                                    </div>
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Employee</p>
                                    <h3 class="product-name"><a href="index.php?controller=current&action=detail&msg=<?= $user ?>&idd=<?= $id?>&id=<?= $employee->getId();?>"><?= $employee->getFullname();?></a></h3>
                                    <h4 class="product-price"> <?= $employee->getPosition();?>

                                    </h4>
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                                <div class="add-to-cart" >
                                    <button  class="add-to-cart-btn" ><i class="fa fa-shopping-cart" ></i> <a href="index.php?controller=current&action=detail&msg=<?= $user ?>&idd=<?= $id?>&id=<?= $employee->getId();?>">Xem chi tiết</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- /product -->
                        <div class="clearfix visible-sm visible-xs"></div>

                    <?php endforeach; ?>
                </div>
            </div>
            <!-- Products tab & slick -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->

<!-- HOT DEAL SECTION -->
<div id="hot-deal" class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <div class="hot-deal">
                    <ul class="hot-deal-countdown">
                        <li>
                            <div>
                                <h3>02</h3>
                                <span>Days</span>
                            </div>
                        </li>
                        <li>
                            <div>
                                <h3>10</h3>
                                <span>Hours</span>
                            </div>
                        </li>
                        <li>
                            <div>
                                <h3>34</h3>
                                <span>Mins</span>
                            </div>
                        </li>
                        <li>
                            <div>
                                <h3>60</h3>
                                <span>Secs</span>
                            </div>
                        </li>
                    </ul>
                    <h2 class="text-uppercase">ĐƠN VỊ NỔI BẬT TRONG TUẦN</h2>
                    <p>Tin tức trong ngày</p>
                    <a class="primary-btn cta-btn" href="#">Chi tiết</a>
                </div>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /HOT DEAL SECTION -->
<?php
include "layout/footer.php";
?>
