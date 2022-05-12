

<?php 
require 'robot.php';
@import('cord_sql');

?>
   
<div class="row p-2">
    <?php

    $Sci_con=$conn->prepare("SELECT * FROM reviewer order by id DESC LIMIT 50");
    $Sci_con->execute();
    $cnt = $Sci_con->rowCount();
     if ($cnt < 1) {

echo '<center><h2 class="p-3 m-3 fw-bold text-danger"> No reviewers Found </h2></center>';

    }

    foreach ($Sci_con as $Sci_col) {
    
    $Sci_id = $Sci_col['id'];
    $Sci_img1 = $Sci_col['img1'];
    $Sci_topic = $Sci_col['name'];
    $Sci_content = substr($Sci_col['textbox'],0,60);
    
    ?>
         <div class="list-group-item list-group-item-action py-3 lh-tight bg-light" aria-current="true" id="<?php echo $Sci_id; ?>">
          
          <div class="d-flex"><img src="uploads/<?php echo $Sci_img1; ?>"  style="width: 30%;border-radius: 10px; " class="mx-2">
            <div class="p-2 d-flex align-items-center justify-content-center w-100" style="flex-direction: column; text-align: center;">
            <h2 class=" text-dark fw-bold res_text_big"><?php echo $Sci_topic; ?></h2>
            <p class=" text-dark res_text_small"><?php echo $Sci_content; ?>...</p>
              
            
<div class="d-flex p-3">

  <div class="d-flex align-items-center">

    <button class="btn btn-primary bg-danger w-100" style="border:none; margin-left: 20px;font-weight: bolder;" onclick="Sci.delete('<?php echo $Sci_id; ?>','deletereviewer.php')">Delete</button></div>
  </div>
     </div>
            
          
    </div>
    </div>

<?php
    }
?>
</div>