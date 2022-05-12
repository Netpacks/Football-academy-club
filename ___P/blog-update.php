<?php
require 'robot.php';
@import('form');
@import('cord_sql');

$topic = $_POST['topic'];
$textbox = $_POST['textbox'];
if (empty($topic) || empty($textbox)) {
html("post filled is empty");
}elseif (empty($topic)) {
html("topic Box is empty");

}elseif (empty($textbox)) {
html("Description Box is empty");
}
elseif  (empty($_FILES['img1']['name'])) {
    # code...
    $oriimg =  $_POST['oriimg'];
    
$DB1 = new cord_sql;
$DB1->value =  array("".$oriimg."","".@form('topic','text')."","".$textbox."","".@form('id','0-9')."");
$DB1->runner = "UPDATE `blog` SET img1=?, topic=?, textbox=? WHERE id=?";
if ($DB1->update()) {
    echo 2;
     } 
     else{
     $DB1->update();	
     }
}
else{
$DB = new cord_sql;
$DB->value =  array("". @form('img1','img')."","".@form('topic','text')."","".$textbox."","".@form('id','0-9')."");
$DB->runner = "UPDATE `blog` SET img1=?, topic=?, textbox=? WHERE id=?";
if ($DB->update()) {
    echo 2;
     } 
     else{
     $DB->update();	
     }
}








?>