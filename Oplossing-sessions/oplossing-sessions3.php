<?php

	session_start();

    var_dump($_POST);
    var_dump($_SESSION);

    if(isset($_POST['submit']))
    {
        $_SESSION['registrationData']['2']['straat'] = $_POST['straat'];
        $_SESSION['registrationData']['2']['nummer'] = $_POST['nummer'];
        $_SESSION['registrationData']['2']['gemeente'] = $_POST['gemeente'];
        $_SESSION['registrationData']['2']['postcode'] = $_POST['postcode'];
    }

    $registrationData = $_SESSION['registrationData'];

?>

<!doctype html>
<html>
<head></head>
<body>
	
	<h1>Deel 3</h1>

    <h2>Overzicht</h2>

    <ul>

    <?php foreach( $registrationData as $paginaIndex => $paginaValue ):  ?>

        <?php foreach( $paginaValue as $data => $value ):  ?>
            <li>
                <?= $data ?>: <?= $value ?>
                <p><a href="oplossing-sessions<?= $paginaIndex ?>.php?focus=<?= $data ?>">wijzig</a></p>
            </li>
        <?php endforeach ?>

    <?php endforeach ?>
    
    </ul>

	
</body>
</html>