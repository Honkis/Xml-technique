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
			table{width: 450px; background-color: #E0E0E0; margin-top;10px}
			th{}
			td{text-align:center; background-color: #9C9C9C}
			h1.h{float:center}
			p.subscribers{float:right}
			p.type{float:left}
			p.time{float:left}
			p.id{float:right}
		</style>
<?php

   function startElement($parser, $entityname, $attributes) {

				if(strcasecmp($entityname, "newspaper") == 0){
					echo "<table><th><h1 class='h'>";
					foreach ($attributes as $attname => $attvalue) {
						if($attname =="name"){
							echo "".$attvalue."</h1></th>";
						}
						if($attname == "SUBSCRIBERS"){
							echo "<tr><th><p class='subscribers'>Subscribers: ".$attvalue."</p>";
						}
						else{echo "<p class='type'>".$attvalue."</p></th></tr>";
						}
					}
						
				}
				if(strcasecmp($entityname, "article") == 0){
					echo "<tr><td>";
					foreach ($attributes as $attname => $attvalue) {
						if($attname == "TIME"){
							echo "<p class='time'>Date: ".$attvalue."</p>";
						}
						if($attname == "ID"){
							echo "<p class='id'>Id: ".$attvalue."</p>";
						}
					}
				}if(strcasecmp($entityname, "heading") == 0){
					echo "<h2>";
				}
				if(strcasecmp($entityname, "text") == 0){
					echo "";
				}if(strcasecmp($entityname, "comment") == 0){
					echo "";
					foreach ($attributes as $attname => $attvalue) {
						echo "<p class='comment'>".$attvalue."</p>";
					}
				}
   }

   function endElement($parser, $entityname) {

				if(strcasecmp($entityname, "newspaper") == 0){
					echo "</table>";
				}
				if(strcasecmp($entityname, "article") == 0){
					echo "</td></tr>";
				}if(strcasecmp($entityname, "heading") == 0){
					echo "</h2>";
				}
				if(strcasecmp($entityname, "text") == 0){
					echo "";
				}if(strcasecmp($entityname, "comment") == 0){
					echo "";
				}   	
   }

   function charData($parser, $chardata) {
				$chardata=trim($chardata);
				if($chardata=="") return;
				echo "".$chardata."<br>";
   }

   $parser = xml_parser_create();
   xml_set_element_handler($parser, "startElement", "endElement");
   xml_set_character_data_handler($parser, "charData");

   $file = 'example2.xml';
   $data = file_get_contents($file);

   if(!xml_parse($parser, $data, true)){
      printf("<P> Error %s at line %d</P>", xml_error_string(xml_get_error_code($parser)),xml_get_current_line_number($parser));
   }else{
      print "<br>Parsing Complete!</br>";
   }

   xml_parser_free($parser);
?>
		
	</div>
	

</div>

</body>
</html>