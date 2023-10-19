<html>
   <head>
     <title>Multi-dimensional arrays</title>
   </head>
   <body bgcolor="#ffffff">
     <h2>A two dimensional array</h2>
     <?php
       // A two dimensional array using integer indexes
       $planets = array
       (
         array("Mercury", 0.39, 0.38),
         array("Venus", 0.72, 0.95),
         array("Earth", 1.0, 1.0),
         array("Mars", 1.52, 0.53)
       );
       // prints "Earth"
       print $planets[2][0];
     ?>

     <h2>More sophisticated multi-dimensional array</h2>
	<?php
	 // More sophisticated multi-dimensional array
       $planets2 = array
       (
         "Mercury"=> array("dist"=>0.39, "dia"=>0.38),
         "Venus"  => array("dist"=>0.39, "dia"=>0.95),
         "Earth"  => array("dist"=>1.0,  "dia"=>1.0, "moons"=>array("Moon")),
         "Mars"   => array("dist"=>0.39, "dia"=>0.53, "moons"=>array("Phobos", "Deimos"))
       );
       // prints "Moon"
       print $planets2["Earth"]["moons"][0];
	   //defines name and price for first book in index
	   $books[0]['name'] = 'Harry Potter';
	   $books[0]['price'] = 12.99; 
	   echo "<BR>";
	   echo "<BR>";
	   //defines name and price for seccond book in index
	   $books[1]['name'] = 'Bob the Builder';
	   $books[1]['price'] = 6.99;
		//works through the index echoing all book information
	   foreach ($books as $thisBook) {
		 echo $thisBook['name'] . " sells for $". $thisBook['price'] . "<BR>";
	   }
	?>
	</body>
 </html>  