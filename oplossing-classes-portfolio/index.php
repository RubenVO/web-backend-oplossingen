<?php 
	function __autoload($className)
	{
		include "classes/" . $className .".php";
	}

	$header = "header.partial.php";
	$body   = "body.partial.php";
	$footer = "footer.partial.php";
	

	$htmlBuilder = new HTMLBuilder($header, $body, $footer);

	$htmlBuilder->buildHeader();
	$htmlBuilder->buildBody();
	$htmlBuilder->buildFooter();
?>
