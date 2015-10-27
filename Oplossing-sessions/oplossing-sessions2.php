<?php

    session_start();

    var_dump($_POST);
	var_dump($_SESSION);

    if(isset($_POST['submit']))
    {
        $_SESSION['registrationData']['1']['email'] = $_POST[ 'email' ];
        $_SESSION['registrationData']['1']['nickname'] = $_POST['nickname'];
    }

    $registrationData['1'] = $_SESSION['registrationData']['1'];


    $straat = (isset($_SESSION['registrationData']['2']['straat'])) ? $_SESSION['registrationData']['2']['straat'] : '';
    $nummer = (isset($_SESSION['registrationData']['2']['nummer'])) ? $_SESSION['registrationData']['2']['nummer'] : '';
    $gemeente = (isset($_SESSION['registrationData']['2']['gemeente'])) ? $_SESSION['registrationData']['2']['gemeente'] : '';
    $postcode = (isset($_SESSION['registrationData']['2']['postcode'])) ? $_SESSION['registrationData']['2']['postcode'] : '';

    if ( isset($_GET['straat']) ) {
                
        $_SESSION['registrationData']['2']['straat'] = $_GET['straat'];       
                        
    }

    if ( isset($_GET['nummer']) ) {
                
        $_SESSION['registrationData']['2']['nummer'] = $_GET['nummer'];       
                        
    }

    if ( isset($_GET['gemeente']) ) {
                
        $_SESSION['registrationData']['2']['gemeente'] = $_GET['gemeente'];       
                        
    }

    if ( isset($_GET['postcode']) ) {
                
        $_SESSION['registrationData']['2']['postcode'] = $_GET['postcode'];       
                        
    }

?>

<!doctype html>
<html>
<head></head>
<body>
	
    <h1>Deel 2</h1>

    
    <h2>Registratiegegevens</h2>

    <ul>
    <?php foreach( $registrationData['1'] as $data => $value ):  ?> 
        <li><?= $data ?>: <?= $value ?></li>
    <?php endforeach ?>
    </ul>

    <h2>Deel 2: adres</h2>

    <form action="oplossing-sessions3.php" method="POST">
        
        <ul>
            <li>
                <label for="straat">straat</label>
                <input type="text" id="straat" name="straat" value="<?= $straat ?>">
            </li>
            <li>
                <label for="nummer">nummer</label>
                <input type="text" id="nummer" name="nummer" value="<?= $nummer ?>">
            </li>
            <li>
                <label for="gemeente">gemeente</label>
                <input type="text" id="gemeente" name="gemeente" value="<?= $gemeente ?>">
            </li>
            <li>
                <label for="postcode">postcode</label>
                <input type="text" id="postcode" name="postcode" value="<?= $postcode ?>">
            </li>
        </ul>

        <input type="submit" name="submit">
        <br>

    </form>
	

	
</body>
</html>