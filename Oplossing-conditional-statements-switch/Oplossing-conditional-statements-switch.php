<?php
//*********************************** DEEL 1 *******************************
$dagIndex = 3;	 #geef een getal van 1 tot 7

switch ($dagIndex){
	case 1: $dag = "maandag";
			break;
	case 2: $dag = "dinsdag";
			break;
	case 3: $dag = "woensdag";
			break;
	case 4: $dag = "donderdag";
			break;
	case 5: $dag = "vrijdag";
			break;
	case 6: $dag = "zaterdag";
			break;
	case 7: $dag = "zondag";
}


?>

<!DOCTYPE html>
<html>
<head></head>
<body>

	<h1>DEEL 1</h1>
	
	<p><?php echo $dag ?></p>

</body>
</html>