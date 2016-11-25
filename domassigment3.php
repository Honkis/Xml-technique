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
		<style>
			table{width: 450px; background-color: #E0E0E0; margin-top: 5px}
			th{height: 5px;}
			td{text-align:center; background-color: #9C9C9C}
			h1.h{float:center}
			p.subscribers{float:right}
			h3.type{float:left}
			p.time{float:left}
			p.id{float:right}
			p.comment{font-size:13px; font-style: italic;}
		</style>
<?php

		$file = 'example2.xml';

		$dom = new DomDocument;
		$dom->preserveWhiteSpace = FALSE;
		$dom->load($file);

		$newspapers = $dom->getElementsByTagName('newspaper');
		foreach ($newspapers as $newspaper){
			echo "<table>";
			$attributepaper = $newspaper->attributes;
			foreach($attributepaper as $index=>$attpaper){
				if($attpaper->name=="name"){
					echo "<th><h1>".$attpaper->value."</h1></th>";
				}if($attpaper->name=="subscribers"){
					echo "<tr><th><p class='subscribers'>Subscribers: ".$attpaper->value."</p>";
				}if($attpaper->name=="type"){
					echo "<h3 class='type'>".$attpaper->value."</h3></th></tr>";
				}
				
			}
			
			foreach ($newspaper->childNodes as $article){
				$attributes = $article->attributes;
				foreach ($attributes as $index=>$attarticle) {
					if($attarticle->name=="id"){
						echo "<tr><td><p class='id'>Id: ".$attarticle->value."</p>";
					}if($attarticle->name=="time"){
						echo "<p class='time'>Date: ".$attarticle->value."</p>";
					}
					
				}
				foreach($article->childNodes as $artchild){
					if($artchild->tagName=="heading"){
						echo "<h2>".$artchild->nodeValue."</h2>";
					}if($artchild->tagName=="text"){
						echo "<p>".$artchild->nodeValue."</p>";
					}
					$attributeartchild = $artchild->attributes;
					foreach($attributeartchild as $index=>$attartchild){
						if($attartchild->name=="description"){
							echo "<p class='comment'>".$attartchild->value."</p></tr></td>";
						}
					}
					
				}
	  		}
			echo "</table>";
		}
	
?>
	</div>
	

</div>

</body>
</html>