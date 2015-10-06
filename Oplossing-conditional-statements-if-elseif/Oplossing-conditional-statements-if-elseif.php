<?php
//*********************************** DEEL 1 *******************************
$getal = 69;	 #geef een getal in tussen 1 en 100

if($getal < 10){
	$alert = "getal ligt tussen 1 en 10";
}elseif ($getal < 21) {
	$alert = "getal ligt tussen 10 en 20";
}elseif ($getal < 31) {
	$alert = "getal ligt tussen 20 en 30";
}elseif ($getal < 41) {
	$alert = "getal ligt tussen 30 en 40";
}elseif ($getal < 51) {
	$alert = "getal ligt tussen 40 en 50";
}elseif ($getal < 61) {
	$alert = "getal ligt tussen 50 en 60";
}elseif ($getal < 71) {
	$alert = "getal ligt tussen 60 en 70";
}elseif ($getal < 81) {
	$alert = "getal ligt tussen 70 en 80";
}elseif ($getal < 91) {
	$alert = "getal ligt tussen 80 en 90";
}else{
	$alert = "getal ligt tussen 90 en 100";
}

//*********************************** DEEL 2 *******************************
$reverseAlert = strrev($alert);


?>

<!DOCTYPE html>
<html>
<head></head>
<body>

	<h1>DEEL 1</h1>
	
	<p><?php echo $alert ?></p>

	<h1>DEEL 2</h1>

	<p><?php echo $reverseAlert ?></p>

</body>
</html>