<?php 
require 'robot.php';
@import('cord_sql');

$get = $_GET['topic'];
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


?>

<div class="d-dural-flex-child2 p-3" >
    <p class="text-center" style="font-weight: bolder; color:gray;"> Edit player  </p>
       <form action="player-update.php" id="list" method="post">
<div class="bg-light" style=" position: relative; border-radius: 30px; border: 1px solid rgb(240, 232, 232);">
    <div class="d-flex">
<img src="uploads/<?php  echo $Sci_profile; ?>" id="cover-getlink1" onclick="$trigger('cover-img1')" class="bg-dark w-100" style="height: 300px; cursor: pointer; border-top-right-radius: 30px;border-top-left-radius: 30px; ">
</div>
<input type="file"  name="profi" accept="image/png, image/jpeg,image/jpg" onchange="$Fgetter(this,'cover-getlink1')" id="cover-img1" style="height:0;width:0;outline: none; display: block;background: transparent;" >


<small style="position:absolute; top:-10px;right: -10px;" class="p-3 bg-twist rounded fw-bold text-white">Footballer img</small>
<div class="p-3 align-items-center" style="width: 100%;">
<strong for="content" class="p-3">Player achieve</strong>
<br>    
        <textarea type="text" required name="achieve" class="fw-bold p-1 content" value="<?php echo $Sci_achieve; ?>" > <?php echo $Sci_achieve; ?> </textarea>
        
        </div>


        <input type="hidden" name="id" value="<?php echo $Sci_id; ?>">
        <input type="hidden" name="oriimg" value="<?php echo $Sci_profile; ?>">










        <div class="p-3 align-items-center" style="width: 100%;">
<strong for="name" class="p-3">Player name</strong>
<br>    
        <input type="text" required name="name" class="fw-bold p-1 content" value="<?php echo $Sci_name; ?>" >
        
        </div>
        <div class="p-3 align-items-center" style="width: 100%;">
<strong for="content" class="p-3">Player country</strong>
<br>    
        <input type="text" required name="country" class="fw-bold p-1 content" value="<?php echo $Sci_country; ?>" >
        
        </div>
        <div class="p-3 align-items-center" style="width: 100%;">
<strong for="content" class="p-3">Player Weight</strong>
<br>    
        <input type="text" required name="w" class="fw-bold p-1 content" value="<?php echo $Sci_weight; ?>" >
        
        </div>
        <div class="p-3 align-items-center" style="width: 100%;">
<strong for="content" class="p-3">Player height</strong>
<br>    
        <input type="text" required name="h" class="fw-bold p-1 content" value="<?php echo $Sci_height; ?>" >
        
        </div>
        <div class="p-3 align-items-center" style="width: 100%;">
<strong for="content" class="p-3">Player position</strong>
<br>    
        <input type="text" required name="position" class="fw-bold p-1 content" value="<?php echo $Sci_position; ?>" >
        
        </div>
        <div class="p-3 align-items-center" style="width: 100%;">
<strong for="content" class="p-3">Player value</strong>
<br>    
        <input type="text" required name="value" class="fw-bold p-1 content" value="<?php echo $Sci_value; ?>" >
        
        </div>
        <div class="p-3 align-items-center" style="width: 100%;">
<strong for="content" class="p-3">Player age</strong>
<br>    
        <input type="text" required name="age" class="fw-bold p-1 content" value="<?php echo $Sci_age; ?>" >
        
        </div>                     
            
                 
              
<div  class="d-flex align-items-center " style="height:50px;">   
<button class="btn btn-primary w-100 fw-bold"  style="height:100%;  border-bottom-left-radius: 30px; border-bottom-right-radius: 30px;
border-top-right-radius: 0;
border-top-left-radius: 0;" id="pub">Edit</button>

                </div>

</div>   



        
                      
</form>                                     
</div>

<div class="d-dural-flex-child1 p-3">


<h4 style="font-weight: bolder;" >Alert</h4>
<p style="color: gray;" id="datadiv">Notification Goes Here</p>
</div>

</div>


<script>



$('.content').each(function () {
  this.setAttribute('style', 'height:' + (this.scrollHeight) + 'px;overflow-y:hidden;width: 100%; background-color: transparent; color: gray; outline: none;border: none;resize:none;text-align:' + "left");

}).on('input', function () {
  this.style.height = '100px';
  this.style.height = (this.scrollHeight) + 'px';
});

$("#list").on('submit',function(e){

e.preventDefault();

$(this).ajaxSubmit({

success: function(data){
var d = data;
var e =  2;
if (d == e) {
$("#datadiv").html('<strong style="color:green;">Edit......</strong>'); 

setTimeout(function () {
// body...
$("#sign").html('<img src="ADMIN_files/sucess.jpg" style="transition: 1s; width: 50%;margin:auto;" id="iiii">'); 
setTimeout(function () {
// body...
$("#iiii").toggle();
setTimeout(function () {
// body...
$space_load('player_edit.php?topic=<?php echo $Sci_id; ?>','sign')


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



</script>


<?php
}
?>