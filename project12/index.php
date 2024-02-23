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