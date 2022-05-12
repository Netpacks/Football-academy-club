<?php 

require 'robot.php';
@import('form');
@import('cord_sql');





if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $err = '<strong style="color:red;">Incorrect email Or password or form is null</strong>';



$fff = '
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="SciDream.Dev contributors">
<title>Laboratory</title>

<link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/headers/">
<link rel="shortcut icon" href="battery-charging.svg" type="image/x-icon">
<link rel="apple-touch-icon" href="battery-charging.svg">
<link rel="apple-touch-icon" sizes="72x72" href="battery-charging.svg">
<link rel="apple-touch-icon" sizes="114x114" href="battery-charging.svg">
<meta http-equiv="content-type" content="text/html; charset=windows-1252">
<link rel="shortcut icon" href="battery-charging.svg" type="image/x-icon">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="ADMIN_files/jquery-3.6.0.min.js"></script> 
<script src="ADMIN_files/jquery.form.min.js"></script> 
<script src="ADMIN_files/jquery.maxlength.js"></script> 
<!-- Bootstrap core CSS -->
<link href="ADMIN_files/bootstrap.css" rel="stylesheet">

 <style>
  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
  }

  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }
</style>

<!-- Custom styles for this template -->
<link href="ADMIN_files/sidebars.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="ADMIN_files/headers.css" rel="stylesheet">

<body class="sidoscroll" >
<br><br>








<center>



<div class="container p-3">




<h2 style="font-weight: bolder;">Admin Gate</h2>
<br>



            
            

<div class="d-dural-flex-child1 p-2">


<small class="text-muted" > '.$err.'</small>
</div>


<div class="bg-light p-3 col-lg-8" style="border-radius: 20px; border: 1px solid rgb(230, 227, 227);">
                    

<form class="p-4 p-md-5 border rounded-3 bg-light" method="post" action="'. htmlspecialchars($_SERVER["PHP_SELF"]).'">
    <div class="form-floating mb-3">
      <input type="email" name="email" required="" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating mb-3">
        <input type="password" required="" name="pass" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div>        
    <button class="w-100 btn btn-lg btn-primary bg-twist" type="submit" style="border: none;">Enter</button>
    <hr class="my-4">
    <small class="text-muted"><span style="color:pink;">Forget password?</span> Contact the Admin For Retrieve of Password </small>
  </form>
                         
                                      
                                          
</div>
</div>
            
</div>
</center>
<br>
<br>
<br>
<br>
<br>
<br>
<br>





<footer class="footer mt-5 py-3 text-white bg-twist-bold" style="position: fixed; bottom: 0;width: 100%;left: 0;">

      <center>
<p style="font-weight:800;">Admin Develope and Design By <a href="http://www.durallite.epizy.com">Durallite</a> Packages</p>
</center>

</footer>

<!-- footer -->
<!-- end footer --> 




</body></html>
';

  
?>
  





  <?php



if (empty($_POST['email'] && $_POST['pass'])) {
  

echo $fff;

}

elseif (empty($_POST['email'] || $_POST['pass'])) {
  
echo $fff;

}


