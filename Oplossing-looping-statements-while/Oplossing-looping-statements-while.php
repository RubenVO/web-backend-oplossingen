<?php
//*********************************** DEEL 1 *******************************
	$getal = 0;
	$getalMax =100;
	while($getal <= $getalMax){
		if($getal % 3 == 0 && $getal > 40 && $getal < 80){
			$deelbaarDD[] = $getal;
		}
		$arrayGetallen[] = $getal;
		$getal++;
	}

	$string = implode(", ", $arrayGetallen);
	$stringDD = implode(", ", $deelbaarDD);


//*********************************** DEEL 2 *******************************
	$boodschappenlijstje = ["brood", "afwasmiddel", "wcpapier"]

?>

<!DOCTYPE html>
<html>
<head></head>
<body>

	<h1>DEEL 1</h1>
	<p><?php echo $string ?></p>
	<p><?php echo $stringDD ?></p>

	<h2>DEEL 2</h2>
	<ul>
		<?php $boodschapCounter = 0 ?>
		<?php while(isset($boodschappenlijstje[$boodschapCounter])): ?>
		<li><?= $boodschappenlijstje[$boodschapCounter] ?></li>
		<?php $boodschapCounter++ ?>
		<?php endwhile ?>
	</ul>


</body>
</html>