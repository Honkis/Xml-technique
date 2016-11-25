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
		<a href="Assignment4b.php" title="Assigment4">Assigment4b</a>
		<a href="Assignment4c.php" title="Assigment4">Assigment4c</a>
		<a href="domxpathassigment5.php" title="Assigment5">Assigment5</a>
		<a href="assigment6.php" title="Assigment6">Assigment6</a>
		<a href="assigment7.php" title="Assigment7">Assigment7</a>
		<a href="charlie.php" title="Assigment8">Assigment8(CharlieSheen)</a>
	</nav>	
	</div>
	
	<div id="centerdoc"> <!-- centerdoc with the information.   -->
<?php

function HandleXmlError($errno, $errstr, $errfile, $errline)
{
 		echo $errno." ".$errstr."<br>";
}

	$file = 'example2a.xml';

	$dom = new DomDocument;
	$dom->preserveWhiteSpace = FALSE;
	
	set_error_handler('HandleXmlError');
	$loadstate=$dom->load($file);
	if($loadstate){
			$validatestate=$dom->validate();	
			if($validatestate){
					echo "Validation successful!<br>";
			}else{
					echo "Validation test failed!<br>";
			}			
	}else{
			echo "Well-formedness test Failed!<br>";	
	}
	restore_error_handler();
	
?>
	</div>
	

</div>

</body>
</html>
