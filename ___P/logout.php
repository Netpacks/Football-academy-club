
<?php 
$cookie_name = "user";
if (setcookie($cookie_name, "", time() - (86400 * 30), "/")) {
	# code...
	header("location:../manager");

}
else{


	echo "<h1 style='color:red;'> ENABLE COOKIES FOR THIS WEBPAGE TO WORK WELL<h1>";
}
?>
