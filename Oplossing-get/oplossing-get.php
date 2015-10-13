<?php
//*********************************** DEEL 1 *******************************
	$artikels =	[	array(	"Titel" => "AYY LMAOO", 
							"Paragraaf" => "( ͡° ͜ʖ ͡°)( ͡° ͜ʖ ͡°)( ͡° ͜ʖ ͡°)( ͡° ͜ʖ ͡°)( ͡° ͜ʖ ͡°)( ͡° ͜ʖ ͡°)( ͡° ͜ʖ ͡°)( ͡° ͜ʖ ͡°)( ͡° ͜ʖ ͡°)( ͡° ͜ʖ ͡°)( ͡° ͜ʖ ͡°)( ͡° ͜ʖ ͡°)( ͡° ͜ʖ ͡°)( ͡° ͜ʖ ͡°)( ͡° ͜ʖ ͡°)( ͡° ͜ʖ ͡°)( ͡° ͜ʖ ͡°)( ͡° ͜ʖ ͡°)( ͡° ͜ʖ ͡°)( ͡° ͜ʖ ͡°)( ͡° ͜ʖ ͡°)( ͡° ͜ʖ ͡°)( ͡° ͜ʖ ͡°)( ͡° ͜ʖ ͡°)( ͡° ͜ʖ ͡°)( ͡° ͜ʖ ͡°)( ͡° ͜ʖ ͡°)( ͡° ͜ʖ ͡°)( ͡° ͜ʖ ͡°)( ͡° ͜ʖ ͡°)( ͡° ͜ʖ ͡°)( ͡° ͜ʖ ͡°)( ͡° ͜ʖ ͡°)( ͡° ͜ʖ ͡°)( ͡° ͜ʖ ͡°)( ͡° ͜ʖ ͡°)( ͡° ͜ʖ ͡°)( ͡° ͜ʖ ͡°)( ͡° ͜ʖ ͡°)( ͡° ͜ʖ ͡°)( ͡° ͜ʖ ͡°)( ͡° ͜ʖ ͡°)", 
							"Afbeelding" => "Lenny_face.png", 
							"Beschrijving" => "le lenny face"), 

					array(	"Titel" => "Brotherman Bill", 
						"Paragraaf" => "KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona KKona ", 
						"Afbeelding" => "kkona.jpg", 
						"Beschrijving" => "The brother living at the top of the hill"), 

					array(	"Titel" => "Kappa", 
						"Paragraaf" => "Kappa KappaPride Keepo Kappa KappaPride Keepo Kappa KappaPride Keepo Kappa KappaPride Keepo Kappa KappaPride Keepo Kappa KappaPride Keepo Kappa KappaPride Keepo Kappa KappaPride Keepo Kappa KappaPride Keepo Kappa KappaPride Keepo Kappa KappaPride Keepo Kappa KappaPride Keepo Kappa KappaPride Keepo Kappa KappaPride Keepo Kappa KappaPride Keepo Kappa KappaPride Keepo Kappa KappaPride Keepo Kappa KappaPride Keepo Kappa KappaPride Keepo Kappa KappaPride Keepo Kappa KappaPride Keepo Kappa KappaPride Keepo Kappa KappaPride Keepo Kappa KappaPride Keepo ", 
						"Afbeelding" => "kappa.png", 
						"Beschrijving" => "Grey Face no spacerino Kappa")
				];



//*********************************** DEEL 2 *******************************

?>

<!DOCTYPE html>
<html>
<head></head>
<body>

	<div class="facade-minimal" data-url="http://www.app.local/index.php">
                        
                        <style>
                        	body{
                        		font-family: sans-serif;
                        	}
                            .multiple
                            {
                                float:left;
                                width:350px;
                                margin:16px;
                                padding:16px;
                                box-sizing:border-box;
                                background-color:#EEEEEE;
                            }

                            

                            img
                            {
                                float:left;
                                margin-left: 16px;
                                margin-right: 16px;
                                width: 302px;
                            }
                            
                            .multiple h1
                            {
                                margin:0;
                                font-size:18px;
                            }


                        </style>

                        <h1>De krant van vandaag</h1>


			<?php foreach ( $artikels as $id => $artikel ): ?>
				<article class="multiple">
					<h1><?php echo $artikel['Titel'] ?></h1>
					<img src="./img/<?php echo $artikel['Afbeelding'] ?>" alt="<?php echo $artikel['Beschrijving'] ?>">
					<p><?php echo str_replace ( "\r\n", "</p><p>", substr( $artikel['Paragraaf'], 0, 50 ) ) . '...' ?></p>
				</article>
			<?php endforeach ?>

    </div>


</body>
</html>