<?php
if(isset($_GET['msg']) && isset($_GET['id']) ){
    $user = $_GET['msg'];
    $id = $_GET['id'];

}
else{
    $user="";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Tra cứu danh bạ điện tử</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="/project33/public/assets/css/bootstrap.min.css"/>

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="/project33/public/assets/css/slick.css"/>
    <link type="text/css" rel="stylesheet" href="/project33/public/assets/css/slick-theme.css"/>

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="/project33/public/assets/css/nouislider.min.css"/>

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="/project33/public/assets/css/font-awesome.min.css">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="/project33/public/assets/css/style.css"/>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<!-- HEADER -->
<header>
    <!-- TOP HEADER -->
    <div id="top-header">
        <div class="container">
            <ul class="header-links pull-left">
                <li><a href="#"><i class="fa fa-phone"></i> +021-95-51-84</a></li>
                <li><a href="#"><i class="fa fa-envelope-o"></i> email@email.com</a></li>
                <li><a href="#"><i class="fa fa-map-marker"></i> 1734 Stonecoal Road</a></li>
            </ul>
            <ul class="header-links pull-right">
                <li><a href="#"><i class="fa fa-dollar"></i> USD</a></li>
                <li><a href="#"><i class="fa fa-user-o"></i> My Account</a></li>
            </ul>
        </div>
    </div>
    <!-- /TOP HEADER -->

    <!-- MAIN HEADER -->
    <div id="header">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- LOGO -->
                <div class="col-md-3" style="margin-right: 200px;">
                    <div class="header-logo">
                        <a href="#" class="logo">
                            <img src="/project33/public/assets/img/avatar_trangchu.jpg" alt="">
                        </a>
                    </div>
                </div>
                <!-- /LOGO -->

                <!-- SEARCH BAR -->
                <div class="col-md-6" >
                    <div style="margin-top: 20px;">
                        <h1 style="color: white;">Tra cứu danh bạ điện tử</h1>
                    </div>
                    <div class="header-search" >
                        <form>
                            <select class="input-select">
                                <option value="0">All Categories</option>
                                <option value="1">Category 01</option>
                                <option value="1">Category 02</option>
                            </select>
                            <input class="input" placeholder="Search here">
                            <button class="search-btn">Search</button>
                        </form>
                    </div>
                    <div style="margin-top: 20px;">
                        <p style="color: white;">Website tra cứu danh bạ điện tử là một dự án của tổ chức XYZ, nhằm cung cấp một công cụ tiện ích cho cộng đồng. Tổ chức XYZ là một tổ chức phi lợi nhuận, hoạt động trong lĩnh vực giáo dục, văn hóa và xã hội. Tổ chức XYZ được thành lập vào năm 2020, với sứ mệnh là góp phần nâng cao chất lượng cuộc sống của người dân Việt Nam.</p>
                    </div>
                </div>
                <!-- /SEARCH BAR -->


            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </div>
    <!-- /MAIN HEADER -->
</header>
<!-- /HEADER -->

<!-- NAVIGATION -->
<nav id="navigation">
    <!-- container -->
    <div class="container">
        <!-- responsive-nav -->
        <div id="responsive-nav">
            <!-- NAV -->
            <ul class="main-nav nav navbar-nav">
                <li class="active"><a href="#">Trang chủ</a></li>
                <?php if(!empty($user)): ?>
                    <li><a href="index.php?controller=employee&action=edit&id=<?= $id?>"><?= $user ?></a></li>
                    <li><a href="../departments.php">Đơn vị</a></li>
                    <li><a href="index.php?controller=current&action=employee&msg=<?= $user ?>&id=<?= $id?>">Nhân viên</a></li>

                <?php else: ?>
                    <li><a href="index.php?controller=current&action=login">Đăng nhập</a></li>
                <?php endif; ?>

<!--                <li><a href="#">Thông tin cá nhân</a></li>-->
            </ul>
            <!-- /NAV -->
        </div>
        <!-- /responsive-nav -->
    </div>
    <!-- /container -->
</nav>
<!-- /NAVIGATION -->
