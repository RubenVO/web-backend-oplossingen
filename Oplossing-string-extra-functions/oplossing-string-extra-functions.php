<?php
	//********************* DEEL 1 *****************************
	$fruit			= 	"kokosnoot";
	$fruitLength	=	strlen($fruit);
	$characterPos	=	strpos($fruit, "o");

	//********************* DEEL 2 *****************************
	$fruit2			=	"ananas";
	$characterPos2	=	strrpos($fruit2, "a");
	$upperFruit2	=	strtoupper($fruit2);

	//********************* Deel 3 *****************************
	$lettertje		=	"e";
	$cijfertje		=	3;
	$langstewoord	=	"zandzeepsodemineralenwatersteenstralen";
	$nieuwWoord		=	str_replace($lettertje, $cijfertje, $langstewoord);
?>

<!DOCTYPE html>
<mtml>
<head></head>
<body>

	<h1>DEEL 1</h1>
	
	<p><?php echo $fruit ?></p>
	<p><?php echo $characterPos ?></p>

	<h1>DEEL 2</h1>

	<p><?php echo $fruit2 ?></p>
	<p><?php echo $characterPos2 ?></p>
	<p><?php echo $upperFruit2 ?></p>

	<h1>DEEL 3</h1>

	<p><?php echo $nieuwWoord ?></p>


</body>
</html>