


<?php


require 'robot.php';
@import('cord_sql');  
$Sci_con=$conn->prepare("SELECT * FROM webd");
$Sci_con->execute();
foreach ($Sci_con as $Sci_col) {

$webname = $Sci_col['webname'];
$weblogo = $Sci_col['img2'];
$webbanner = $Sci_col['img1'];
 $description = "";
}

$DURAL_SQL="SELECT * FROM soci";

$DURAL=$conn->prepare($DURAL_SQL);
$DURAL->execute();
foreach ($DURAL as $key) {


   $wats = $key['wat'];
   $faceb = $key['fb'];
$insta = $key['inst'];
$phone = $key['Phone'];
$twee = $key['TWEETER'];
$linke = $key['linke'];
$email = $key['email'];
$address = $key['adress'];

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $webname; ?> Fc</title>
    <!-- durallMetal -->


    <meta name="author" content="<?php echo $webname; ?>">
  <meta name="googlebot" content="index, follow">
  <meta name="robots" content="index, follow">
 <!-- document-specific social tags -->
  <meta property="og:title" content="<?php echo $webname; ?> FC page">
   <meta name="twitter:title" content="<?php echo $webname; ?> FC page">
 <meta property="og:url" content="<?php echo  $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 ?>">   
  <meta name="twitter:url" content="<?php echo  $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 ?>">
  
  <meta property="og:description" content="<?php echo $description; ?>">
    <meta name="description" content="<?php echo $description; ?>">
  <meta name="twitter:description" content="<?php echo $description; ?>">


  <meta name="twitter:image" content="___p/uploads/<?php echo $webbanner; ?>">
 <meta property="og:image" content="___p/uploads/<?php echo $webbanner; ?>">

<!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="___p/uploads/<?php echo  $weblogo; ?>" type="image/x-icon">
<link rel="apple-touch-icon" href="___p/uploads/<?php echo  $weblogo; ?>">
<link rel="apple-touch-icon" sizes="72x72" href="___p/uploads/<?php echo  $weblogo; ?>">
<link rel="apple-touch-icon" sizes="114x114" href="___p/uploads/<?php echo  $weblogo; ?>">

<!-- end duralMetal -->
  <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <link rel="stylesheet" href="css/font-awesome.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">

   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
   <link rel="stylesheet" href="cdnjs/swiper.min.css">
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Allura&display=swap" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet">


</head>
<body>
   
<!-- header section starts  -->

<header class="header">

   <a href="./" class="logo"><img src="./___p/uploads/<?php echo $weblogo; ?>" alt="" style="height:95px;border-radius: 100%;" class="logoanim"></a>

   <nav class="navbar fw-bold">
      <a href="./#home">home</a>
      <a href="./#about">about</a>
      <a href="./#services">services</a>
      <a href="./#projects">projects</a>
      <a href="./#pricing">pricing</a>
      <a href="./#contact">contact</a>
      <a href="./#blogs">blogs</a>
   </nav>

   <div class="icons">
      <div id="menu-btn" class="fa fa-bars"></div>
      <div id="info-btn" class="fa fa-info-circle"></div>
      <div id="search-btn" class="fa fa-search"></div>
      <div id="login-btn" class="fa fa-user" style="visibility:hidden;"></div>
   </div>

   <form action="" class="search-form">
      <input type="search" name="" placeholder="search here..." id="search-box">
      <label for="search-box" class="fa fa-search"></label>
   </form>

   <form action="" class="login-form">
      <h3>login form</h3>
      <input type="email" placeholder="enter your email" class="box">
      <input type="password" placeholder="enter your password" class="box">
      <div class="flex">
         <input type="checkbox" name="" id="remember-me">
         <label for="remember-me">remember me</label>
         <a href="#">forgot password?</a>
      </div>
      <input type="submit" value="login now" class="btn">
      <p>don't have an account <a href="#">create one!</a></p>
   </form>

</header>

<div class="contact-info">

   <div id="close-contact-info" class="fa fa-times"></div>

   <div class="info">
      <i class="fa fa-phone"></i>
      <h3>phone number</h3>
      <p> <?php  echo str_replace(' , ','<br>', $phone); ?></p>
   </div>

   <div class="info">
      <i class="fa fa-envelope"></i>
      <h3><?php  echo $email; ?></h3>
      <p><?php  echo $email; ?></p>
   </div>

   <div class="info">
      <i class="fa fa-map-marker-alt"></i>
      <h3>Head office </h3>
      <p><?php  echo str_replace(' , ','<br>', $address); ?></p>

   </div>

   <div class="share">
       <a href="<?php  echo $faceb; ?>" class="fa fa-facebook"></a>
      <a href="<?php  echo $twee; ?>" class="fa fa-twitter"></a>
      <a href="<?php  echo $insta; ?>" class="fa fa-instagram"></a>
      <a href="<?php  echo $linke; ?>" class="fa fa-linkedin"></a>
   </div>

</div>



