
<?php 
require 'robot.php';
@import('cord_sql');

$get = $_GET['id'];
 
$Sci_con=$conn->prepare("SELECT * FROM webd");
$Sci_con->execute();
foreach ($Sci_con as $Sci_col) {

$webname = $Sci_col['webname'];
$weblogo = $Sci_col['img2'];
$webbanner = $Sci_col['img1'];
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
$Sci_con=$conn->prepare("SELECT * FROM Our_footballer WHERE id=? order by id DESC LIMIT 1");
$Sci_con->bindParam(1, $get);
$Sci_con->execute();
foreach ($Sci_con as $Sci_col) {

$Sci_id = $Sci_col['id'];
$Sci_profile = $Sci_col['player_profile'];
$Sci_name = $Sci_col['player_name'];
$Sci_weight = $Sci_col['player_weight'];
$Sci_height = $Sci_col['player_height'];
$Sci_age = $Sci_col['player_age'];
$Sci_value = $Sci_col['player_value'];
$Sci_achieve = $Sci_col['player_achievement'];
$Sci_position = $Sci_col['player_position'];
$Sci_country = $Sci_col['player_country'];

$description = "About : ". $Sci_name . "<br>" .$Sci_achieve. "<br>" . "he is :".$Sci_achieve. "<br>". $Sci_name." ".  $Sci_value  ;


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About <?php echo $Sci_name; ?> </title>
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


  <meta name="twitter:image" content="./___p/uploads/<?php echo $webbanner; ?>">
 <meta property="og:image" content="./___p/uploads/<?php echo $webbanner; ?>">

<!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="./___p/uploads/<?php echo  $weblogo; ?>" type="image/x-icon">
<link rel="apple-touch-icon" href="./___p/uploads/<?php echo  $weblogo; ?>">
<link rel="apple-touch-icon" sizes="72x72" href="./___p/uploads/<?php echo  $weblogo; ?>">
<link rel="apple-touch-icon" sizes="114x114" href="./___p/uploads/<?php echo  $weblogo; ?>">

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
    <style>
        
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&display=swap");
* {
  font-family: 'Poppins', sans-serif;
  margin: 0;
  padding: 0;
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
  text-decoration: none;
  outline: none;
  border: none;
  text-transform: capitalize;
  -webkit-transition: all .2s linear;
  transition: all .2s linear;
}

html {
  font-size: 62.5%;
  overflow-x: hidden;
  scroll-behavior: smooth;
  scroll-padding-top: 7rem;
}

html::-webkit-scrollbar {
  width: 1rem;
}

html::-webkit-scrollbar-track {
  background: transparent;
}

html::-webkit-scrollbar-thumb {
  background: #e60000;
}

section {
  padding: 3rem 9%;
}
    

.btn {
  display: inline-block;
  margin-top: 1rem;
  padding: 1rem 3rem;
  background: #ffa500;
  color: #fff;
  font-size: 1.7rem;
  -webkit-box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
          box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
  cursor: pointer;
}

.btn:hover {
  letter-spacing: .1rem;
}
.about {
  display: -webkit-box !important;
  display: -ms-flexbox !important;
  display: flex !important;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  gap: 2rem;
  margin-top: 70px;
}

.about .image {
  -webkit-box-flex: 1;
      -ms-flex: 1 1 42rem;
          flex: 1 1 42rem;
  padding-bottom: 5rem;
  padding-right: 5rem;
}

.about .image img {
  width: 90%;
  height: 330px;
  -webkit-box-shadow: 4rem 4rem 0 #eee;
          box-shadow: 4rem 4rem 0 #eee;
}

.about .content {
  -webkit-box-flex: 1;
      -ms-flex: 1 1 42rem;
          flex: 1 1 42rem;
}

.about .content .box {
  padding: 3rem;
  background: #eee;
}

.about .content .box h3 {
  font-size: 2.5rem;
  color: #222;
}

.about .content .box p {
  padding: 1rem 0;
  line-height: 2;
  color: #666;
  font-size: 1.4rem;
}

.about .content .icons-container {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  -webkit-box-align: end;
      -ms-flex-align: end;
          align-items: flex-end;
  gap: 2rem;
  margin-top: 2rem;
}

.about .content .icons-container .icons {
  -webkit-box-flex: 1;
      -ms-flex: 1 1 16rem;
          flex: 1 1 16rem;
  background: #eee;
  padding: 2rem;
  text-align: center;
}

.about .content .icons-container .icons i {
  color: #e60000;
  margin-bottom: 1rem;
  font-size: 5rem;
}

.about .content .icons-container .icons p {
  font-size: 1.4rem;
  color: #666;
}


header{
  position: fixed;
  top:0; left: 0; right:0;
  background:#333;
  z-index: 1000;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding:2rem 2%;
}

header .logo{
  font-size: 2.5rem;
  font-weight: bolder;
  color:#fff;
}

header .logo span{
  color:#ffa500;
}

header .navbar a{
  color:#fff;
  font-size: 2rem;
  margin:0 .8rem;
}

header .navbar a:hover{
  color:var(--orange);
}

header .icons i{
  font-size: 2.5rem;
  color:#fff;
  cursor: pointer;
  margin-right: 2rem;
}

header .icons i:hover{
  color:var(--orange);
}

header .search-bar-container{
  position: absolute;
  top:100%; left: 0; right:0;
  padding:1.5rem 2rem;
  background:#333;
  border-top: .1rem solid rgba(255,255,255,.2);
  display: flex;
  align-items: center;
  z-index: 1001;
  clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
}

header .search-bar-container.active{
  clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
}

header .search-bar-container #search-bar{
  width:100%;
  padding:1rem;
  text-transform: none;
  color:#333;
  font-size: 1.7rem;
  border-radius: .5rem;
}

header .search-bar-container label{
  color:#fff;
  cursor: pointer;
  font-size: 3rem;
  margin-left: 1.5rem;
}


@media (max-width:991px){

header{
  padding:2rem;
}

section{
  padding:2rem;
}

}



#menu-bar{
  color: #333;
}

