<?php
//*********************************** DEEL 1 *******************************
	function renteBerekening($Moneyz, $jaren, $rente){

		static $teller = 1;
		static $perJaar = array();

		if($teller <= $jaren){
			$renteMoneyz = floor($Moneyz * ($rente /100));
			$totMoneyz = $renteMoneyz + $Moneyz;
			$perJaar[$teller] = $totMoneyz;
			$teller++;

			return renteBerekening($totMoneyz, $jaren, $rente);
		}else{
		return $perJaar;
		}

	}
	

//*********************************** DEEL 2 *******************************

?>

<!DOCTYPE html>
<html>
<head></head>
<body>

	<h1>DEEL 1</h1>
	
	<p><?php print_r(renteBerekening(100000, 10, 8))  ?></p>


</body>
</html>