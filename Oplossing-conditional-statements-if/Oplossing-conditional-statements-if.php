<?php
//*********************************** DEEL 1 *******************************
	$dagindex = 1;
	$dag;

	($dagindex == 1) ? $dag = "maandag" : "";
	($dagindex == 2) ? $dag = "dinsdag" : "";
	($dagindex == 3) ? $dag = "woensdag" : "";
	($dagindex == 4) ? $dag = "donderdag" : "";
	($dagindex == 5) ? $dag = "vrijdag" : "";
	($dagindex == 6) ? $dag = "zaterdag" : "";
	($dagindex == 7) ? $dag = "zondag" : "";

//*********************************** DEEL 2 *******************************
	$dagUpper		=	strtoupper($dag);
	$dagUpperWoA	=	str_replace("A", "a", $dagUpper);
	$array 			=	explode("D", $dagUpper);
	//var_dump(explode("D", $dagUpper));
	$lowerCaseFirst	=	lcfirst($array[1]);
	$dagUpperWoLA	=	$array[0] . "D" . $lowerCaseFirst;

?>

<!DOCTYPE html>
<html>
<head></head>
<body>

	<h1>DEEL 1</h1>
	
	<p><?php echo $dag ?></p>

	<h1>DEEL 2</h1>

	<p><?php echo $dagUpper ?></p>
	<p><?php echo $dagUpperWoA ?></p>
	<p><?php echo $dagUpperWoLA ?></p>


</body>
</html>