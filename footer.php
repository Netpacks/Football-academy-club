
<?php


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


 <!-- footer section starts  -->


<section class="footer">

   <div class="icons-container row mb-3">

      <div class="icons col-lg-3 col-12  p-3 border shadow fw-bold ">
         <i  style="font-size:30px;" class="m-3 fa fa-unlock"></i>
         <h3>opening hours</h3>
         <p class="fw-bold"  style="font-size:20px;">07:00am to 10:00pm</p>
      </div>

      <div class="icons col-lg-3 col-12 p-3 border shadow fw-bold">
         <i  style="font-size:30px;" class="m-3 fa fa-phone"></i>
         <h3>phone</h3>
         <p style="display:block;"> <?php  echo str_replace(' , ','<br>', $phone); ?></p>
         

      </div>

      <div class="icons col-lg-3 col-12 p-3 border shadow fw-bold">
         <i  style="font-size:30px;" class="m-3 fa fa-envelope"></i>
         <h3>email</h3>
         <p class="fw-bold"  style="font-size:20px;"> <?php  echo $email; ?> </p>
      </div>
    
     
    
      <div class="icons col-lg-3 col-12 p-3 border shadow fw-bold">
         <i  style="font-size:30px;" class="m-3 fa fa-map"></i>
         <h3>address</h3>
         <p class="fw-bold"  style="font-size:20px;">  <?php  echo str_replace(' , ','<br>', $address); ?></p>
      </div>

   </div>

   <div class="share p-3 w-100 fw-bold">
      <a href="<?php  echo $faceb; ?>" class="fa fa-facebook fw-bold p-3 mx-1 border" style="font-size:20px;"></a>
      <a href="<?php  echo $twee; ?>" class="fa fa-twitter fw-bold p-3 mx-1 border " style="font-size:20px;"></a>
      <a href="<?php  echo $insta; ?>" class="fa fa-instagram fw-bold p-3 mx-1 border " style="font-size:20px;"></a>
      <a href="<?php  echo $linke; ?>" class="fa fa-linkedin fw-bold p-3 mx-1 border " style="font-size:20px;"></a>
   </div>

   <div class="credit" style="text-transform: lowercase;">
   
   
   Copyright @ <?php echo $webname; ?> by <a href="./developer.php"> <?php echo $webname; ?> Developers </a>. All Rights Reserved.
Powered by <?php echo $webname; ?>.
 
</section>



<!-- footer section ends -->



<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="swiper.min.js"></script>
<!-- custom js file link  -->
<script src="js/script.js"></script>

<script>

lightGallery(document.querySelector('.projects .box-container'));

</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js">
</script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
</script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js">
</script> 
<script>
  
       const paragraph = document.querySelector(".parag");
   const btnhide = document.querySelector("#btn-hide");
   const registerform =document.querySelector(".register-form ")
   const loginform  = document.querySelector(".login-form" )
   const created = document.querySelector(".create")
   const logins = document.querySelector(".login");


btnhide.addEventListener("click" , () => {
   paragraph.style.display = "block";
});

created.addEventListener("click", () =>{
   registerform.classList.toggle("active");
   loginform.classList.remove("active")
})

logins.addEventListener("click", () =>{
   registerform.classList.remove("active");
   loginform.classList.toggle("active")
})
       $('.team-slider').owlCarousel({
           loop: true,            
           nav: false,
           autoplay: true,
           autoplayTimeout: 5000,
           smartSpeed: 450,
           margin: 20,
           responsive: {
               0: {
                   items: 1
               },
               768: {
                   items: 2
               },
               991: {
                   items: 3
               },
               1200: {
                   items: 4
               },
               1920: {
                   items: 4
               }
           }
       });
</script>
</body>
</html>