else{
$email = strip_tags($_POST['email']);
$pass = strip_tags($_POST['pass']);


$DURAL_SQL="SELECT * FROM anti WHERE user282200123=?";

$DURAL=$conn->prepare($DURAL_SQL);
$DURAL->bindParam(1, $email);
$DURAL->execute();
$COUNT=$DURAL->rowCount();
if ($COUNT < 1) {


echo $fff;


}
else{
foreach ($DURAL as $key) {
  $relapass=$key['password282200123'];
  $id=$key['id'];
  if (!password_verify($pass, $relapass)) {

    
  
echo $fff;


    
  }
  




else{


?>



<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="SciDream.Dev contributors">
  <title> Topkonnect Laboratory</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/headers/">
<link rel="shortcut icon" href="./assets/logo.jpg" type="image/x-icon">
<link rel="apple-touch-icon" href="./assets/logo.jpg">
<link rel="apple-touch-icon" sizes="72x72" href="./assets/logo.jpg">
<link rel="apple-touch-icon" sizes="114x114" href="./assets/logo.jpg">
<meta http-equiv="content-type" content="text/html; charset=windows-1252">
<link rel="shortcut icon" href="./assets/logo.jpg" type="image/x-icon">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="ADMIN_files/jquery.maxlength.js"></script> 
  <!-- Bootstrap core CSS -->
<script src="ADMIN_files/jquery-3.6.0.min.js"></script>

<script src="ADMIN_files/jquery.form.min.js"></script>

  <!-- Bootstrap core CSS -->
<link href="ADMIN_files/bootstrap.css" rel="stylesheet">

   <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }
.btn-danger{
background-color:lightblue !important;
border:none;
}
    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    .active_row{
      cursor: pointer !important;
      border-top:5px solid  #006ff7 !important;

    } 
    .row_menu{
      height: 50px; 
      cursor: pointer !important;
       color: gray; 
       border-bottom: 0px solid transparent !important;
    }

  </style>

  <!-- Custom styles for this template -->
  <link href="ADMIN_files/sidebars.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="ADMIN_files/headers.css" rel="stylesheet">

<body class="sidoscroll" onload="$space_load('stact.php','sign')">

<header class="p-1  border-bottom shadow" style="border-radius: 0px 0px 50px 50px;
">

<div class="container">
  <div class="d-flex p-2 flex-wrap align-items-center justify-content-end">
    <a href="#" class="d-block link-dark text-decoration-none mx-3" style="outline: 0; font-size: 20px; font-weight: bolder; white-space: nowrap;">
   <strong style="color:#006ff7;"> Top<strong style="color:#0d468b;font-size:30px;">K</strong><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="" viewBox="0 0 16 16">
<path d="M13 1a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h10zM3 0a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V3a3 3 0 0 0-3-3H3z"/>
<path d="M5.5 4a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm8 0a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0 8a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm-8 0a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
</svg>nnect</strong>

    </a>

  </div>
</div>
</header>

<br>


<div class="d-dural-flex container-fluid ">


<div class="d-dural-flex-child1 n flex-column align-items-stretch flex-shrink-0 bg-white sidoscroll" style="position:relative; height: 80vh; overflow-x: hidden; z-index: 10;" id="editit">
<div style="top: 2px; right:2px; position:absolute;z-index:10;" class=" p-3 pc-none rounded btn-primary-danger fw-bold text-danger" onclick="t__()">Hide</div>

  <div class="d-flex align-items-center flex-shrink-0 p-3 link-dark text-decoration-none border-bottom bg-twist-bold rounded">
      <span class="fs-5 fw-semibold text-white" style="margin-left: 5px;"> Our_footballer </span>
  </div>

  <?php

  $Sci_con=$conn->prepare("SELECT * FROM Our_footballer order by id DESC LIMIT 50");
  $Sci_con->execute();
    $cnt = $Sci_con->rowCount();
   if ($cnt < 1) {

echo '<center><h2 class="p-3 m-3 fw-bold text-danger"> 0 footballer Found </h2></center>';

  }
  foreach ($Sci_con as $Sci_col) {
  
  $Sci_id = $Sci_col['id'];
  $Sci_profile = $Sci_col['player_profile'];
  $Sci_name = $Sci_col['player_name'];
  $Sci_weight = $Sci_col['player_weight'];
  $Sci_height = $Sci_col['player_height'];
  $Sci_age = $Sci_col['player_age'];
  $Sci_value = $Sci_col['player_value'];
  
  ?>
       <a href="#" class="list-group-item list-group-item-action py-3 lh-tight bg-light" aria-current="true" id="ff<?php echo $Sci_id; ?>">
        
        <div class="d-flex"><img src="uploads/<?php echo $Sci_profile; ?>"  style="width: 40%;border-radius: 10px;">
          <div class="p-2 d-flex align-items-center justify-content-center" style="flex-direction: column; text-align: center;">
          <p class=" text-dark" > Name:<?php echo $Sci_name; ?> || Age: <?php echo $Sci_age; ?></p>
            <p class=" text-dark" height:><?php echo $Sci_height; ?> / Weight: <?php echo $Sci_weight; ?></p>
          <strong class="mb-1  text-dark">Value: <?php echo $Sci_value; ?> </strong>
            
          
<div class="d-flex p-3">

<div class="d-flex align-items-center">

  <button class="btn btn-primary bg-danger w-100" style="border:none; margin-left: 20px;font-weight: bolder;" onclick="t__(); Sci.deletehome('<?php echo $Sci_id; ?>','deleteplayer.php','ff<?php echo $Sci_id; ?>')">Delete</button></div>
  <button class="btn btn-primary bg-twist-bold w-100" style="border:none; margin-left: 20px;font-weight: bolder;" onclick="t__(); $space_load('player_edit.php?topic=<?php echo $Sci_id; ?>','sign')">Edit</button></div>
</div>
   </div>
          
        
      </a> 


<?php
  }
?>

 </div>

<div class="d-dural-flex-child2 p-3">




<h2 style="font-weight: bolder;">Menu</h2>
<br>



  
  <div class="d-flex align-items-center bottomscroll" style="padding-left: 20px; height:50px;" id="menu_row">
             
  
  <div onclick="$space_load('stact.php','sign')"  class="p-2 active_row text-small res_text_small menu_row">
Home           </div> 
  
  <div  onclick="$space_load('footballers.html','sign')"  class="p-2 text-small res_text_small menu_row">
Our_footballer           </div>      
 <div onclick="$space_load('blog.html','sign')"  class="p-2 text-small res_text_small menu_row">
          Publish blog
           </div>  
            <div  onclick="$space_load('detail.php','sign')"  class="p-2 text-small res_text_small menu_row">
     User details
          </div>  
               
               <div  onclick="$space_load('social_link.php','sign')"  class="p-2 text-small res_text_small menu_row">
           Social Editor
              </div>
              
             <div  onclick="$space_load('profile.php','sign')"  class="p-2 text-small res_text_small menu_row">
      Profile
          </div><div  onclick="$space_load('galls.php','sign')"  class="p-2 text-small res_text_small menu_row">
     Gallery
          </div><div  onclick="$space_load('about_us.php','sign')"  class="p-2 text-small res_text_small menu_row">
About us
              </div>
              <div  onclick="$space_load('sponsors.php','sign')"  class="p-2 text-small res_text_small menu_row">
Sponsors
              </div>
              <div  onclick="$space_load('banner.php','sign')"  class="p-2 text-small res_text_small menu_row">
Banner
              </div>
               <div  onclick="$space_load('banners.php','sign')"  class="p-2 text-small res_text_small menu_row">
Banner list
              </div>
              
              <div onclick="$space_load('our_service.php','sign')"  class="p-2 text-small res_text_small menu_row">
our_service
              </div> <div  onclick="$space_load('our_services.php','sign')"  class="p-2 text-small res_text_small menu_row">
              our_service list
              </div>
              <div onclick="$space_load('review.html','sign')"  class="p-2 text-small res_text_small menu_row">
review
              </div> <div  onclick="$space_load('reviews.php','sign')"  class="p-2 text-small res_text_small menu_row">
             review list
              </div>
              <div onclick="$space_load('Security.html','sign')"  class="p-2 text-small res_text_small menu_row">
Security
              </div>  <a href="logout.php" style="text-decoration: none;"> <div   class="p-2 text-small res_text_small menu_row">
Logout
              </div></a>
  
 
                  </div>
              
              







<br>
                  <div class="d-dural-flex" id="sign" style="transition-delay: 2s;">
                      



                </div>
              
              </div></div>
</div>




<br>
<br>


<div class='d-flex' style='z-index: 10;position: fixed; bottom: 30px; right:10px;'>

<div id="blogbtn" class="bg-twist p-3 d-flex align-items-center justify-content-center" style="z-index: 10; box-shadow:0 0 20px rgb(179, 79, 179);flex-direction: column; width: 50px;  cursor: pointer;  border-radius: 50px;">
<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white" class="bi2 bi-bell" viewBox="0 0 16 16">
<path d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5v-11zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5H12z"/>
<path d="M2 3h10v2H2V3zm0 3h4v3H2V6zm0 4h4v1H2v-1zm0 2h4v1H2v-1zm5-6h2v1H7V6zm3 0h2v1h-2V6zM7 8h2v1H7V8zm3 0h2v1h-2V8zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1z"/>
</svg>
</div>


<div id="cartbtn" class="bg-twist p-3 d-flex align-items-center justify-content-center" style="z-index: 10; box-shadow:0 0 20px rgb(179, 79, 179);flex-direction: column; width: 50px;  cursor: pointer;  border-radius: 50px;">
<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white" class="bi1 bi-dice-4" viewBox="0 0 16 16">
<path d="M13 1a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h10zM3 0a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V3a3 3 0 0 0-3-3H3z"/>
<path d="M5.5 4a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm8 0a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0 8a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm-8 0a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
</svg>
</div>


</div>



<br>
<br>
















<footer class="footer mt-auto py-3 text-white bg-twist-bold">

        <center>
<p style="font-weight:800;">Copyright by Yts Packages. All Rights Reserved.
Powered by Topkonnect.Admin </p>
</center>
  
</footer>

<!-- footer -->
<!-- end footer --> 
<script>



var header = document.getElementById("menu_row");
var btns = header.getElementsByClassName("menu_row");
for (let i = 0; i < btns.length; i++) {
btns[i].addEventListener("click",function () {
   var current = document.getElementsByClassName("active_row");
   current[0].className = current[0].className.replace(" active_row","");
   this.className += " active_row";
});    
}

 //  @media js
 if (window.matchMedia('(max-width:600px)').matches) {
function t__() {
 $("#editit").hide();

}
   $("#blogbtn").click(function () {
     $("#editit").removeClass("n").css({"position":"fixed"}).css({"top":"0"}).css({"display":"flex"}).css({"height":"100%"});

     $space_load('blogss.php','editit');
     });
$("#cartbtn").click(function () {
 $("#editit").removeClass("n").css({"position":"fixed"}).css({"top":"0"}).css({"display":"flex"}).css({"height":"100%"});

 $space_load('our_player.php','editit');
 });



}
else{
 function t__() {

}
 $("#blogbtn").click(function () {
  $space_load('blogss.php','editit');
});
$("#cartbtn").click(function () {
$space_load('our_player.php','editit');
});

}

</script>

<script src="ADMIN_files/Sci.js"></script>
<script src="ADMIN_files/sidebars.js"></script>
    <script src="ADMIN_files/bootstrap.js"></script>


</body></html>

<?php

}



?>
<?php

}
}




}


}

