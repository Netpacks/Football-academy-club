
<?php 
require 'robot.php';
@import('cord_sql');

?>
   
    <?php

    $Sci_con=$conn->prepare("SELECT * FROM about_us order by id DESC LIMIT 1");
    $Sci_con->execute();
    foreach ($Sci_con as $Sci_col) {
    
    $Sci_id = $Sci_col['id'];
    $Sci_VID = $Sci_col['banner'];
    $Sci_topic = $Sci_col['hero'];
    $Sci_content = $Sci_col['texte'];
    $Sci_registered_agent = $Sci_col['registered_agent'];
    $Sci_profesional_player = $Sci_col['profesional_player'];
    $Sci_global_office = $Sci_col['global_office'];
    $Sci_academy_player = $Sci_col['academy_player'];

    ?>







<div class="d-dural-flex-child2 p-3" >
    <p class="text-center" style="font-weight: bolder; color:gray;"> About us  </p>
       <form action="about_us_getter.php" id="list" method="post">
<div class="bg-light" style=" position: relative; border-radius: 30px; border: 1px solid rgb(240, 232, 232);">
    <div class="d-flex">
<video src="uploads/<?php  echo $Sci_VID; ?>" id="cover-getlink1" onclick="
$trigger('cover-img1')" class="bg-dark w-100" style="height: 300px; cursor: pointer; border-top-right-radius: 30px;border-top-left-radius: 30px; " loop muted autoplay></video>
</div>
<input type="file"  name="bannervid" accept="video/mp4, video/mpeg, video/jp2, video/wmv, video/ogg, video/jp3" onchange="$Fgetter(this,'cover-getlink1')" id="cover-img1" style="height:0;width:0;outline: none; display: block;background: transparent;" >
<input type="hidden" name="orivid" value="<?php echo $Sci_VID; ?>">

<small style="position:absolute; top:-10px;right: -10px;" class="p-3 bg-twist _rounded fw-bold text-white">About video</small>
<div class="p-3 align-items-center" style="width: 100%;">
<strong for="topic" class="p-3">Topic</strong>
<br>
                    <textarea type="text" required name="topic"  class="fw-bold p-1 content"> <?php  echo $Sci_topic; ?> </textarea> 

        </div>
        <div class="p-3 align-items-center" style="width: 100%;">
<strong for="content" class="p-3">Content About us</strong>
<br>
        <textarea type="text" required name="description" class="fw-bold p-1 content" > <?php  echo $Sci_content; ?> </textarea>
        
        </div>
        
        <div class="p-3 align-items-center" style="width: 100%;">
<strong for="content" class="p-3">Registered agent</strong>
<br>    
        <input type="number" required name="Registered_agent" class="fw-bold p-1 content" value="<?php  echo $Sci_registered_agent; ?>" >
        
        </div>
        <div class="p-3 align-items-center" style="width: 100%;">
<strong for="content" class="p-3">Profesional player</strong>
<br>    
        <input type="number" required name="Profesional_player" class="fw-bold p-1 content" value="<?php  echo intval($Sci_profesional_player); ?>" >
        
        </div>
        <div class="p-3 align-items-center" style="width: 100%;">
<strong for="content" class="p-3">Academy player</strong>
<br>    
        <input type="number" required name="Academy_player" class="fw-bold p-1 content" value="<?php  echo intval($Sci_academy_player); ?>" >
        
        </div>
        <div class="p-3 align-items-center" style="width: 100%;">
<strong for="content" class="p-3">Global office</strong>
<br>    
        <input type="number" required name="Global_office" class="fw-bold p-1 content" value="<?php  echo intval($Sci_global_office); ?>" >
        
        </div>
        



                 
            
            
                    
                 
              
<div  class="d-flex align-items-center " style="height:50px;">
<button class="btn btn-primary w-100 fw-bold"  style="height:100%;  border-bottom-left-radius: 30px; border-bottom-right-radius: 30px;
border-top-right-radius: 0;
border-top-left-radius: 0;" id="pub">Update</button>

                </div>

</div>   



        
                      
</form>                                     
</div>

<div class="d-dural-flex-child1 p-3">


<h4 style="font-weight: bolder;" >Alert</h4>
<p style="color: gray;" id="datadiv">Notification Goes Here</p>
</div>

</div>
<?php


    }

    ?>

<script>



$("#list").on('submit',function(e){

e.preventDefault();

$(this).ajaxSubmit({

success: function(data){
var d = data;
var e =  2;
if (d == e) {
$("#datadiv").html('<strong style="color:green;">Updating......</strong>'); 

setTimeout(function () {
// body...
$("#sign").html('<img src="ADMIN_files/sucess.jpg" style="transition: 1s; width: 50%;margin:auto;" id="iiii">'); 
setTimeout(function () {
// body...
$("#iiii").toggle();
setTimeout(function () {
// body...
$space_nav_loader('about_us.php','sign');


},1000);

},3000);

},3000);


}
else{
$("#datadiv").html(data); 
}
} 

});
});



$('.content').each(function () {
  this.setAttribute('style', 'height:' + (this.scrollHeight) + 'px;overflow-y:hidden;width: 100%; background-color: transparent; color: gray; outline: none;border: none;resize:none;text-align:' + "left");

}).on('input', function () {
  this.style.height = '100px';
  this.style.height = (this.scrollHeight) + 'px';
});


</script>