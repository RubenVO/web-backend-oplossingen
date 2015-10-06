<?php
//*********************************** DEEL 1 *******************************
	$jaartal = 2004;

	if($jaartal % 4 == 0 || $jaartal % 400 == 0 && $jaartal % 100 != 0){
		$alert = $jaartal . " is een schrikkeljaar";
	}
	else{
		$alert = $jaartal . " is geen schrikkeljaar";
	}
	

//*********************************** DEEL 2 *******************************
	$totSeconden = 221108521;

	$minuten = round($totSeconden / 60);
	$uren = round(($totSeconden / 60) / 60);
	$dagen = round((($totSeconden / 60) / 60) / 24);
	$weken = round(((($totSeconden / 60) / 60) / 24) / 7);
	$maanden = round(((($totSeconden / 60) / 60) / 24) / 31);
	$jaren = round(((($totSeconden / 60) / 60) / 24) / 365);



?>

<!DOCTYPE html>
<html>
<head></head>
<body>

	<h1>DEEL 1</h1>
	
	<p><?php echo $alert ?></p>

	<h1>DEEL 2 (extra)</h1>

	<p>In <?php echo $totSeconden ?> seconden</p>
	<li>minuten: <?php echo $minuten ?></li>
	<li>uren: <?php echo $uren ?></li>
	<li>dagen: <?php echo $dagen ?></li>
	<li>weken: <?php echo $weken ?></li>
	<li>maanden(31): <?php echo $maanden ?></li>
	<li>jaren(365): <?php echo $jaren ?></li>


</body>
</html>