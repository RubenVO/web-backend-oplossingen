<?php
//*********************************** DEEL 1 *******************************
	$dierenArray = ["pinguin", "beer", "leeuw", "stokstaart", "kappa", "eenhoorn", "vogelbekdier"];
	$dierenArray[] = "aap";
	$dierenArray[] = "Dries ( ͡° ͜ʖ ͡°)";
	$dierenArray[] = "vogel";


	$voertuigenArray =["landvoertuigen" => array("fiets", "vespa"), "watervoertuigen" => array("boot"), "luchtvoertuigen" => array("F117-A", "B-2")];


//*********************************** DEEL 2 *******************************
	$temp1 = 1;
	$array1 = [1, 2, 3, 4, 5];
	for($teller = 0; $teller < 5; $teller++){
		$temp1 *= $array1[$teller];
	}

	$arrayOneven;
	for($teller = 0; $teller < 5; $teller++){
		if($array1[$teller] % 2 != 0){
			$arrayOneven[] = $array1[$teller];
		}
	}

	$array2 = [5, 4, 3, 2, 1];
	for($teller = 0; $teller < 5; $teller++){
		$array3[] = $array1[$teller] + $array2[$teller];
	}

?>

<!DOCTYPE html>
<html>
<head></head>
<body>

	<h1>DEEL 1</h1>
	<li>Dieren Array</li>
	<p><?php var_dump($dierenArray) ?></p>
	<li>Voertuigen Array</li>
	<p><?php var_dump($voertuigenArray) ?></p>

	<h1>DEEL 2</h1>
	<li>Array 1</li>
	<p><?php var_dump($array1) ?></p>
	<li>Product array 1</li>
	<p><?php echo $temp1 ?></p>
	<li>Oneven getallen</li>
	<p><?php print_r($arrayOneven) ?></p>
	<li>Som arrays</li>
	<p><?php var_dump($array3) ?></p>


</body>
</html>