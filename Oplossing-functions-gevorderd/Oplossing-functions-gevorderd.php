<?php
//*********************************** DEEL 1 *******************************
	$md5HashKey = "d1fa402db91a7a93c4f414b8278ce073";

	function functie1($key, $keyChar){
		$length = strlen($key);
		$hits = substr_count($key, $keyChar);
		$percent = (($hits/$length) * 100);
		return $percent;
	}

	function functie2($keyChar){
		$key = $GLOBALS["md5HashKey"];
		$length = strlen($key);
		$hits = substr_count($key, $keyChar);
		$percent = (($hits/$length) * 100);
		return $percent;
	}

	function functie3($keyChar){
		global $md5HashKey;
		$length = strlen($md5HashKey);
		$hits = substr_count($md5HashKey, $keyChar);
		$percent = (($hits/$length) * 100);
		return $percent;
	}
//*********************************** DEEL 2 *******************************

?>

<!DOCTYPE html>
<html>
<head></head>
<body>

	<h1>DEEL 1</h1>
	
	<p><?php echo functie1($md5HashKey, "2") ?></p>
	<p><?php echo functie2("8") ?></p>
	<p><?php echo functie3("a") ?></p>


</body>
</html>