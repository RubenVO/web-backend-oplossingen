<?php
//*********************************** DEEL 1 *******************************
	$rijen = 10;
	$kolommen = 10;


//*********************************** DEEL 2 *******************************

?>

<!DOCTYPE html>
<html>
<head></head>
<style>
	table{
		border: 2px solid black;
	}
	td
	{
		padding: 16px;
		border: 1px solid black;
	}
</style>
<body>

	<h1>DEEL 1</h1>
	<table>
		<?php for($teller1 = 0; $teller1 < $rijen; $teller1++): ?>
		<tr>
			<?php for($teller = 0; $teller < $kolommen; $teller++): ?>
				<td> Tabel? </td>
			<?php endfor ?>
		</tr>
		<?php endfor ?>
	</table>

	<h1>DEEL 2</h1>
	<table>
		<?php for($teller1 = 0; $teller1 < $rijen; $teller1++): ?>
		<tr>
			<?php for($teller = 0; $teller <= $kolommen; $teller++): ?>
				<td><?php echo($teller1 * $teller) ?></td>
			<?php endfor ?>
		</tr>
		<?php endfor ?>
	</table>


</body>
</html>