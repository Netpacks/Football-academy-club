<?php

 
 /**
The MIT License (MIT)

THIS SCRIPT IS DONATED AND 
CREAT BY ADEMOLA ADURAGBEMI
PLEASE THIS SCRIPT IS NOT FOR 
SALE OR RE EDDITING  
 IF YOU NEED SCRIPT LIKE THIS CALL ON +2348169743963
 OR CONTACT ME ON MY GMAIL DURALLITE@GMAIL.COM

*/
require'robot.php';
@import('form');


if (empty($_POST['fname']) || empty($_POST['lname']) || empty($_POST['email']) || empty($_POST['password']) || empty($_POST['rpassword'])) {
	echo '<strong style="color: red;">check and complete your form </strong>';
	
}

elseif ($_POST['password'] !== $_POST['rpassword']) {
	echo '<strong style="color:red;">password is not match </strong>';
}
elseif ($_POST['rpassword'] !== $_POST['password']) {
	echo '<strong style="color:red;">password is not match</strong>';
}

else{


	$fname = form('fname','text');
	$lname = form('lname','text');
	$email = form('email','email');
 $pass = form('password','text');
 $rpass = form('rpassword','text');


$DURAL_SQL="SELECT * FROM user_dural_282200123 WHERE email=?";

$DURAL=$conn->prepare($DURAL_SQL);
$DURAL->bindParam(1, $email);
$DURAL->execute();
 $COUNT=$DURAL->rowCount();
if ($COUNT > 0) {
	echo '<strong style="color:red;">Email Already Exist</strong>';
}
else{


$hash= password_hash($pass, PASSWORD_DEFAULT);


$sqlll="INSERT INTO user_dural_282200123(fname,lname,email,pass) VALUE(?,?,?,?)";

$rtrr=$conn->prepare($sqlll);

$rtrr->bindparam(1,$fname);
$rtrr->bindparam(2,$lname);
$rtrr->bindparam(3,$email);
$rtrr->bindparam(4,$hash);
$rtrr->execute();



$_SESSION['prodigal_pass'] = $hash;
$_SESSION['prodigal_em'] = $email;
echo 2;
	}
}







?>