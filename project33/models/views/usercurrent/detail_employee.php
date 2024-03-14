<?php
include 'layout/header.php';
?>




<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- Product main img -->
            <div class="col-md-5 col-md-push-2">
                <div id="product-main-img">
                    <div class="product-preview">
                        <img src="../../public/assets/img/avatar_trangchu.jpg" alt="">
                        <img src="<?= DOMAIN.$employee->getAvatar();?>" alt="">
                    </div>

                </div>
            </div>
            <!-- /Product main img -->

            <!-- Product thumb imgs -->
            <div class="col-md-2  col-md-pull-5">

            </div>
            <!-- /Product thumb imgs -->

            <!-- Product details -->
            <div class="col-md-5">
                <div class="product-details">
                    <h2 class="product-name"><?= $employee->getFullname();?></h2>
                    <div>
                        <div class="product-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <a class="review-link" href="#">10 Review(s) | Add your review</a>
                    </div>


                    <div class="product-options">
                        <div>
                            <h3>Địa chỉ:</h3>
                            <p><b><?= $employee->getAddress();?></b></p>
                        </div>
                        <div>
                            <h3>Email:</h3>
                            <p><b><?= $employee->getEmail();?></b></p>
                        </div>
                        <div>
                            <h3>Điện thoại: </h3>
                            <p><b><?= $employee->getPhone();?></b></p>
                        </div>
                        <div>
                            <h3>Vị trí:</h3>
                            <p><b><?= $employee->getPosition();?></b></p>
                        </div>
                        <div>
                            <h3>Đơn vị:</h3>
                            <p><b><?= $employee->getDepartmentID() ?></b></p>
                        </div>
                    </div>



                    <ul class="product-links">
                        <li>Share:</li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                    </ul>

                </div>
            </div>
            <!-- /Product details -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->



<?php
include "layout/footer.php";
?>