else{

  ?>

<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="SciDream.Dev contributors">
    <title>Laboratory</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/headers/">
 <link rel="shortcut icon" href="battery-charging.svg" type="image/x-icon">
<link rel="apple-touch-icon" href="battery-charging.svg">
<link rel="apple-touch-icon" sizes="72x72" href="battery-charging.svg">
<link rel="apple-touch-icon" sizes="114x114" href="battery-charging.svg">
<meta http-equiv="content-type" content="text/html; charset=windows-1252">
<link rel="shortcut icon" href="battery-charging.svg" type="image/x-icon">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="ADMIN_files/jquery-3.6.0.min.js"></script> 
<script src="ADMIN_files/jquery.form.min.js"></script> 
<script src="ADMIN_files/jquery.maxlength.js"></script> 
    <!-- Bootstrap core CSS -->
<link href="ADMIN_files/bootstrap.css" rel="stylesheet">

     <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    <!-- Custom styles for this template -->
    <link href="ADMIN_files/sidebars.css" rel="stylesheet">
  
    <!-- Custom styles for this template -->
    <link href="ADMIN_files/headers.css" rel="stylesheet">
  
<body class="sidoscroll" >
<br><br>








<center>



<div class="container p-3">




<h2 style="font-weight: bolder;">Admin Gate</h2>
<br>


    
                
                

<div class="d-dural-flex-child1 p-2">



</div>


<div class="bg-light p-3 col-lg-8" style="border-radius: 20px; border: 1px solid rgb(230, 227, 227);">
                        

    <form class="p-4 p-md-5 border rounded-3 bg-light" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div class="form-floating mb-3">
          <input type="email" name="email" required="" class="form-control" id="floatingInput" placeholder="name@example.com">
          <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" required="" name="pass" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
          </div>        
        <button class="w-100 btn btn-lg btn-primary bg-twist" type="submit" style="border: none;">Enter</button>
        <hr class="my-4">
        <small class="text-muted"><span style="color:pink;">Forget password?</span> Contact the Admin For Retrieve of Password </small>
      </form>
                             
                                          
                                              
</div>
</div>
                
</div>
</center>
<br>
<br>
<br>
<br>
<br>
<br>
<br>





<footer class="footer mt-5 py-3 text-white bg-twist-bold" style="position: fixed; bottom: 0;width: 100%;left: 0;">

          <center>
  <p style="font-weight:800;">Admin Develope and Design By <a href="http://www.durallite.epizy.com">Durallite</a> Packages</p>
</center>
    
</footer>
  
<!-- footer -->
<!-- end footer --> 




</body></html>


<?php
}

?>
