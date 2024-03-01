<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<?php
$products = [
    [
        "image" => "image/T-Shirt.png",
        "id" => 1,
        "name" => "T-Shirt",
        "price" => 15.99,
        "description" => "A comfortable and stylist T-Shirt."
    ],
    [
        "image" => "image/T-Shirt.png",
        "id" => 2,
        "name" => "T-Shirt",
        "price" => 15.99,
        "description" => "A comfortable and stylist T-Shirt."
    ],
    [
        "image" => "image/T-Shirt.png",
        "id" => 3,
        "name" => "T-Shirt",
        "price" => 15.99,
        "description" => "A comfortable and stylist T-Shirt."
    ],
    [
        "image" => "image/T-Shirt.png",
        "id" => 4,
        "name" => "T-Shirt",
        "price" => 15.99,
        "description" => "A comfortable and stylist T-Shirt."
    ],
    [
        "image" => "image/jean.jpg",
        "id" => 5,
        "name" => "Jean",
        "price" => 23,
        "description" => "A comfortable and stylist Jean."
    ],
];
$itemPerPage = 4;
$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
$totalPages = ceil(count($products) / $itemPerPage);
$currentPageItems = array_slice($products, ($currentPage - 1) * $itemPerPage, $itemPerPage)
?>

<div class="products-list" style="padding-left: 30px">
    <div class="row">
    <?php foreach ($currentPageItems as $product): ?>
        <div class="products col-md-3 col-sm-6">
            <?php
            echo '<img src="'. $product['image'] . '" alt="' . $product['id'] .'">';
            echo '<h3>'. $product['name'] .'</h3>' ;
            echo '<p>' .$product['price'] .'</p>' ;
            echo '<p>'  .$product['description'] . '</p>' ;
            ?>
        </div>
    <?php endforeach; ?>
    </div>
</div>
<div class="pagination">
    <?php if ($currentPage > 1): ?>
        <a href="?page=<?php echo $currentPage - 1 ?>">Previous</a>
    <?php endif; ?>
    <?php for ($i = 1; $i <= $totalPages; $i++): ?>
        <?php if ($i == $currentPage): ?>
            <span class="active"><?php echo $i; ?></span>
        <?php else: ?>
            <a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
        <?php endif; ?>
    <?php endfor; ?>

    <?php if ($currentPage < $totalPages): ?>
        <a href="?page=<?php echo $currentPage + 1 ?>">  Next-></a>
    <?php endif; ?>
</div>
</body>
</html>