<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Taules</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
		

	<div class="container">


	<div class="table-responsive">
	</br></br></br>
		<table class="table table-bordered table-hover table-condensed">

		<tr>
			<th>Llista ingredients</th>
			<th>Preu</th>

		</tr>

		
			<?php $i = 5;

			if (($_GET['IMassa'] == on)||($_GET['IOrenga'] == on)) {
				header('Location: mipagina.php');
			}
			echo "<tr><td>Preu base</td><td>5</td></tr>";

			if ($_GET['IMassa'] == on) {echo "<tr><td>Massa</td><td>0,5</td></tr>"; $i+= 0.5;}
			if ($_GET['ITomaquet'] == on) {echo "<tr><td>Tomaquet</td><td>0,5</td></tr>";$i+= 0.5;}
			if ($_GET['IOrenga'] == on) {echo "<tr><td>Orenga</td><td>0,5</td></tr>";$i+= 0.5;}
			if ($_GET['IFormatge'] == on) {echo "<tr><td>Formatge</td><td>0,5</td></tr>";$i+= 0.5;}
			if ($_GET['IPollastre'] == on) {echo "<tr><td>Pollastre</td><td>0,5</td></tr>";$i+= 0.5;}
			if ($_GET['IPebrot'] == on) {echo "<tr><td>Pebrot</td><td>0,5</td></tr>";$i+= 0.5;}

			echo "<tr><td></td><td>Total: ".$i." €</td></tr>";

			?>

			

		</table>
		</div>
	</div>
	
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>