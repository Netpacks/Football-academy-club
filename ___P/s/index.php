


<?php 
require 'robot.php';
@import('cord_sql');
if(isset($_SESSION['___'])){
  header("location:home.php");
 
}
?>

  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="SciDream.Dev contributors">
    <title>Laboratory || Develope By SciDream</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/headers/">
 <link rel="shortcut icon" href="battery-charging.svg" type="image/x-icon">
<link rel="apple-touch-icon" href="battery-charging.svg">
<link rel="apple-touch-icon" sizes="72x72" href="battery-charging.svg">
<link rel="apple-touch-icon" sizes="114x114" href="battery-charging.svg">
<meta http-equiv="content-type" content="text/html; charset=windows-1252">
<link rel="shortcut icon" href="battery-charging.svg" type="image/x-icon">


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


<div class="d-dural-flex-child2 p-3">




<h2 style="font-weight: bolder;">Admin Gate</h2>
<br>


    
                
                


<div class="d-dural-flex-child1 p-3 ">


    <small class="text-muted" id="datadiv"></small>
</div>


<div class="d-dural-flex-child2 bg-light p-3" style="border-radius: 20px; border: 1px solid rgb(230, 227, 227);">
                        

    <form class="p-4 p-md-5 border rounded-3 bg-light" method="post" action="daddy.php" id="security">
        <div class="form-floating mb-3">
          <input type="email" name="email" required="" class="form-control" id="floatingInput" placeholder="name@example.com">
          <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" required="" name="pass" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
          </div>        
        <button class="w-100 btn btn-lg btn-primary bg-twist" type="submit" style="border: none;">Edit</button>
        <hr class="my-4">
        <small class="text-muted"><span style="color:pink;">Forget password?</span> Contact the Admin For Retrieve of Password </small>
      </form>
                             
                                          
                                              
</div>
</div>
                
</div>

    </center>
<script>
  


$("#security").on('submit',function(e){

  e.preventDefault();

$(this).ajaxSubmit({

success: function(data){
  var d = data;
  var e =  2;
  if (d == e) {
    $("#datadiv").html('<strong style="color:green;">Logging in......</strong>'); 

setTimeout(function () {
  // body...
  
  window.location.replace('home.php');


  },3000);


  }
  else{
$("#datadiv").html(data); 
}
} 

});
});


</script>










<footer class="footer mt-5 py-3 text-white bg-twist-bold">

          <center>
  <p style="font-weight:800;">Develope and Design @ <a href="http://www.durallite.epizy.com">Durallite</a> Packages</p>
</center>
    
</footer>
  
<!-- footer -->
<!-- end footer --> 




</body></html>