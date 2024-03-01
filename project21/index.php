<?php
$products = [
    [
        "id" => 1,
        "name" => "Pen-red",
        "price" => '$15',
        "description" => "A comfortable and stylish T-Shirt."
    ],
    [
        "id" => 2,
        "name" => "Pen-blue",
        "price" => '$13',
        "description" => "A comfortable and stylish Jean."
    ],
    [
        "id" => 3,
        "name" => "Pen-black",
        "price" => '$14',
        "description" => "A comfortable and stylish Jean."
    ],
    [
        "id" => 4,
        "name" => "Pen-green",
        "price" => '$20',
        "description" => "A comfortable and stylish Jean."
    ],
    [
        "id" => 5,
        "name" => "Pen-Yellow",
        "price" => '$19',
        "description" => "A comfortable and stylish Jean."
    ],
    [
        "id" => 6,
        "name" => "Pen-Pink",
        "price" => '$18',
        "description" => "A comfortable and stylish Jean."
    ],
];
$itemsPerPage = 3;
$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
$totalPages = ceil(count($products) / $itemsPerPage);
 $currentPageItems =
     array_slice($products, ($currentPage - 1) * $itemsPerPage, $itemsPerPage)
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <h1>Shop</h1>

    <div class="product-list" style="display: flex; text-align: center">
        <?php foreach ($currentPageItems as $product): ?>
            <div class="product" style="margin: auto">
                <div class="card" style="width: 18rem;">
                    <img src="image/pen.png" class="1" alt=".">
                    <div class="1-body">
                        <h5 class="1-title"><?php echo $product['name'] ?></h5>
                        <p class="1-text"><?php echo $product['price'] ?></p>
                        <a href="#" class="btn btn-primary">Buy</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="pagination">
        <?php if ($currentPage > 1): ?>
            <a href="?page=<?php echo $currentPage - 1; ?>">Previous</a>
        <?php endif; ?>
        <?php for ($i = 1; $i <= $totalPages; $i++): ?>
            <?php if ($i == $currentPage): ?>
                <span class="active"><?php echo $i; ?></span>
            <?php else: ?>
                <a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
            <?php endif; ?>
        <?php endfor; ?>
        <?php if ($currentPage < $totalPages): ?>
            <a href="?page=<?php echo $currentPage + 1; ?>">Next</a>
        <?php endif; ?>
    </div>

</body>
</html>