<?php
require 'robot.php';
@import('form');
@import('cord_sql');

$name = $_POST['name'];
$country = $_POST['country'];
$w = $_POST['w'];
$h = $_POST['h'];
$position = $_POST['position'];
$value = $_POST['value'];
$age = $_POST['age'];
$achieve = $_POST['achieve'];
if (empty($achieve) || empty($name) || empty($country) || empty($w) || empty($h) || empty($position) || empty($value) || empty($age)) {
html("Fill the Player Form Appropriately");
}
elseif  (empty($_FILES['profi']['name'])) {
    $oriimg =  $_POST['oriimg'];   
$DB1 = new cord_sql;
$DB1->value =  array("".$oriimg."","".@form('name','text')."","".@form('w','text')."","".@form('h','text')."","".@form('age','text')."","".@form('value','text')."","".@form('country','text')."","".@form('position','text')."","".@form('achieve','text')."","".@form('id','0-9')."");
$DB1->runner = "UPDATE `Our_footballer` SET player_profile=?, player_name=?, player_weight=?, player_height=?, player_age=?, player_value=?, player_country=?, player_position=?, player_achievement=? WHERE id=?";
if ($DB1->update()) {
    echo 2;
     } 
     }
else{

$DB = new cord_sql;
$DB->value =  array("". @form('profi','img')."","".@form('name','text')."","".@form('w','text')."","".@form('h','text')."","".@form('age','text')."","".@form('value','text')."","".@form('country','text')."","".@form('position','text')."","".@form('achieve','text')."","".@form('id','0-9')."");
$DB->runner = "UPDATE `Our_footballer` SET player_profile=?, player_name=?, player_weight=?, player_height=?, player_age=?, player_value=?, player_country=?, player_position=?, player_achievement=? WHERE id=?";
if ($DB->update()) {
    echo 2;
     } 
     else{
     $DB->update();	
     }
}

?>