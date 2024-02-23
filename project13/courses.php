<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
          integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <title>Khóa học Lập trình</title>
    <style>
        /* Thêm các định kiểu CSS của bạn ở đây */
        .title-course{
            border-left: 7px solid brown;
            padding-left: 10px;
            color: brown;
        }
        img {
            width: 100%;
        }
        i {
            color: brown;
        }
        .course {
            background-color: #fff;
            padding: 10px;
            margin-bottom: 20px;
        }

        .course h2 {
            color: black;
        }

        .course p {
            color: black;
        }
    </style>
</head>
<body>
<?php
// Dữ liệu khóa học lưu động trong mảng
$courses = [
    [
        'img' => 'img/hocbong.jpg',
        'title' => 'Lập trình viên quốc tế',
        'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên
quốc tế.',
        'fee' => '15.000.000 VND',
        'start_date' => '2/2/24',
        'duration' => '2 - 2.5 năm'
    ],
    [
        'img' => 'img/course-web-fullstack.png',
        'title' => 'Lập trình WEB FULLSTACK',
        'description' => 'Khóa học phù hợp với người bắt đầu lập trình hoặc 
        người chuyển nghề.Trang bị từ fronted đến backend, xây dựng website 
        hoàn chỉnh sau khóa học.',
        'fee' => 'Ưu đãi giảm 15% học phí',
        'start_date' => '2/2/24',
        'duration' => '6 tháng'
    ],
    [
        'img' => 'img/course-java-fullstack.png',
        'title' => 'Lập trình JAVA FULLSTACK',
        'description' => 'Phát triển ứng dụng web từ cơ bản đến nâng cao bằng
         Java, các ứng dụng doanh nghiệp sử dụng J2EE, Servlet, JSP, Spring Framework, EJB,...',
        'fee' => 'Ưu đãi giảm 15% học phí',
        'start_date' => '2/2/24',
        'duration' => '236 giờ'
    ],
    [
        'img' => 'img/course-php-laravel.png',
        'title' => 'Lập trình PHP & LARAVEL',
        'description' => 'PHP là một trong các ngôn ngữ thiết kế web mạnh nhất.
        Khóa học trang bị kĩ năng xây dựng web hoàn chỉnh sử dụng PHP kết hợp 
        Laravel Framework.',
        'fee' => '9.600.000 VNĐ',
        'start_date' => '5/2/24',
        'duration' => '36 giờ'
    ],
    [
        'img' => 'img/course-.net.png',
        'title' => 'Khóa học Lập trình .NET',
        'description' => 'Phát triển ứng dụng web sử dụng nền tảng ASP.NET Core
         MVC. Để học tốt khóa học yêu cầu học viên đã có kiến thức về C# và Frontend',
        'fee' => '6.000.000 VNĐ',
        'start_date' => '5/2/24',
        'duration' => '40 giờ'
    ],
    [
        'img' => 'img/course-sql.png',
        'title' => 'Lập trình SQL SERVER',
        'description' => 'Trang bị những kiến thức nền tảng vững chắc về SQL Server 
        như các kỹ thuật: lọc dữ liệu, phân tích, thiết kế và quản trị cơ sở dữ liệu,...',
        'fee' => '4.500.000 VNĐ',
        'start_date' => '5/2/24',
        'duration' => '30 giờ'
    ],
];
// Hiển thị danh sách khóa học
echo '<div class="container">';
echo '<h2 class="title-course">KHÓA HỌC SẮP KHAI GIẢNG</h2>';
echo '<div class="row">';
foreach ($courses as $course) {
    echo '<div class="course col-md-4 col-sm-6">';
    echo '<img src="'. $course['img'] .'" alt="'. $course['title']  .'">';
    echo '<h3>' . $course['title'] . '</h3>';
    echo '<p>' . $course['description'] . '</p>';
    echo '<p> ' . '<i class="fas fa-gift"></i> Học phí:' . $course['fee'] . '</p>';
    echo '<p> ' . '<i class="fas fa-clock"></i> Khai giảng:' . $course['start_date'] . '</p>';
    echo '<p> ' . '<i class="fas fa-bookmark"></i> Thời lượng:' . $course['duration'] . '</p>';
    echo '</div>';

}
echo '</div>';
echo '</div>';
?>
</body>
</html>