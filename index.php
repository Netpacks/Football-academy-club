<?php
require "header.php";
?>

<style>
   
#team {
	padding: 30px 0;
}
.sec-heading h6 {
	font-family: 'Allura', cursive;
	font-size: 65px;
}
.single-box {
	border: none;
	border-radius: 20px;
	overflow: hidden;
	background-color: #fff
}
.info-area {
	padding: 0 20px 45px;
}
.img-area {
	overflow: hidden;
	padding: 15px 0 15px;
}
.img-area img {
	margin: 0 auto;
	-webkit-transition: all 0.5s ease;
	transition: all 0.5s ease;
	max-width: 230px
}
.single-box:hover img {
	-webkit-transform: scale(1.1);
	transform: scale(1.1);
}
.info-area i {
	display: inline-block;
	color: #ffb400;
	margin: 0 4px;
}
.info-area h4 {
	font-weight: 600
}
.info-area h5 {
	color: #3b04db;
	margin: 10px 0 0;
	font-weight: 600
}
.info-area a {
	display: inline-block;
	margin: 25px 0 0;
	background-color: darkorange;
	color: #fff;
	padding: 10px 35px;
	border-radius: 4px;
}
.team-slider .owl-dots {
	position: absolute;
	left: 0;
	right: 0;
	bottom: -60px;
	text-align: center;
	width: 100%;
}
.team-slider button.owl-dot {
	width: 16px;
	height: 16px;
	display: inline-block;
	margin: 0 6px;
	text-align: center;
	border-radius: 50%;
	background-color: #262626;
}
.team-slider .owl-dot.active {
	background-color: coral;
}
.move-animation {
	position: relative;
	-webkit-animation: move-animation 2s ease-in-out infinite;
	animation: move-animation 2s ease-in-out infinite;
}
@-webkit-keyframes move-animation {
	0% {
		top: 3px;
	}
	50% {
		top: -3px;
	}
	100% {
		top: 3px;
	}
}

</style>
<!-- home section starts  -->

<section class="home" id="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">


      <?php
      
$Sci_con=$conn->prepare("SELECT * FROM banner order by id DESC LIMIT 4");
$Sci_con->execute();
foreach ($Sci_con as $Sci_col) {

$Sci_img1 = $Sci_col['banner'];
$Sci_topic = $Sci_col['hero'];
$Sci_content = $Sci_col['text'];

?>
      
      
      <section class="swiper-slide slide" style="background: url(./___p/uploads/<?php  echo $Sci_img1; ?>) no-repeat;">
            <div class="content">
               <h3 class="fw-bold" style="font-family: 'Anton', sans-serif; font-weight: bold;"><?php  echo $Sci_topic; ?></h3>
               <p style="font-family: 'Ramaraja', serif; font-size:19px;"><?php  echo $Sci_content; ?></p>
               <a href="#contact" class="btn btn-outline-primary bg-dark text-white px-5 p-4 fw-bold" style="font-size:19px; border:none; background-color:#000; ">contact us</a>
            </div>
         </section>
        
      


         <?php

$Sci_col=null;

}
?>
        

      </div>

      </div> <div class="swiper-button-next" style="background: linear-gradient(200deg,blue,lightblue);"></div>
      <div class="swiper-button-prev"></div>

   </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->
<?php

$Sci_con=$conn->prepare("SELECT * FROM about_us order by id DESC LIMIT 1");
$Sci_con->execute();
foreach ($Sci_con as $Sci_colab) {

$Sci_VID = $Sci_colab['banner'];
$Sci_topic = $Sci_colab['hero'];
$Sci_content = $Sci_colab['texte'];
$Sci_registered_agent = $Sci_colab['registered_agent'];
$Sci_profesional_player = $Sci_colab['profesional_player'];
$Sci_global_office = $Sci_colab['global_office'];
$Sci_academy_player = $Sci_colab['academy_player'];

?>


<section class="about m-2" id="about">

   <h1 class="heading"> about us </h1>

   <div class="row">

      <div class="video">
         <video src="./___P/uploads/<?php  echo $Sci_VID; ?>" loop muted autoplay></video>
      </div>

      <div class="content">
      <h3><?php echo $Sci_topic; ?></h3>
         <p style="font-family: 'Ramaraja', serif; font-size:19px;"><?php  echo substr($Sci_content,0,300); ?></p>
            <p class="parag px-1" style="display: none;">
            <?php  echo substr($Sci_content,300,1000); ?>
         </p>
               <div id="btn-hide" class="btn btn-outline-primary bg-dark text-white px-5 p-4 fw-bold" style="font-size:19px; border:none; background-color:#000; ">read more</div>
            </div>

   </div>

   <div class="box-container">

      <div class="box">
         <h3><?php echo $Sci_registered_agent; ?>+</h3>
         <p>Registered agent</p>
      </div>

      <div class="box">
         <h3><?php echo $Sci_profesional_player; ?>+</h3>
         <p>Profesional player</p>
      </div>

      <div class="box">
         <h3><?php echo $Sci_global_office; ?>+</h3>
         <p>Global office</p>
      </div>

      <div class="box">
         <h3><?php echo $Sci_academy_player; ?>+</h3>
         <p>Academy player</p>
      </div>

   </div>

</section>
<?php
$Sci_colab=null;

}
?>
<!-- about section ends -->











