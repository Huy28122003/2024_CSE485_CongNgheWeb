<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<?php
$products = [
    [
        "id" => 1,
        "name" => "T-Shirt",
        "price" => 15.99,
        "description" => "A comfortable and stylish T-Shirt.",
        "link-img" => "../images/T_Shift.jpg"
    ],
    [
        "id" => 2,
        "name" => "Jean",
        "price" => 23,
        "description" => "A comfortable and stylish Jean.",
        "link-img" => "../images/Jean.jpg"
    ],
    [
        "id" => 3,
        "name" => "Shoe",
        "price" => 53,
        "description" => "Black Tim Junior School Shoes.",
        "link-img" => "../images/Shoes.jpg"
    ],
    [
        "id" => 4,
        "name" => "Socks",
        "price" => 3,
        "description" => "Power through your workout with the Nike",
        "link-img" => "../images/Socks.png"
    ],
    [
        "id" => 5,
        "name" => "Scarf",
        "price" => 13,
        "description" => "Burberry Classic Checked Fringed Scarf",
        "link-img" => "../images/Scarf.jpg"
    ]
];
$itemsPerPage = 4;
$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
$totalPage = ceil(count($products) / $itemsPerPage);
$currentPageItems = array_slice($products, ($currentPage - 1) * $itemsPerPage, $itemsPerPage);

?>
<div class="product-list">
    <?php foreach ($currentPageItems as $products): ?>
        <div class="product">
            <div><img class="imgs" src="<?php echo $products['link-img'] ?>"></div>
            <div><h3> Name : <?php echo $products['name'] ?></h3></div>
            <div>
                <p1> Price : <?php echo $products['price'] ?> </p1>
            </div>
            <div>
                <p1> Description : <?php echo $products['description'] ?></p1>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<div class="pagination">
    <?php if ($currentPage > 1): ?>
        <a href="?page=<?php echo $currentPage - 1; ?>">Previous</a>
    <?php endif; ?>
    <?php for ($i = 1; $i <= $totalPage; $i++): ?>
        <?php if ($i == $currentPage): ?>
            <span class="active"><?php echo $i; ?></span>
        <?php else: ?>
            <a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
        <?php endif; ?>
    <?php endfor; ?>
    <?php if ($currentPage < $totalPage): ?>
        <a href="?page=<?php echo $currentPage + 1; ?>">Next</a>
    <?php endif; ?>
</div>
</body>
</html>