@media (max-width:700px){
.home .content h3{
  font-size: 29px;
}
}

@media (max-width:928px){

#menu-bar{
  display: block;
  color: #fff;
  font-weight: 800;
  font-size: 20px;
  cursor: pointer;
}
#menu-bar .fa{
  color: #fff;
  font-weight: 800;
  font-size: 34px;
}

header .navbar{
  position: absolute;
  top:100%; right:0; left: 0;
  background: #333;
  border-top: .1rem solid rgba(255,255,255,.2);
  padding:1rem 2rem;
  clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
}

header .navbar.active{
  clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
}

header .navbar a{
  display: block;
  border-radius: .5rem;
  padding:1.5rem;
  margin:1.5rem 0;    
  background:#222;
}

}


.footer{
  background: whitesmoke;
}
.footer .box-container {
  display: -ms-grid;
  display: grid;
  -ms-grid-columns: (minmax(25rem, 1fr))[auto-fit];
      grid-template-columns: repeat(auto-fit, minmax(25rem, 1fr));
  gap: 1.5rem;
}

.footer .box-container .box h3 {
  font-size: 2.2rem;
  color: #333;
  padding: 1rem 0;
}

.footer .box-container .box a {
  display: block;
  font-size: 1.4rem;
  color: #666;
  padding: 1rem 0;
}

.footer .box-container .box a:hover {
  color: #ffa500;
}

.footer .box-container .box a:hover i {
  padding-right: 2rem;
}

.footer .box-container .box a i {
  color: #ffa500;
  padding-right: .5rem;
}

.footer .box-container .box p {
  font-size: 1.5rem;
  color: #666;
  margin-bottom: 1rem;
}

.footer .box-container .box form input[type="email"] {
  width: 100%;
  padding: 1rem 1.2rem;
  border-radius: .5rem;
  background: gainsboro;
  font-size: 1.6rem;
  text-transform: none;
  margin: .5rem 0;
}

.footer .credit {
  text-align: center;
  padding: 1rem;
  padding-top: 2.5rem;
  margin-top: 2.5rem;
  font-size: 2rem;
  color: #666;
}

.footer .credit span {
  color: #ffa500;
}







    </style>
</head>
<body>
   
<!-- header section starts  -->

<header class="header">

   <a href="./" class="logo">Top<span>Konnect</span></a>

   <nav class="navbar">
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
      <div id="login-btn" class="fa fa-user"></div>
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





    <section class="about" id="about">

        <div class="image">
            <img src="./___p/uploads/<?php echo $Sci_profile; ?>" alt="">
        </div>
    
        <div class="content">
            <div class="box">
                <h3><?php echo $Sci_name; ?> <span style="color:orangered; font-family:cursive;">From</span> <?php echo $Sci_country; ?></h3>
                <p><?php echo $Sci_achieve; ?></p>
                <a href="#" class="btn">Age : <?php echo $Sci_age; ?></a>
                <a href="#" class="btn">Value : <?php echo $Sci_value; ?></a>
            </div>
            <div class="icons-container">
                <div class="icons">
                    <strong style="font-weight:900; font-size:20px;" >Position</strong>
                    <p><?php echo $Sci_position; ?></p>
                </div>
                <div class="icons">
                    <strong style="font-weight:900; font-size:20px;" >weight</strong>
                    <p><?php echo $Sci_weight; ?></p>
                </div>
                <div class="icons">
                    <strong style="font-weight:900; font-size:20px;">height </strong>
                    <p><?php echo $Sci_height; ?></p>
                </div>
            </div>
        </div>
    
    </section>
    <?php
require "footer.php";
?>
    
  

    <script>
      
let searchBtn = document.querySelector('#search-btn');
let searchBar = document.querySelector('.search-bar-container');
let formBtn = document.querySelector('#login-btn');
let loginForm = document.querySelector('.login-form-container');
let formClose = document.querySelector('#form-close');
let menu = document.querySelector('#menu-bar');
let navbar = document.querySelector('.navbar');
let videoBtn = document.querySelectorAll('.vid-btn');

window.onscroll = () =>{
    searchBtn.classList.remove('fa-times');
    searchBar.classList.remove('active');
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
    loginForm.classList.remove('active');
}

menu.addEventListener('click', () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
});

searchBtn.addEventListener('click', () =>{
    searchBtn.classList.toggle('fa-times');
    searchBar.classList.toggle('active');
});

formBtn.addEventListener('click', () =>{
    loginForm.classList.add('active');
});

formClose.addEventListener('click', () =>{
    loginForm.classList.remove('active');
});
    </script>
</body>
</html>

<?php

}
?>