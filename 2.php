<?php 
 /**The MIT License (MIT)

THIS SCRIPT IS DONATED AND 
CREAT BY ADEMOLA ADURAGBEMI
PLEASE THIS SCRIPT IS NOT FOR 
SALE OR RE EDDITING  
 IF YOU NEED SCRIPT LIKE THIS CALL ON +2348169743963
 OR CONTACT ME ON MY GMAIL DURALLITE@GMAIL.COM
*/
require'robot.php';
@import('form');
if (empty($_POST['email']) && empty($_POST['password'])) {
	echo '<strong style="color: red;">your form must be fill</strong>';
}
elseif (empty($_POST['email'] || $_POST['password'])) {
	echo '<strong style="color: red;">check and complete your form </strong>';
}

else{


 $email = form('email','email');
 $password = form('password','text');

$DURAL_SQL="SELECT * FROM user_dural_282200123 WHERE email=?";

$DURAL=$conn->prepare($DURAL_SQL);
$DURAL->bindParam(1, $email);
$DURAL->execute();
 $COUNT=$DURAL->rowCount();
if ($COUNT < 1) {
	echo '<strong style="color:red;">Incorrect email Or password</strong>';
}
else{
	foreach ($DURAL as $key) {
		$relapass=$key['pass'];
		$id=$key['id'];
$em = $key['email'];
if (password_verify($password, $relapass)) {

    $_SESSION['prodigal_pass'] = $relapass;
    $_SESSION['prodigal_em'] = $em;
    echo 2;

}

else {
    echo '<strong style=""color:red; font-weight:800;> incorrect password </strong>';
}




}

}}


?>