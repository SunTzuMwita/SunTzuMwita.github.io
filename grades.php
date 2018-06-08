<?php
$studentname=0;
$adm=0;
$math=0;
$eng=0;
$swahili=0;
$phyc=0;
$bio=0;
$chem=0;
$comp=0;

$studentname=$_POST["studentname"];
$adm=$_POST["adm"];
$math=$_POST["math"];
$eng=$_POST["eng"];
$swahili=$_POST["swahili"];
$phyc=$_POST["phyc"];
$bio=$_POST["bio"];
$chem=$_POST["chem"];
$comp=$_POST["comp"];


	
$average=($math+$eng+$swahili+$phyc+$bio+$chem+$comp)/7;
echo "Student's average is ".$average;
echo "<br>";

	if ($average>=80) {
		# code...
		echo "Grade A";
	}
	elseif ($average>=70) {
		# code...
		echo "Grade B";
	}
	elseif ($average>=60) {
		# code...
		echo "Grade C";
	}
	elseif ($average>=50) {
		# code...
		echo "Grade D";
	}
	elseif ($average>=40) {
		# code...
		echo "Grade D-";
	}
	else{
		echo "Grade E";
	}
	?>
	
	<!DOCTYPE html>
	<html>
	<head>
		<title>Result Sheet</title>
		<style type="text/css">
			body{
				background-color: grey;
			}
			table,th,td{
				background-color: grey;
				color: white;
				border: 2px solid black;
				padding: 4px
			}
			table{
				width: 100%;
				border-collapse: collapse;
			}
		</style>
	</head>
	<body>
	<table>
		<tr>
			<th>Subject</th>
			<th>Points</th>
		</tr>
		<tr>
			<td>Maths</td>
			<td><?php echo "$math";?></td>
		</tr>
		<tr>
			<td>English</td>
			<td><?php echo "$eng";?></td>
		</tr>
		<tr>
			<td>Kiswahili</td>
			<td><?php echo "$swahili";?></td>
		</tr>
		<tr>
			<td>Physics</td>
			<td><?php echo "$phyc";?></td>
		</tr>
		<tr>
			<td>Biology</td>
			<td><?php echo "$bio";?></td>
		</tr>
		<tr>
			<td>Chemistry</td>
			<td><?php echo "$chem";?></td>
		</tr>
		<tr>
			<td>Computer Studies</td>
			<td><?php echo "$comp";?></td>
		</tr>
		<tr>
			<td>Average Score</td>
			<td><?php echo "$average";?></td>
		</tr>
	</table>
	</body>
	</html>