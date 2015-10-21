<?php 
	$password = "azerty";
	$username = "stijn";
	$isCorrect = false;
	if( isset($_POST["password"]) )
	{
		if($_POST["password"] == $password && $_POST["username"] == $username)
		{
			$message = "Succesvol aangemeld";
			$isCorrect = true;
		}
		else
		{
			$message = "Error bij inloggen";
			$isCorrect = false;
		}
	}
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <link href="css/style.css" rel="stylesheet" type="text/css">
    
        <style>
    		body{
    			font-family: sans-serif;
    			
    		}
    		.classCorrect{
    			color: green;
    		}
    		.classNotCorrect{
    			color: red;
    		}
    	</style>
    </head>
    <body>
        <form action="oplossing-post.php" method="POST">
        	<label for="username">Gebruikersnaam: </label>
        	<br>
        	<input type="text" id="username" name="username">
        	<br>
        	<br>
        	<label for="password">Paswoord: </label>
        	<br>
        	<input type="password" id="password" name="password">
        	<br>
        	<br>
        	<input type="submit" value="Inloggen">
        	<br>
        	<br>
	       	<p class="<?php echo ($isCorrect)? 'classCorrect' : 'classNotCorrect' ?>">
	       		<?php if($_SERVER["REQUEST_METHOD"] == "POST"): ?>
	       			<?php echo $message ?>
	       		<?php else: ?>
	       			<?php echo "" ?>
	       		<?php endif ?>
	       	</p>
        </form>        
    </body>
</html>