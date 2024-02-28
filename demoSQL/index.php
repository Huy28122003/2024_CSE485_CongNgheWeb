<?php
    require_once 'functions/interactSQL.php';
    $conn = connect();
    $resultCate = getCategories();
    $resultNew = getNews();

    // $conn = new mysqli("localhost","root","","democsdl");
    // $strGetCategories = "select * from categories";
    // $result = mysqli_query($conn,$strGetCategories);

    $dataCategories = [];
    if(mysqli_num_rows($resultCate)>0){
        while($row = mysqli_fetch_assoc($resultCate)){
            $dataCategories[] = $row;
        }
    }

    $dataNews = [];
    if(mysqli_num_rows($resultNew)>0){
        while($row = mysqli_fetch_assoc($resultNew)){
            $dataNews [] = $row;
        }
    }
    mysqli_close($conn);
    echo "<pre>";
        print_r($dataCategories);
        print_r($dataNews);
    echo "</pre>";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Demo SQL</title>
</head>
<body>

<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Categories</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <?php foreach ($dataCategories as $cate): ?>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">
                                <?php echo $cate['category_name'] ?>
                            </a>
                        </li>  
                    <?php endforeach ?>
                </ul>
            </div>
        </div>
    </nav>
</header>
<main>
    <div class="container-fluid mt-2" >
        <div class="row">
            <?php foreach ($dataNews as $new): ?>
                <div class="col-md-3">
                    <div class="card" style="width: 18rem; height: 18rem; margin-top: 20px">
                        <img src="<?php echo $new['feature_image_url'] ?>" class="card-img" alt="..." style="width:; height: 15rem">
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="" class="text-decoration-none">Click here</a>
                            </h5>
                        </div>
                    </div>  
                </div>
            <?php endforeach ?>
        </div>
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>