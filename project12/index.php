<<<<<<< HEAD
<?php
$navItems = [
 "GIỚI THIỆU",
 "TIN TỨC & THÔNG BÁO",
 "TUYỂN SINH",
 "ĐÀO TẠO",
 "NGHIÊN CỨU",
 "ĐỐI NGOẠI",
 "VĂN BẢN",
 "SINH VIÊN",
 "LIÊN HỆ"
];
echo "<div style='background:blue'><nav><ul style='display: flex;'>";
foreach ($navItems as $item) {
 echo "<li style='color:white; margin-right: 20px;'>$item</li>";
}
echo '</ul></nav></div>';
?>
=======
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bo Giao duc & Dao tao</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
          integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>
<body>
<?php
$navItems1 = "";
$navItems = [
    "GIỚI THIỆU",
    "TIN TỨC & THÔNG BÁO",
    "TUYỂN SINH",
    "ĐÀO TẠO",
    "NGHIÊN CỨU",
    "ĐỐI NGOẠI",
    "VĂN BẢN",
    "SINH VIÊN",

];
$navItemsLast = "LIÊN HỆ";
echo '<nav><ul>';
echo "<li class='fas fa-home' id='title'>$navItems1</li>";
foreach ($navItems as $item) {
    echo "<li id='title'>$item</li>";
}
echo "<li>$navItemsLast</li>";
echo '</ul></nav>';
?>


</body>
</html>
>>>>>>> main
