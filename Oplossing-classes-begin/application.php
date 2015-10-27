<?php 
	

	function __autoload( $className ) {
	    include 'classes/' . $className . '.php';
	}

	$percentBerekening = new Percent(50, 100);

	$rijen    = 4;
	$kolommen = 2;



?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <link href="css/style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
    	<h1>Hoeveel procent is 150 van 100?</h1>
        <table>
        	<tr>
				<td>Absoluut</td>
				<td><?php echo $percentBerekening->absolute ?></td>
			</tr>
			<tr>
				<td>Relatief</td>
				<td><?php echo $percentBerekening->relative ?></td>
			</tr>
			<tr>
				<td>Geheel getal</td>
				<td><?php echo $percentBerekening->hundred . '%' ?></td>
			</tr>
			<tr>
				<td>Nominaal</td>
				<td><?php echo $percentBerekening->nominal ?></td>
			</tr>
        </table>
        
    </body>
</html>