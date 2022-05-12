

<!-- footballer  -->




 


<section id="team" style="background: #fff;">
    <div class="container">
            <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                <div class="sec-heading text-center">
                    <!-- <h6>// MEET OUR TEAM</h6> -->
                    <h6>Our Professional Footballers</h6>
                </div>
            </div>
        </div>
    </div>
    <div class="testimonial-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="team-slider owl-carousel">
    
                    <?php

$Sci_con=$conn->prepare("SELECT * FROM Our_footballer order by id DESC LIMIT 30");
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

                    <div class="single-box text-center mx-3">
                            <div class="img-area">  <img src="./___P/uploads/<?php echo $Sci_profile; ?>" class="img-fluid move-animation" src="team-1.png"></div>
                            <div class="info-area">
                                <h4><?php echo $Sci_name; ?></h4>
                                <p><?php echo $Sci_height; ?>/<?php echo $Sci_weight; ?></p>
                                <p>Value: <?php echo $Sci_value; ?></p>
                                <p>Position: <?php echo $Sci_position; ?></p>
                                <a href="_.php?id=<?php echo $Sci_id; ?>" >Read More</a>
                            </div>
                        </div>

<?php
}
?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
 
 

<!-- footballer -->


