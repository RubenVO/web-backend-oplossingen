<?php
//*********************************** DEEL 1 *******************************
	$artikels =	[	array(	"Titel" => "lenny", 
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

    $artikelBool;

    if ( isset ( $_GET['id'] ) )
    {
        $id = $_GET['id'];

        $thisArtikel = $artikels[$id];

        // Controleren of de opgevraagde key (=id) bestaat in de array $artikels
        if ( array_key_exists( $id , $artikels ) )
        {
            $artikels           =   array( $artikels[$id] );
        }   

        $individueelArtikel =   true;
    }
    else{
        $individueelArtikel = false;
    }



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

        <?php if ($individueelArtikel == false): ?>


			<?php foreach ( $artikels as $id => $artikel ): ?>
				<article class="multiple">
					<h1><?php echo $artikel['Titel'] ?></h1>
					<img src="./img/<?php echo $artikel['Afbeelding'] ?>" alt="<?php echo $artikel['Beschrijving'] ?>">
					<p><?php echo str_replace ( "\r\n", "</p><p>", substr( $artikel['Paragraaf'], 0, 50 ) ) . '...' ?></p>
                    <a href="oplossing-get.php?id=<?php echo $id ?>">Lees meer</a>
				</article>
			<?php endforeach ?>


        <?php else: ?>


            <article class="multiple">
                    <h1><?php echo $thisArtikel['Titel'] ?></h1>
                    <img src="./img/<?php echo $thisArtikel['Afbeelding'] ?>">
                    <p><?php echo str_replace ( "\r\n", "</p><p>", substr( $thisArtikel['Paragraaf'], 0, 50 ) ) . '...' ?></p>
            </article>


        <?php endif ?>

    </div>


</body>
</html>