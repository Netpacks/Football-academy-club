
<?php 
require 'robot.php';
@import('cord_sql');

?>

    <div class="d-flex align-items-center flex-shrink-0 p-3 link-dark text-decoration-none border-bottom bg-twist-bold rounded">
        <span class="fs-5 fw-semibold text-white" style="margin-left: 5px;"> Our_footballer </span>
    </div>
<div style="top: 2px; right:2px; position:absolute;z-index:10;" class=" p-3 rounded btn-primary-danger pc-none fw-bold text-danger" onclick="t__()">Hide</div>

    <?php

    $Sci_con=$conn->prepare("SELECT * FROM Our_footballer order by id DESC LIMIT 50");
    $Sci_con->execute();
      $cnt = $Sci_con->rowCount();
     if ($cnt < 1) {

echo '<center><h2 class="p-3 m-3 fw-bold text-danger"> 0 Footballer Found </h2></center>';

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