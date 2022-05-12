<?php
require 'robot.php';
@import('form');
@import('cord_sql');

if (empty($_POST['topic'] || $_POST['description'] || $_POST['Registered_agent'] || $_POST['Profesional_player'] || $_POST['Global_office'] || $_POST['Academy_player'])) {
html("Fill the Player Form Appropriately");
}

elseif  (empty($_FILES['bannervid']['name'])) {
    $orivid =  $_POST['orivid'];   

    $DB1 = new cord_sql;
    $DB1->value =  array("".$orivid."","".@form('topic','text')."","".@form('description','text')."","".@form('Registered_agent','text')."","".@form('Profesional_player','text')."","".@form('Global_office','text')."","".@form('Academy_player','text')."");
    $DB1->runner = "UPDATE `about_us` SET banner=?, hero=?, texte=?, registered_agent=?, profesional_player=?, global_office=?, academy_player=? ";
    if ($DB1->update()) {
        echo 2;
         } 
}
else{
$DB = new cord_sql;
$DB->value =  array("". @form('bannervid','video')."","".@form('topic','text')."","".@form('description','text')."","".@form('Registered_agent','text')."","".@form('Profesional_player','text')."","".@form('Global_office','text')."","".@form('Academy_player','text')."");
$DB->runner = "UPDATE `about_us` SET banner=?, hero=?, texte=?, registered_agent=?, profesional_player=?, global_office=?, academy_player=? ";
if ($DB->update()) {
    echo 2;
     } 
}



?>




