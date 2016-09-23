<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<table border="1"; border-collapse: collapse;>
	<tr>
	<th>Dilluns</th>
	<th>Dimarts</th>
	<th>Dimecres</th>
	<th>Dijous</th>
	<th>Divendres</th>
	<th>Dissabte</th>
	<th>Diumenge</th>
	</tr>

		<?php
		echo date("F");; 

		$numdia = 1;
		$month=date("n");
		$year=date("Y");
		$day = date("d");
		$numtotalmes = date("d",(mktime(0,0,0,$month+1,1,$year)-1));
		$diaSemana=date("w",mktime(0,0,0,$month,1,$year));
		//echo $diaSemana;
		$diainici = 1;
		//echo date("Y");
		//$diaavui =  date(string $format [, int $timestamp = time() ] );

for ($i=0; $i < 5; $i++) { 
	echo "<tr>";
	for ($y=0; $y  < 7; $y++) { 
		if ($diainici != $diaSemana) {
			$diainici += 1;
			echo "<td>	</td>";
		} else {
			if ($numdia == $day) {
			echo "<td><b><u>".$numdia."</u></b></td>";
		} else {
			echo "<td>".$numdia."</td>";
		}
		
		
			
		

$numdia += 1;
}
if ($numdia == $numtotalmes+1) {
	$i = 6;
	$y = 8;
}

	}
	echo "</tr>";
}
?>
	</table>
</body>
</html>

