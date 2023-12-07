<?php

	// Connect to database and run SQL query
	$mysqli = new mysqli("localhost", "2220107", "Skylanders3", "db2220107");
	if ($mysqli -> connect_errno) {
	  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
	  exit();
	}
	
	// Is a keyword provided in the URL?
	if(isset($_GET['search']))
		$sql = "SELECT * FROM website_dishes WHERE Dish LIKE '%{$_GET['search']}%' ORDER BY Meal_type";
	
	// Fetch all record, convert to JSON and return
	$results = $mysqli->query($sql)->fetch_all(MYSQLI_ASSOC);
		print(json_encode($results));
		
	

?>