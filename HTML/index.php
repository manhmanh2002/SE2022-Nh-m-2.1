<?php
    // session_start();
    if (isset($_POST['submit'])) {
        session_destroy();
        header('location: login.php');
    }
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

</head>
<body>
    <!-- header section starts  -->

<header class="header">

    <a href="#" class="logo"> <i class="fas fa-shopping-basket"></i> model-viewer </a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#features">features</a>
        <a href="#products">products</a>
        <a href="#categories">categories</a>
        <a href="#review">review</a>
        <a href="#blogs">blogs</a>
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

    <div class="shopping-cart">
       
    </div>

    <form action="" class="login-form" method="POST">
        <h3>profile</h3>
        <div class="box">
            <img src="assets/images/W.png" alt="" class="box">
            <h4>admin</h4>
        </div>
        
        <p>Group: SE2022-NHOM-2.1</p>
        <p>Topic: 3D/AR</p>
        <p>Phone: +345678999</p>
        <p>Address: HaNoi-VietNam</p>
        <p>Universe: Đại học KHTN-Đại học QG Hà Nội</p>
        <input type="submit" name="submit" value="logout" class="btn">
        <div class="fas fa-sign-out-alt" id="logout-btn"></div>
    </form>

</header>

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>
</body>
</html>