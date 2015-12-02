<?php

	$message	=	false;

	try
	{

		$db = new PDO( 'mysql:host=localhost;dbname=bieren', 'root', '' );

		$queryString	=	'INSERT INTO brouwers (brnaam, adres, postcode, gemeente, omzet)
									VALUES ( :brnaam, :adres, :postcode, :gemeente, :omzet )';

		$statement = $db->prepare($queryString);

		$statement->bindValue(":brnaam", (isset( $_POST["brnaam"]) ? $_POST["brnaam"] : ""));
		$statement->bindValue(":adres", (isset( $_POST["adres"]) ? $_POST["adres"] : ""));
		$statement->bindValue(":postcode", (isset( $_POST["postcode"]) ? $_POST["postcode"] : ""));
		$statement->bindValue(":gemeente", (isset( $_POST["gemeente"]) ? $_POST["gemeente"] : ""));
		$statement->bindValue(":omzet", (isset( $_POST["omzet"]) ? $_POST["omzet"] : ""));

		$brouwerInserted = $statement->execute();
		if(isset($_POST["submit"])){
			if($brouwerInserted && $_POST["brnaam"] != "" && $_POST["adres"] != "" && $_POST["postcode"] != "" && $_POST["gemeente"] != "" && $_POST["omzet"] != ""){
				$lastIndex = $db->lastInsertId();
				$message["type"] = "succes";
				$message["message"] = "Brouwerij succesvor toegevoegd. Het unieke nummer van deze brouwerij is " . lastIndex . ", waarbij de " . lastIndex . " de primary key is van de toegevoegde datarij.";

			}
		}

	}
	catch (PDOException $e)
	{
		$message['type'] = 'error';
		$message['message'] = 'Er is iets foutgelopen tijdens het connecteren met de database. Probeer opnieuw.';
	}




?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud Insert</title>
</head>
<body>

	<h1>Voeg een brouwer toe</h1>

	<form action="opdracht-CRUD-inserst.php" method="POST">
		<label for="brouwernaam">Brouwernaam </label>
		<br>
		<input type="text" id="brnaam" name="brnaam">
		<br>
		<br>
		<label for="adres">adres </label>
		<br>
		<input type="text" id="adres" name="adres">
		<br>
		<br>
		<label for="postcode">postcode </label>
		<br>
		<input type="text" id="postcode" name="postcode">
		<br>
		<br>
		<label for="omzet">omzet </label>
		<br>
		<input type="text" id="omzet" name="omzet">
		<br>
		<br>
		<input type="submit" value="submit">

	</form>

</body>
</html>
