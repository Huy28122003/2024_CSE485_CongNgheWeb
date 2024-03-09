<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Danh sách khóa học</title>
 <style>
 .courses-container {
   display: grid;
   grid-template-columns: repeat(3, 1fr);
   grid-gap: 20px;
 }
 .course {
 background-color: #f9f9f9;
 padding: 10px;
 margin-bottom: 20px;
 margin-right: 10px;
 width:350px;
 height: fit-content;
 }
 .course h2 {
 color: #333;
 }
 .course p {
 color: #666;
 }
 </style>
</head>
<body>
<div class = "courses-container">
 <?php
 // Dữ liệu khóa học lưu động trong mảng
 $courses = [
 [
 'title' => 'Học viên quốc tế',
 'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên
quốc tế.',
 'fee' => '15.000.000 VND',
 'start_date' => '2/2/24',
 'duration' => '2 - 2.5 năm'
 ],
 
 [
    'title' => 'Full stack',
    'description' => 'Xây dựng 1 website hoàn chỉnh sau khóa học',
    'fee' => '15% học phí',
    'start_date' => '2/24',
    'duration' => '6 tháng'
    ],
    [
        'title' => 'Java',
        'description' => 'J2EE,Servlet,JSP,Spring Framework,EJB,...',
        'fee' => '15% học phí',
        'start_date' => '2/24',
        'duration' => '236 giờ'
        ],
        [
            'title' => 'PHP & Laravel',
            'description' => 'Xây dựng web sử dụng PHP kết hợp framework',
            'fee' => '9.600.000VND',
            'start_date' => '5/2/24',
            'duration' => '36 giờ'
            ],   
            [
            'title' => '.NET',
            'description' => 'ASP.NET Core MVC',
            'fee' => '6.000.000 VND',
            'start_date' => '2/24',
            'duration' => '40 giờ'
            ],
            [
                'title' => 'SQL Server',
                'description' => 'kĩ thuật quản trị cơ sở dữ liệu',
                'fee' => '4.500.000 VND',
                'start_date' => '2/24',
                'duration' => '30 giờ'
                ],
 ];
 // Hiển thị danh sách khóa học
 foreach ($courses as $course) {
 echo '<div class="course" >';
 echo '<h2>' . $course['title'] . '</h2>';
 echo '<p>' . $course['description'] . '</p>';
 echo '<p>Học phí: ' . $course['fee'] . '</p>';
 echo '<p>Khải giảng: ' . $course['start_date'] . '</p>';
 echo '<p>Thời lượng: ' . $course['duration'] . '</p>';
 echo '</div>';
 }
 ?>
</div>
</body>
</html>