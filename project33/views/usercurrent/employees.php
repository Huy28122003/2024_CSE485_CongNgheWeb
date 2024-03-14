<?php
include "layout/header.php";
require_once root.'/service/EmployeeService.php';


$employeeService = new EmployeeService();
$employees = $employeeService->getAllEmployee();


?>


    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">

                <!-- STORE -->
                <div id="store" class="col-md-12">
                    <!-- store top filter -->
                    <div class="store-filter clearfix">
                        <div class="store-sort">
                            <label>
                                Sort By:
                                <select class="input-select">
                                    <option value="0">Popular</option>
                                    <option value="1">Position</option>
                                </select>
                            </label>

                            <label>
                                Show:
                                <select class="input-select">
                                    <option value="0">20</option>
                                    <option value="1">50</option>
                                </select>
                            </label>
                        </div>
                        <ul class="store-grid">
                            <li class="active"><i class="fa fa-th"></i></li>
                            <li><a href="#"><i class="fa fa-th-list"></i></a></li>
                        </ul>
                    </div>
                    <!-- /store top filter -->

                    <!-- store products -->
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
                    <!-- /store products -->

                    <!-- store bottom filter -->
                    <div class="store-filter clearfix">
                        <span class="store-qty">Showing 20-100 products</span>
                        <ul class="store-pagination">
                            <li class="active">1</li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </div>
                    <!-- /store bottom filter -->
                </div>
                <!-- /STORE -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->
<?php
include "layout/footer.php"
?>

<!--canhpussh-->
