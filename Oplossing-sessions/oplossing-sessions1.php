<?php


	session_start();

	var_dump($_SESSION);

	$email = (isset($_SESSION['registrationData']['1']['email'])) ? $_SESSION['registrationData']['1']['email'] : '';
	$nickname = (isset($_SESSION['registrationData']['1']['nickname'])) ? $_SESSION['registrationData']['1']['nickname'] : '';

	if ( isset($_GET['email']) ) {
				
		$_SESSION['registrationData']['1']['email'] = $_GET['email'];		
						
	}

	if ( isset($_GET['nickname']) ) {
				
		$_SESSION['registrationData']['1']['nickname'] = $_GET['nickname'];		
						
	}

?>

<!doctype html>
<html>
<head></head>
<body>
		
	<h1>Sessions</h1>
		
		<h2>Deel 1</h2>

		<form action="oplossing-sessions2.php" method="POST">
			
			<ul>
				<li>
					<label for="email">email</label>
					<input type="text" id="email" name="email" value="<?= $email ?>">
				</li>
				<li>
					<label for="nickname">nickname</label>
					<input type="text" id="nickname" name="nickname" value="<?= $nickname ?>">
				</li>
			</ul>

			<input type="submit" name="submit" id="submit">
			<br>

		</form>

		
    </body>
</html>