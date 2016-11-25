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
			th{}
			td{text-align:center; background-color: #9C9C9C}
			td.tdcomment{background-color:#336633}
			h1{float:center;font-family:Arial, Helvetica, sans-serif}
			p.subscribers{float:right;font-size: 12px}
			p.type{float:left;font-size: 12px}
			h3{float:left;}
			h2{margin:10px 0px 15px 0px}
			p.time{float:left;font-size:9px;margin:0px 0px 0px 0px}
			p.id{float:right;font-size:9px;margin:0px 0px 0px 0px}
			p.comment{font-size:13px; font-style: italic;}
		</style>
<?PHP
	$dom = new DomDocument;
	$dom->preserveWhiteSpace = FALSE;

	$file = 'example2.xml';
	$loadstate=$dom->load($file);	
	$xp = new DOMXPath($dom);

		
		$xpathString="//newspaper";   
	   	$nodes = $xp->query($xpathString);
	   	foreach ($nodes as $node) {
	    	  echo "<table>";	                                                                                                                          
	    	  echo "<th><h1>".$node->getAttribute('name')."</h1></th>".
	    	  "<tr><th><p class='subscribers'> Subscribers: ".$node->getAttribute('subscribers')."</p>".
	    	  "<h3 class='type'>".$node->getAttribute('type')."</h3></th></tr>";
				
				$innerdom = new DomDocument;
				$otherxml=$dom->saveXML($node);
				$innerdom->loadXML($otherxml);
				$innerxp = new DOMXPath($innerdom);

				$xpathString="/newspaper/*";
				$innernodes = $innerxp->query($xpathString);
				foreach ($innernodes as $innernode) {
			
					if($innernode->getAttribute('id')){
						echo  "<tr><td><p class='id'> Id: ".$innernode->getAttribute('id')."</p>";
					}if($innernode->getAttribute('time')){
						echo "<p class='time'>Date: ".$innernode->getAttribute('time')."</p>";
						
					}

						$doubledom = new DomDocument;
						$doublexml = $innerdom->saveXML($innernode);
						$doubledom->loadXML($doublexml);
						$doublexp = new DOMXPath($doubledom);
						
						$xpathString="/article/*";
						$doublenodes = $doublexp->query($xpathString);
						foreach($doublenodes as $doublenode){
							if($doublenode->nodeName=='heading'){	
								echo "<h2>".$doublenode->textContent."</h2>";
							}if($doublenode->nodeName=='text'){
								echo "<p>".$doublenode->textContent."</p></td></tr>";
							}if($doublenode->getAttribute('description')){
								echo "<tr><td class='tdcomment'><p class='comment'>".$doublenode->getAttribute('description')."</p></td></tr>";
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