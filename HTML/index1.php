<?php
@include 'config.php';
session_start();
$select = 'select * from datalink where id = ' .$_GET['id'];
$result = mysqli_query(mysqli_connect('localhost','root','','login_data'), $select);
$product = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Model-viewer</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- model-viewer -->
    <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
    <script nomodule src="https://unpkg.com/@google/model-viewer/dist/model-viewer-legacy.min.js"></script>

</head>

<body>

    <!-- header section starts  -->

    <header class="header">
        <a href="#" class="logo"> <i class="fas fa-shopping-basket"></i> model-viewer </a>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#products">products</a>
            <a href="#edit"> user edit</a>
            <a href="#review">review</a>
        </nav>

        <div class="icons">
            <div class="fas fa-bars" id="menu-btn"></div>
            <div class="fas fa-search" id="search-btn"></div>
            <div class="fas fa-shopping-cart" id="cart-btn"></div>
            <div class="fas fa-user" id="login-btn"></div>

        </div>

        <form action="" class="search-form">
            <input type="search" id="search-box" placeholder="search here...">
            <label for="search-box" class="fas fa-search"></label>
        </form>

        <div class="view1">
            <div class="box">
                <model-viewer src="assets/login/Drossel.gltf" alt="model robot" auto-rotate camera-controls ar ios-src="assets/login/Drossel.gltf"></model-viewer>
            </div>
        </div>

    </header>

    <h1 class="heading"> our <span>products</span> </h1>

    <div class="swiper product-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <model-viewer src="<?=$product['link'] ?>" alt="model robot" auto-rotate camera-controls ar ios-src="assets/login/Drossel.gltf"></model-viewer>
                
            </div>
        </div>

    </div>

    </section>

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>
</body>

</html>