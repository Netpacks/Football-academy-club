<?php

require 'robot.php';
@import('cord_sql');

$Sci_con=$conn->prepare("SELECT * FROM gallery order by id DESC LIMIT 30");
$Sci_con->execute();
foreach ($Sci_con as $Sci_col) {

$Sci_id = $Sci_col['id'];
$Sci_gallery = $Sci_col['gallery'];

?>



<div class="box">
            <img src="./___p/uploads/<?php echo $Sci_gallery; ?>" alt="">
            <h3 class="title">Instructor  With Client</h3>
            <div class="icons">
                <a href="#" class="fa fa-heart"></a>
                <a href="#" class="fa fa-share"></a>
                <a href="#" class="fa fa-eye"></a>
            </div>
        </div>






            
<?php
}
        ?>   