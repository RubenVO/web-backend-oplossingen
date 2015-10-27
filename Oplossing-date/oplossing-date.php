<?php

	$timestamp = mktime(22, 35, 25, 01, 21, 1904);
	$formatstring = "d F Y, H:i:s";
	$date = date($formatstring, $timestamp);

?>


<!DOCTYPE html>
<html>
<head></head>
<body>

<h1>Date</h1>

  <?php echo $date ?>


</body>
</html>