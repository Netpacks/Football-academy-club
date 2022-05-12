<?php
require 'robot.php';
@import('form');
@import('cord_sql');

$img1 =  $_FILES['img1']['name'];
$topic = $_POST['topic'];
$textbox = $_POST['textbox'];
if (empty($img1) || empty($topic) || empty($textbox)) {
html("post filled is empty");
}
elseif (empty($img1)) {
html("one of the image is empty");
}elseif (empty($topic)) {
html("topic Box is empty");

}elseif (empty($textbox)) {
html("Description Box is empty");
}
else{
$DB = new cord_sql;
$DB->value =  array("". @form('img1','img')."","".@form('topic','text')."","".@form('textbox','text')."");
$DB->runner = "INSERT INTO `our_service`(`banner`, `hero`, `text`) VALUES (?,?,?)";
if ($DB->insert()) {
        echo 2;
     } 
     else{
        $DB->insert();
         }
}


?>