<!-- foootballer position -->














<!-- services section starts  -->

<section class="services" id="services" style="background-image: url(./___P/assets/pexels-rodnae-productions-7187805.jpg) !important; background-attachment: fixed; background-repeat: no-repeat; background-position: center; background-size: cover;">

   <h1 class="heading text-white"> our services </h1>

   <div class="box-container">


   <?php
      
      $Sci_con=$conn->prepare("SELECT * FROM our_service order by id DESC LIMIT 4");
      $Sci_con->execute();
       $cc = $Sci_con->rowCount();
      if ($cc < 1) {
echo '


      <div class="box shadow">
         <img src="images/serv-1.png" alt="">
         <h3>Result Guarantee</h3>
         <p>We ensure you get quality result more than you can ever imagine.</p>
      </div>

      <div class="box shadow">
         <img src="images/serv-3.png" alt="">
         <h3> No Missing Deadlines</h3>
         <p>We also ensure to keep our promises to avoid disappointment.</p>
      </div>

      <div class="box shadow">
         <img src="images/serv-6.png" alt="">
         <h3>Dedicated Team</h3>
         <p>We Plan out your goals and processes in the best order.</p>
      </div>

      <div class="box shadow">
         <img src="images/serv-5.png" alt="">
         <h3>Individual Approach</h3>
         <p>We Allow for perfect communication.</p>
      </div> 
      
  

';      }else{
      foreach ($Sci_con as $Sci_col_our) {
      
      $Sci_img1 = $Sci_col_our['banner'];
      $Sci_topic = $Sci_col_our['hero'];
      $Sci_content = $Sci_col_our['text'];
      
      ?>
            
         
      <div class="box">
         <img src="./___P/uploads/<?php  echo $Sci_img1; ?>" alt="">
         <h3><?php  echo $Sci_topic; ?></h3>
         <p><?php  echo $Sci_content; ?></p>
      </div>

<?php
$Sci_col_our=null;


      }}
?>
      
   </div>

</section>


<section class="gallery" id="gallery">

   <!-- <h1 class="heading">our <span>gallery</span></h1> -->
   <h1 class="headings">
       <span>o</span>
       <span>u</span>
       <span>r</span>
       <span class="space"></span>
       <span>G</span>
       <span>a</span>
       <span>l</span>
       <span>l</span>
       <span>e</span>
       <span>r</span>
       <span>y</span>

   </h1>

   <div class="box-container">

      <?php

      $Sci_con=$conn->prepare("SELECT * FROM gallery order by id DESC LIMIT 30");
      $Sci_con->execute();
      foreach ($Sci_con as $Sci_col_gal) {
      
      $Sci_id = $Sci_col_gal['id'];
      $Sci_gallery = $Sci_col_gal['gallery'];
      
      ?>
      
       <div class="box">
         <img src="./___P/uploads/<?php echo $Sci_gallery; ?>" alt="">
         <h3 class="title" style="padding-top:5px;">Our Gallery Shot</h3>
           
       </div>

                
<?php
}
$Sci_col_gal=null;

        ?>  
   </div>

</section>


<section class="reviews">

   <h1 class="heading"> clients reviews </h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">


      
<?php


$DURAL_SQL1="SELECT * FROM reviewer";

$DURAL1=$conn->prepare($DURAL_SQL1);
$DURAL1->execute();
foreach ($DURAL1 as $key1) {


   $name1 = $key1['name'];
   $image1 = $key1['img1'];
$content1 = $key1['textbox'];


?>
         <div class="swiper-slide slide">
<p><?php  echo $content1; ?></p> 
           <div class="user">
               <img src="./___P/uploads/<?php  echo $image1; ?>" alt="">
               <div class="info">
                  <h3><?php  echo $name1; ?></h3>
                  <div class="stars">
                     <i class="fa fa-star"></i>
                     <i class="fa fa-star"></i>
                     <i class="fa fa-star"></i>
                     <i class="fa fa-star"></i>
                     <i class="fa fa-star"></i>
                  </div>
               </div>
            </div>
         </div>

<?php
}
?>
      </div>

   </div>

