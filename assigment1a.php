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
	
	$pixelsizes=Array("10","20","30","40");
	$colors=Array("yellow","blue","green","purpe","orange");
	$fonts=Array("Helvetica","verdana","Georgia","Courier New");
	
	if(isset($_POST['textbox'])){
		$textboxvalue=$_POST['textbox'];
	}else{
		$textboxvalue="";
	}
	
	echo "<form method='post' action='assigment1a.php'>";
	echo "skriv vad för text du vill modifera<input type='text' name='textbox' value='$textboxvalue'>";
	
	echo "</br>Välj storlek på text<select name='pixelsize'>";
	foreach($pixelsizes as $pixelsize){
		echo "<option>".$pixelsize;
	}
	echo "</select></br>";
	
	echo "Välj färg på text <select name='color'>";
	foreach($colors as $color){
		echo "<option>".$color;
	}
	echo "</select></br>";
	
	echo "Välj font<select name='font'>";
	foreach($fonts as $font){
		echo "<option>".$font;
	}
	echo "</select></br>";
	
	
	echo "<input type='submit' value='OK!'>";
	
	echo "</form>";
	
	// ny kod
	
	//print_r($_POST);
	echo "<br><br>";
	
	if(isset($_POST['pixelsize'])){
		$pixelsize=$_POST['pixelsize'];
	}else{
		$pixelsize="13";
	}
	if(isset($_POST['color'])){
		$color=$_POST['color'];
	}else{
		$color="0F0";
	}
	if(isset($_POST['font'])){
		$font=$_POST['font'];
	}else{
		$font="normal";
	}
	
	
	echo "<div style='font-size:".$pixelsize."px; font-family:".$font."; color:".$color."'>$textboxvalue</div>";
	
?>
	</div>
	

</div>

</body>
</html>