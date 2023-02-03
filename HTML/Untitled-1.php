<?php

@include 'config.php';
session_start();
if(isset($_FILES['file'])){
   $name = $_POST['text'];
   $file_name = $_FILES['file']['name'];
   $tmp_name = $_FILES['file']['tmp_name'];
   $location = "assets/modelviewer/";
   $upload = move_uploaded_file($tmp_name,$location.$file_name);
   $insert_data = "INSERT INTO `datalink` (`id`, `name`, `link`) VALUES
   (' ','$name', '$location$file_name')";
   mysqli_query($conn, $insert_data);
} 
function Product($link, $name)
{
   $product = mysqli_query(mysqli_connect('localhost','root','','login_data'),"select * from `datalink` order by `id`");
   while($row = mysqli_fetch_array($product)){
      echo '<div class="swiper-slide box"> 
     <model-viewer src="' . $link . '" alt="model robot" auto-rotate camera-controls ar ios-src="assets/login/Drossel.gltf"></model-viewer>
     <h3>' . $name . '</h3>
     <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star-half-alt"></i>
     </div>
     <a href="index1.php?id='. $row["id"].'" class="btn">view</a>
     </div>';
   }
   
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

   <!-- model-viewer -->
   <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
   <script nomodule src="https://unpkg.com/@google/model-viewer/dist/model-viewer-legacy.min.js"></script>

</head>

<body>

<div class="view1">
        <div class="box">
            <model-viewer src="assets/login/Drossel.gltf" alt="model robot" auto-rotate camera-controls ar ios-src="assets/login/Drossel.gltf"></model-viewer>
            
        </div>
</div>

   <!-- products section starts -->
   <section class="products" id="products">

      <h1 class="heading"> our <span>products</span> </h1>

      <div class="swiper product-slider">
         
         <div class="swiper-wrapper">
         <?php
         $select = " select name, link from datalink ";
         $result = mysqli_query($conn, $select);
         if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
               Product($row["link"],$row["name"]);
            }
         }
         ?>
         <div class="view">
            <?php
            echo'
            <model-viewer src="'. $link .'" alt="model robot" auto-rotate camera-controls ar ></model-viewer>
            '?>
        </div>
      </div>

   </section>
   <section class="edit" id="edit">
    <h1 class="heading"> user <span>edit</span> </h1>
    <div class="box">
        <form enctype="multipart/form-data" method="post">
            <input type="file" name="file" id="file">
            <input type="text" name="text" placeholder="Enter file name" required>
            <input type="submit" value="upload">
        </form>
    </div>
</section>
   <!-- footer section ends -->

   <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

   <!-- custom js file link  -->
   <script src="js/script.js"></script>
</body>

</html>