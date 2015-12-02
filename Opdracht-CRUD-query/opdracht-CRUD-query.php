<?php

	$message = false;

	try
	{
		$db = new PDO( 'mysql:host=localhost;dbname=bieren', 'root', '' );

		$queryString = "SELECT b.biernr, b.naam, b.brouwernr, b.soortnr, b.alcohol, br.brnaam,
							   br.adres, br.postcode, br.gemeente, br.omzet
						FROM `bieren`as b
						JOIN brouwers as br
						ON(b.brouwernr = br.brouwernr)
						WHERE b.naam LIKE 'du%'
						AND br.brnaam LIKe '%a%'";

		$statement = $db->prepare($queryString);
		$statement->execute();


		$fetchAssoc = array();

		while($row = $statement->fetch(PDO::FETCH_ASSOC)){
			$fetchAssoc[] = $row;
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
 	<title></title>
 	<style type="text/css">
 		body{
 			font-family: sans-serif;
 		}

 		thead{
 			font-weight: bold;
 			background-color: #cccccc
 		}

 		th{
 			margin: 0;
 			padding: 5px;
 		}


 	</style>
 </head>
 <body>
 	<?php if($message): ?>
	    <div class="<?php echo $message['type'] ?>">
	   		<?=  $message['message'] ?>
	   	</div>
   	<?php endif ?>

   	<table>
   		<thead>
   			<tr>
	   			<?php
	   				for($counter = 0; $counter<$statement->columnCount(); $counter++){
	   					echo "<th>" . $statement->getColumnMeta( $counter )['name'] . "</th>";
	   				}
	   			 ?>
   			</tr>
   		</thead>

   		<tbody>
   			<?php foreach ($fetchAssoc as $key => $value): ?>
   				<?php echo "<tr>" ?>
	   				<?php foreach($value as $key2 => $value2): ?>
	   					<?php echo "<td>" . $value2 . "</td>" ?>
	   				<?php endforeach ?>
   				<?php echo "</tr>" ?>
   			<?php endforeach ?>
   		</tbody>

   	</table>



 </body>
 </html>
