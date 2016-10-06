<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		
	
		b{color: red;}
		th,td{background: blue;}

	</style>
</head>
	<table>
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
		
		$numdia = 1;
		$month=date("n");
		$dias=array("Diumenge","Dilluns","Dimarts","Dimecres","Dijous","Divendres", "Dissabte"); 
		$mesos=array("Gener","Febrer","Març","Abril","Maig","Juny","Juliol","Agost", "Setembre","Octubre","Novembre","Desembre");
		$year=date("Y");
		$day = date("d");
		$numtotalmes = date("d",(mktime(0,0,0,$month+1,1,$year)-1));
		$diaSemana=date("w",mktime(0,0,0,$month,1,$year));
		echo "<p>".$mesos[$month-1]."</p>";
		$diainici = 1;

		//echo date("F");; 
		//echo date("Y");
		//$diaavui =  date(string $format [, int $timestamp = time() ] );

for ($t=0; $t < 7; $t++) { 
	echo $mesos[date('t')-1];
}
for ($i=0; $i < 6; $i++) { 
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

