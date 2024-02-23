<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        nav ul li{
            cursor: pointer;
        }
        nav ul{
            display: inline-block;
            position: relative;
        }
        nav ul ul{
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 185px;
            height: 40px;
            z-index: 1;
        }
        nav ul ul li a:hover{
            background-color: #000;
            color: #fff;
        }
        nav ul:hover ul{
            display: block;
        }
        nav ul:hover li{
            background-color: transparent;
        }
        nav ul li:hover ul{
            display: block;
        }
    </style>
</head>
<body>
<?php $navItems = [
    "GIỚI THIỆU" => [ "GIỚI THIỆU TRƯỜNG", "GIỚI THIỆU KHOA", "GIỚI THIỆU BỘ MÔN" ],
    "TIN TỨC & THÔNG BÁO" => [ "TIN TỨC", "THÔNG BÁO" ],
    "TUYỂN SINH" => [ "THÔNG TIN TUYỂN SINH", "CHÍNH SÁCH ĐÀO TẠO", "HƯỚNG NGHIỆP" ],
    "ĐÀO TẠO" => [ "NGÀNH ĐÀO TẠO", "HỌC PHÍ", "CHƯƠNG TRÌNH HỌC" ],
    "NGHIÊN CỨU" => [ "CÁC DỰ ÁN NGHIÊN CỨU", "CÔNG TRÌNH KHOA HỌC", "HỢP TÁC NGHIÊN CỨU" ],
    "ĐỐI NGOẠI" => [ "HỢP TÁC QUỐC TẾ", "HỌC BỔNG NGOẠI HỌC", "CHƯƠNG TRÌNH HỌC QUỐC TẾ" ],
    "VĂN BẢN" => [ "QUY CHẾ - QUY ĐỊNH", "BỔ SUNG - SỬA ĐỔI", "VĂN BẢN LIÊN QUAN" ],
    "SINH VIÊN" => [ "THÔNG TIN SINH VIÊN", "HOẠT ĐỘNG SINH VIÊN", "CÔNG TÁC HỖ TRỢ SINH VIÊN" ],
    "LIÊN HỆ" => [ "THÔNG TIN LIÊN HỆ", "HỎI ĐÁP", "GÓP Ý" ] ];
echo '<nav>';
foreach ($navItems as $key => $value) {
    echo '<ul>';
    echo "<li>{$key}";
    if (is_array($value)) {
        foreach ($value as $item) {
            echo '<ul>';
            echo "<li><a>{$item}</a></li>";
            echo '</ul>';
        }
    } echo '</li></ul>';
}
echo '</nav>'; ?>
</body>
</html>
