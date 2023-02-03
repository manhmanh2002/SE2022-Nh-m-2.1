<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Model-Viewer</title>
    <link rel="stylesheet" href="css/view.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://kit.fontawesome.com/yourcode.js"></script>
    <!-- model-viewer -->
    <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script> 
    <script nomodule src="https://unpkg.com/@google/model-viewer/dist/model-viewer-legacy.min.js"></script> 


</head>
    <?php
        @include 'config.php';
        session_start();
        $select = 'select * from datalink where id = ' .$_GET['id'];
        $result = mysqli_query(mysqli_connect('localhost','root','','nhom2_1'), $select);
        $product = mysqli_fetch_assoc($result);
    ?>
<body>
    <!-- header section start -->
    <header class="header">
        <a href="" class="logo"> <i class=" fas fa-sharp fa-solid fa-eye"></i> View Model-Viewer</a>
    </header>
    <!-- header section end -->

    <!-- section 3d view start -->
    <section class="view">
        <div class="box">
            <!-- chèn mô hình 3d  start-->
            <model-viewer src="<?=$product['link'] ?>" alt="model robot" auto-rotate camera-controls ar ios-src="<?=$product['link'] ?>"></model-viewer>
            <!-- chèn mô hình 3d end -->
            <h3>NeilArmstrong</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>                    <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>
        <div class="close">
            <a href="./user_web.php"><i class="fas fa-arrow-right"></i></a>
        </div>
    </section>
    <!-- section 3d view end -->
</body>
</html>