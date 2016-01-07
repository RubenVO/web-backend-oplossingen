<?php

	$message	=	false;

	try
	{

		$db = new PDO( 'mysql:host=localhost;dbname=bieren', 'root', '' );


    if(isset($_POST["delete"])){
  		$queryStringDelete	=	"DELETE FROM brouwers
                      WHERE brouwernr = :brouwernr ";

      $statementDelete = $db->prepare($queryStringDelete);
      $statementDelete->bindValue(":brouwernr", $_POST["delete"]);
      $brouwerDelete = $statementDelete->execute();

      if($brouwerDelete){
        $message["type"] = "succes";
        $message["message"] = "Succses!";
      }else{
        $message["type"] = "error";
        $message["message"] = "Error!";
      }

    }

    $queryStringSelect = "SELECT brouwernr, brnaam,
        							   adres, postcode, gemeente, omzet
						             FROM `brouwers`";

		$statementSelect = $db->prepare($queryStringSelect);
		$statementSelect->execute();


		$fetchAssoc = array();

		while($row = $statementSelect->fetch(PDO::FETCH_ASSOC)){
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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud Delete</title>
    <style>
			.success
			{
				background-color:lightgreen;
			}

			.error
			{
				background-color:red;
			}

		</style>
</head>
<body>

	<form action="index.php" method="POST">
    <table>
   		<thead>
   			<tr>
	   			<?php
	   				for($counter = 0; $counter<$statementSelect->columnCount(); $counter++){
	   					echo "<th>" . $statementSelect->getColumnMeta( $counter )['name'] . "</th>";
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
            <td>
              <button type="submit" name="delete" id="delete" value="<?php echo $value["brouwernr"] ?>">Delete</button>
            </td>
   				<?php echo "</tr>" ?>
   			<?php endforeach ?>
   		</tbody>

   	</table>
	</form>

</body>
</html>
