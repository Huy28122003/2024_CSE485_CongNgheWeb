<?php
    $data = Array(
        "Huy",
        "Manh",
        "Binh",
        "Cuong",
        "Phuong",
        "Phuc",
        "Dat",
        "Linh",
        "Trang",
        "Minh",
        "Tam",
        "Hanh",
        "Dieu",
        "Kien",
        "Ha"
    );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<!--    <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.min.css">-->
    <title>Document</title>
</head>
<body>
<div class="container">
  <div class="row">
    <?php foreach ($data as $dt): ?>
        <div class="col-md-2">
            <div><?php echo $dt ?></div>
        </div>
    <?php endforeach ?>
  </div>
</div>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<!--<script src="bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>-->

</body>
</html>
