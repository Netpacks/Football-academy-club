<?php
require 'robot.php';
@import('form');
@import('cord_sql');

$profile =  $_FILES['profile']['name'];
$name = $_POST['name'];
$country = $_POST['country'];
$w = $_POST['w'];
$h = $_POST['h'];
$position = $_POST['position'];
$value = $_POST['value'];
$age = $_POST['age'];
$achieve = $_POST['achieve'];
if (empty($profile) || empty($achieve) || empty($profile) || empty($name) || empty($country) || empty($w) || empty($h) || empty($position) || empty($value) || empty($age)) {
html("Fill the Player Form Appropriately");
}
else{
$DB = new cord_sql;
$DB->value =  array("". @form('profile','img')."","".@form('name','text')."","".@form('w','text')."","".@form('h','text')."","".@form('age','text')."","".@form('value','text')."","".@form('country','text')."","".@form('position','text')."","".@form('achieve','text')."");
$DB->runner = "INSERT INTO `Our_footballer`(`player_profile`,`player_name`,`player_weight`,`player_height`,`player_age`,`player_value`,`player_country`,`player_position`, `player_achievement`) VALUES (?,?,?,?,?,?,?,?,?)";
if ($DB->insert()) {
    echo 2;
     } 
     else{
        $DB->insert();
         }
}

?>