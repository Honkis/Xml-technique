<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link href="css.css" rel="stylesheet" type="text/css">
		<title>Anton Honkavaara Dahl</title>
	</head>
<body>
<div id="mainbox"> <!--  wrapper around div-->

	<div id="logo"> <!-- logo -->
	</div>
	
	<div id="meny"> <!-- menu with all the links to guide around the page -->
	<nav>
		<a href="index.html" title="home">Home</a>
		<a href="assigment1a.php" title="assigmnt1a">Assigment1a</a>
		<a href="assigment1b.php" title="assigment1b">Assigment1b</a>
		<a href="sax.php" title="Assigment2">Assigment2</a>
		<a href="domassigment3.php" title="assigment3">Assigment3</a>
		<a href="Assignment4.php" title="Assigment4">Assigment4</a>
		<a href="domxpathassigment5.php" title="Assigment5">Assigment5</a>
		<a href="assigment6.php" title="Assigment6">Assigment6</a>
		<a href="assigment7.php" title="Assigment7">Assigment7</a>
		<a href="charlie.php" title="Assigment8">Assigment8(CharlieSheen)</a>
	</nav>	
	</div>
	
	<div id="centerdoc"> <!-- centerdoc with the information.   -->
<?php

$trucks=Array(
			Array("KrAZ","Kremenchuk","Ukraine",Array(
				Array("KrAZ-65055","6x6","330Hp"),
				Array("KrAZ-6130C4","6x6","330Hp"),
				Array("KrAZ-5133H2","4x2","330Hp"),
				Array("KrAZ-7140H6","8x6","400Hp")
				)),
			Array("EBIAM","Thessaloniki","Greece",Array(
				Array("EBIAM MVM","4x4","86Hp")
				)),
			Array("KaMAZ","Naberezhnye Chelny","Tatarstan",Array(
				Array("KAMAZ 54115","6x4","240Hp"),
				Array("KAMAZ 6560","8x8","400Hp"),
				Array("KAMAZ 5460","8x8","340Hp")
				)),
			Array("LIAZ","Rynovice","Czechoslovakia",Array(
				Array("LIAZ 706 RT","2x4","160Hp")
				)),
			Array("IRUM","Brasov","Romania",Array(
				Array("TAF 690","2x4","90Hp")
				)),
			Array("MAZ","Minsk","Belarus",Array(
				Array("MAZ 535","8x8","375Hp"),
				Array("MAZ 7310","8x8","525Hp"),
				Array("MAZ 7907","4x12","1250Hp"),
				Array("MAZ 6317","6x6","425Hp"),
				Array("MAZ 6430","6x6","360Hp"),	
				Array("MAZ 5551","4x2","160Hp")																																													
				)),
			Array("BelAz","Zohodino","Belarus",Array(
				Array("Belaz 75600","4x4","3400Hp")
				)),
			Array("Oshkosh","Oshkosh","USA",Array(
				Array("Oshkosh P-15","8x8","840Hp"),
				Array("Oshkosh MK-36","6x6","425Hp")
				)),
			Array("Tatra","Koprivnice","Czechoslovakia",Array(
				Array("Tatra T 813","4x4","266Hp"),
				Array("Tatra T 815","10x10","436Hp"),
				))
);
		$colorCount = null;
		$countries=Array("Choose");
		foreach($trucks as $truck){
				// Is the key $truck[2] i.e. the country name set in the array $countries or not?
				// If not this means that this country does not exist in the array and therefore should be added to the array
				// This creates a list of countries without duplicates
				if(!isset($countries[$truck[2]])){
						$countries[$truck[2]]=$truck[2];
				}

		}

		// For each counry create an option tag for the select named country
		echo "<form method='post' action='assigment1b.php'><select name='country' onchange='this.form.submit()'>";
		foreach($countries as $country){
				echo "<option>".$country;
		}	
		echo "</select></form>";
		
		// This is where the new code goes!
		if(isset($_POST['country'])){
			$country=$_POST['country'];
			$info=$truck[3];
		}else{
			$country=null;
		}
		
		
		echo "<table border='1'>";
		
		echo "<tr style='background-color:yellow;'><th>Code</th>";
		echo "<th>Town</th>";
		echo "<th>Country</th>";
		echo "<th>Model</th>";
		echo "<th>Meusure</th>";
		echo "<th>Hp</th></tr>";

			foreach($trucks as $truck){
				foreach($truck[3] as $info){
					if($country==$truck[2]){
						$colorCount++;
						if($colorCount == 1 || $colorCount == 3 || $colorCount == 5 || $colorCount == 7 || $colorCount == 9){
							$color = 'grey';
						}else {
							$color = '#37FDFC';
						}
						
						echo "<tr style='background-color:$color;'>";
						echo "<td>".$truck[0]."</td>";
						echo "<td>".$truck[1]."</td>";
						echo "<td>".$truck[2]."</td>";
						echo "<td>".$info[0]."</td>";
						echo "<td>".$info[1]."</td>";
						echo "<td>".$info[2]."</td>";
						echo "</tr>";
					}	
					
				}
				
			}
		
		
		
		echo "</table>";
		//print_r($_POST);
																								
?>
	</div>
	

</div>

</body>
</html>