</section>

<!-- reviews section ends -->

<!-- pricing section starts  -->

<!-- pricing section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact" style="background-image: url(./___P/uploads/@Space-package1647344106840473716.jpg) !important; background-attachment: fixed; opacity: 0.5; background-repeat: no-repeat; background-position: center; background-size: cover;">

   <h1 class="heading"> contact us </h1>

   <div class="row">

     
   <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.114065002817!2d3.3816925142665384!3d6.5072429251586525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8cf46d389b4b%3A0x2e5994dbb78f38b4!2s10%20Alara%20St%2C%20Iwaya%20101245%2C%20Lagos!5e0!3m2!1sen!2sng!4v1647343262040!5m2!1sen!2sng"  style="border:0;" allowfullscreen="" loading="lazy"></iframe>
     <!-- modify this form HTML and place wherever you want your form -->
<form id="my-form" action="https://formspree.io/f/xrgjqeoa" method="POST" style="height:350px;">
   <br>
   <br> <br>
   <br>
  <label style="font-weight:900;" > Your Email:</label>
  <input type="email" name="email" class="box" style="font-weight:900;" />
  <label style="font-weight:900;" > Your Message:</label>
  <input type="text" name="message" class="box" style="font-weight:900;"  />
  <button id="my-form-button" style="padding:15px;border-radius:20px;font-weight:900;">Submit</button>
  <p id="my-form-status"></p>
</form>

   </div>

</section>

<!-- contact section ends -->

<!-- blogs section starts  -->

<section class="blogs" id="blogs">

   <h1 class="heading"> our blogs </h1>

   <div class="swiper blogs-slider">

      <div class="swiper-wrapper">



            
<?php

$Sci_con=$conn->prepare("SELECT * FROM blog order by id DESC LIMIT 3");
$Sci_con->execute();
foreach ($Sci_con as $Sci_col_blog) {

$Sci_id = $Sci_col_blog['id'];
$Sci_img1 = $Sci_col_blog['img1'];
$Sci_topic = substr($Sci_col_blog['topic'],0,28);
$Sci_content = substr(strip_tags($Sci_col_blog['textbox']),0,120);
$Sci_date = $Sci_col_blog['date'];

?>


         <div class="swiper-slide slide">
            <div class="image">
               <img src="./___P/uploads/<?php echo $Sci_img1; ?>" alt="">
            </div>
            <div class="content">
               <h3> <?php echo $Sci_topic; ?>...</h3>
               <p> <?php echo $Sci_content; ?>...</p>
               <a href="readmode.php?id=<?php echo $Sci_id; ?>" class="btn p-4 border fw-bold bg-light rounded-3">read more</a>
            </div>
         </div>
         <?php
         $Sci_col_blog=null;

      }
              ?>

      </div>

   </div>

</section>

<!-- blogs section ends -->

<!-- client logo section starts -->

<section class="logo-container">
   <div class="swiper logo-slider">
      <div class="swiper-wrapper">

      <?php

$Sci_con=$conn->prepare("SELECT * FROM sponsors order by id");
$Sci_con->execute();
foreach ($Sci_con as $Sci_col_spons) {

$Sci_imggt = $Sci_col_spons['gallery'];

?>  

<div class="swiper-slide slide"><img src="./___P/uploads/<?php  echo $Sci_imggt; ?>" alt=""></div>


<?php
$Sci_col_spons=null;

}
?>



      </div>
   </div>
</section>

<!-- client logo section ends -->

<!-- Place this script at the end of the body tag -->
<script>
    var form = document.getElementById("my-form");
    
    async function handleSubmit(event) {
      event.preventDefault();
      var status = document.getElementById("my-form-status");
      var data = new FormData(event.target);
      fetch(event.target.action, {
        method: form.method,
        body: data,
        headers: {
            'Accept': 'application/json'
        }
      }).then(response => {
        if (response.ok) {
          status.innerHTML = "Thanks for your submission!";
          form.reset()
        } else {
          response.json().then(data => {
            if (Object.hasOwn(data, 'errors')) {
              status.innerHTML = data["errors"].map(error => error["message"]).join(", ")
            } else {
              status.innerHTML = "Oops! There was a problem submitting your form"
            }
          })
        }
      }).catch(error => {
        status.innerHTML = "Oops! There was a problem submitting your form"
      });
    }
    form.addEventListener("submit", handleSubmit)
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<?php
require "footer.php";
?>