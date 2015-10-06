<?php
//*********************************** DEEL 1 *******************************
	$dierenArray = ["", "pinguin", "beer", "leeuw", "stokstaart", "kappa", "eenhoorn", "vogelbekdier", "aap", "gorilla", "mug"];

	$numberElements = count($dierenArray);
	$teZoekenDier = "pinguin";
	if(array_search($teZoekenDier, $dierenArray)) $alert = "Dier gevonden" ;
	else $alert = "Dier niet gevonden";

	$voertuigenArray =["landvoertuigen" => array("fiets", "vespa"), "watervoertuigen" => array("boot"), "luchtvoertuigen" => array("F117-A", "B-2")];



?>

<!DOCTYPE html>
<html>
<head></head>
<body>

	<h1>DEEL 1</h1>
	<p><?php echo $numberElements ?></p>
	<p><?php echo $alert ?></p>


</body>
</html>