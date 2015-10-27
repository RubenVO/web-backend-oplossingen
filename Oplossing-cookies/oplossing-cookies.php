<?php

	//Header omdat cookies worden aangemaakt/aangepast in ifs?
	//Zonder header moet je pagina 2x vernieuwen. Waarom? Worden pas geupdatet na refresh van pagina?

	if(isset($_GET['logout']))
	{
		setcookie('authenticated', '', time() - 1);
		header('location: oplossing-cookies.php');
	}

	$inlogDataFile = file_get_contents('inlogdata.txt');
	$inlogData = explode(',', $inlogDataFile);

	$message = false;
	$isAuthenticated = false;

	if (!isset($_COOKIE['authenticated']))
	{
		if (isset($_POST['submit']))
		{
			if($_POST['username'] == $inlogData[0] && $_POST['password'] == $inlogData[1])
			{
				setcookie('authenticated', true, time() + 3600);
				header('location: oplossing-cookies.php');
			}
			else
			{
				$message = 'Er ging iets mis. Probeer opnieuw.';
			}
		}
	}
	else
	{
		$message = 'U bent ingelogd.';
		$isAuthenticated = true;
	}

	var_dump($inlogData);
	//var_dump($_POST['password']);
	//var_dump($_POST['username']);

?>

<!DOCTYPE html>
<html>
<head></head>
<body>


	<h1>Inloggen</h1>
	
	<?php if ($message): ?>
		<?=	$message ?>
	<?php endif ?>

	<?php if(!$isAuthenticated): ?>
	
		<form action="oplossing-cookies.php" method="POST">
			<ul>
				<li>
					<label for="username">Gebruikersnaam: </label>
					<input type="text" name="username" id="username">
				</li>
				<li>
					<label for="password">Paswoord: </label>
					<input type="password" name="password" id="password">
				</li>
			</ul>
			<input type="submit" name="submit" value="inloggen">
		</form>
	<?php else: ?>

		<a href="oplossing-cookies.php?logout=true">Uitloggen</a>

	<?php endif ?>
	


</body>
</html>