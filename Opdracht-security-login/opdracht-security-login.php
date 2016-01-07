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


    	</style>
    </head>
    <body>
      <h1>Registreren</h1>
        <form action="registratie-process.php" method="POST">
        	<label for="email">e-mail: </label>
        	<br>
        	<input type="text" id="email" name="email">
        	<br>
        	<br>
        	<label for="password">Paswoord: </label>
        	<br>
        	<input type="password" id="password" name="password">
          <button type="button" id="generatePassword" name="generatePassword">Genereer een passwoord</button>
        	<br>
        	<br>
        	<input type="submit" value="Inloggen">
        	<br>
        	<br>
        </form>
    </body>
</html>
