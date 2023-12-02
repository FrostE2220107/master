<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dish finder</title>
	<?php //enable bootstrap ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
 <?php include 'a2_banner.php'; ?>
  <body>
    <div class="container">
		<h1>Dish finder</h1>
		<form class="row g-3">
		  <div class="col-auto">
			<?php //create the searchbar ?>
			<input type="text" class="form-control" id="searchBox" placeholder="Search by Ingredient"> 
		  </div>
		</form>	
		<p id="results"></p>
	</div>
	
  </body>
<select onchange="la(this.value)">

<option disabled selected>What would you like to Search by?</option>

<option value="a2_page2.php">Dish</option>

<option value = "a2_page2_1.php">Ingredients</option>

<option value = "a2_page2_2.php">Meal Type</option>

</select>

<script>

function la(src)
{

window.location=src;
}

</script>
</html>
<script>
	
	// We "listen" for key pressed in our search box
	document.getElementById("searchBox").addEventListener("keyup", doSearch);
	
	// Function called when searching
	function doSearch() {
		
		// Get keyword from search box
		keywords = document.getElementById("searchBox").value;
		
		// Call server script, passing our keyword
		fetch('https://mi-linux.wlv.ac.uk/~2220107/Y2/assignment_2/a2_search.php?search#1=' + keywords)

		// Convert response string to json object
		.then(response => response.json())
		.then(response => {
			
			// Clear result box
			document.getElementById("results").innerHTML = '';
			
			// Loop through data and add to result box
			response.forEach(meal => {
				document.getElementById("results").append(meal.Dish + ' ') ;
			});
		});


	}
</script>