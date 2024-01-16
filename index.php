<?php
require __DIR__ . "/products.php";

$collar = [
    new accessories(
        "collars",
        "leather",
        "XL",
        "dog",
        "20$",
        "soloDogs",
        "L/XL",
        "outdoor",
        "indoor"

    )
];
$plasticBall = [
    new games(
        "small games",
        "ALL",
        "cat",
        "13$",
        "solocats",
        "plastic",
        "round",
        "red",
    )
];
$meatBall = [
    new food(
        "food",
        "small",
        "dog",
        "15$",
        "pure-dna",
        "solid",
        "small",
        "solid",
    )
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>prod</title>
</head>

<body>
    <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"></h5>
            <p class="card-text"></p>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>