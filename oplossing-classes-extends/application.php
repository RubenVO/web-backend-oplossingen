<?php 
	function __autoload($className){
		include 'classes/' . $className . '.php';
	}

	$kermit = new Animals("Kermit", "male", 100);
	$dikkie = new Animals("Dikkie", "male", 90);
	$flipper = new Animals("Flipper", "female", 80);

	$simba = new Lion("Simba", "Male", 100, "Congo lion");
	$scar = new Lion("Scar", "Male", 100, "Kenia lion");

	$zeke = new Zebra("Zeke", "Male", 100, "Quagga");
	$zana = new Zebra("Zana", "Male", 100, "Selous");
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <link href="css/style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
    	<p><?= $kermit->getName() ?> is van het geslacht <?= $kermit->getGender() ?> en heeft momenteel <?= $kermit->getHealth() ?> levenspunten (Special move: <?= $kermit->doSpecialMove()?>)</p>
        <p><?= $dikkie->getName() ?> is van het geslacht <?= $dikkie->getGender() ?> en heeft momenteel <?= $dikkie->getHealth() ?> levenspunten (Special move: <?= $dikkie->doSpecialMove()?>)</p>
        <p><?= $flipper->getName() ?> is van het geslacht <?= $flipper->getGender() ?> en heeft momenteel <?= $flipper->getHealth() ?> levenspunten (Special move: <?= $flipper->doSpecialMove()?>)</p>
    	
    	<p>De special move van <?= $simba->getName() ?> (soort: <?= $simba->getSpecies() ?>): <?= $simba->doSpecialMove() ?></p>
		<p>De special move van <?= $scar->getName() ?> (soort: <?= $scar->getSpecies() ?>): <?= $scar->doSpecialMove() ?></p>

		<p>De special move van <?= $zeke->getName() ?> (soort: <?= $zeke->getSpecies() ?>): <?= $zeke->doSpecialMove() ?></p>
		<p>De special move van <?= $zana->getName() ?> (soort: <?= $zana->getSpecies() ?>): <?= $zana->doSpecialMove() ?></p>

    </body>
</html>