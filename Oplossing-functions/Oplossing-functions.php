<?php
//*********************************** DEEL 1 *******************************
	function berekenSom($getal1, $getal2){
		return $getal1 + $getal2;
	}

	function berekenProduct($getal1, $getal2){
		return $getal1 * $getal2;
	}

	function isEven($getal1){
		($getal1 % 2 == 0) ? $bool = true :  $bool = false;
		return $bool;
	}

//*********************************** DEEL 2 *******************************

?>

<!DOCTYPE html>
<html>
<head></head>
<body>

	<h1>DEEL 1</h1>
	
	<p><?php echo berekenSom(4, 7) ?></p>
	<p><?php echo berekenProduct(4, 7) ?></p>
	<p><?php echo isEven(4) ?></p>


</body>
</html>