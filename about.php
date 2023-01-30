<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="about">

   <div class="row">

      <div class="box">
         <img src="images/about-img-1.png" alt="">
         <h3>why choose us?</h3>
         <p>You can order your groceries anytime, 24/7.Delivery is to your kitchen or local mall locker.Can choose a 1 or 2 hour time-slot for convenienc.Stores send best quality and freshness to minimise complaints.You can avoid the hassle of crowds, and parking queues.Get the best prices; browse offers online at your leisure.Staying on budget is easier.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

      <div class="box">
         <img src="images/about-img-2.png" alt="">
         <h3>what we provide?</h3>
         <p>Our store sells all categories of fresh meats,fruits and vegetables. We provide discounts on weekends.Other than this we provide cashbacks and free delivery on minimum purchases</p>
         <a href="shop.php" class="btn">our shop</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">clients reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>This has made my life so easy, i can make purchase to my home even when i m not around. I dont have to go to a grocery shop anymore with a big list and a big bag on mu bike. Great initiative guys, keep it up.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>John</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>Fastest delivery website with wide range of products in terms of variety and quality. Pretty amazing for any packaged products. A bit iffy for fresh vegetables and fruits, unless its an emergency would suggest buying them in person.Overall I am a fan</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Caitlyn</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>I am totally loving the ease of ordering and the quickest delivery I receive. The products are also of good quality and covers a whole gamut of varieties too.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>David</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>I placed 3 orders so far... their cash back deals are something that you get no where else. I also had a problem with an item in one of the order and the website is so intelligent to resolve my problem. Then delivery is always on time for all my orders, delivery boys are also very respectful thank you .</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Apoorva</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p>Always top service. Well packed products and fast delivery time. Thank you.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Rahul</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p>It was very easy to order. It arrived very fast and all the products were carefully wrapped and they were all as described. I would definitely recommend</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Mian ling</h3>
      </div>

   </div>

</section>









<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>