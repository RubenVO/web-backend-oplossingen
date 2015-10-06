<?php
//*********************************** DEEL 1 *******************************
	$text = file_get_contents("text-file.txt");
	$textChars = str_split($text);
	rsort($textChars);
	$flipped = array_reverse($textChars);

	$teller = array();

	foreach($flipped as $value)
	{
		if(isset($teller[$value]))
		{
			$teller[$value]++;
		}
		else
		{
			$teller[$value] = 1;
		}
		
	}


//*********************************** DEEL 2 *******************************

?>

<!DOCTYPE html>
<html>
<head></head>
<body>

	<h1>DEEL 1</h1>
	
	<p><?php var_dump ($teller) ?></p>


</body>
</html>