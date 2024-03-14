<<<<<<< HEAD
<?php
$products = [
    [
        "id" => 1,
        "name" => "T-Shirt",
        "price" => 15.99,
        "img" => "assets/img/shirt.jpeg",
        "description" => "A comfortable and stylish T-Shirt."
    ],
    [
        "id" => 2,
        "name" => "Jean",
        "price" => 23,
        "img" => "assets/img/jean.jpeg",
        "description" => "A comfortable and stylish Jean."
    ],
    [
        "id" => 3,
        "name" => "Shose",
        "price" => 21,
        "img" => "assets/img/shose.jpeg",
        "description" => "A sport shose"
    ],
    [
        "id" => 4,
        "name" => "Glass",
        "price" => 30,
        "img" => "assets/img/glass.jpeg",
        "description" => "A beautiful glass "
    ],
    [
        "id" => 5,
        "name" => "Hat",
        "price" => 10,
        "img" => "assets/img/hat.jpeg",
        "description" => "A beautiful hat"
    ],
    [
        "id" => 6,
        "name" => "Ring",
        "price" => 100,
        "img" => "assets/img/ring.jpeg",
        "description" => "A silver ring"
    ],
    [
        "id" => 7,
        "name" => "Chair",
        "price" => 10,
        "img" => "assets/img/chair.jpeg",
        "description" => "A beautiful chair"
    ],
    [
        "id" => 8,
        "name" => "Balo",
        "price" => 30,
        "img" => "assets/img/balo.jpeg",
        "description" => "A beautiful balo"
    ]
];

$itemsPerPage = 3;
$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
$totalPages = ceil(count($products) / $itemsPerPage);

$currentPageItems = array_slice($products, ($currentPage - 1) * $itemsPerPage, $itemsPerPage);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.3.3-dist/css//bootstrap.min.css">
    <title>Lab2-1</title>
</head>

<body>
    <div class="product_list " style="display: flex">
        <?php foreach ($currentPageItems as $product) : ?>
            <div class="product" style="margin-right: 20px">
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo $product['img'] ?>" class="card-img-top" alt="..." style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $product['name'] ?></h5>
                        <p class="card-text"><?php echo $product['description'] ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>

    <div class="pagination">
        <?php if ($currentPage > 1) : ?>
            <a href="?page=<?php echo $currentPage - 1; ?>">Previous</a>
        <?php endif; ?>

        <?php for ($i = 1; $i <= $totalPages; $i++) : ?>
            <?php if ($i == $currentPage) : ?>
                <span class="active"><?php echo $i; ?></span>
            <?php else : ?>
                <a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
            <?php endif; ?>
        <?php endfor; ?>
        <?php if ($currentPage < $totalPages) : ?>
            <a href="?page=<?php echo $currentPage + 1; ?>">Next</a>
        <?php endif; ?>
    </div>


    <script src="bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
</body>

=======
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
>>>>>>> main
</html>