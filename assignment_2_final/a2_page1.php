<!DOCTYPE html>
<html>
<style>
table, th, td {
  border:1px solid black;
}
</style>
  <head>
    <meta charset="utf-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Complete cookbook</title>
    </head>
<body>
<?php
session_start();
include 'a2_banner.php';
include 'a2_dbconnect.php';
include 'a2_logged.php';
echo "<br>";
echo "Welcome to the complete cookbook, where you can find all our recipies listed, you can look here for your next dish, but we reccomend searching instead  \r\n";


// Run SQL query
$res = mysqli_query($mysqli, "SELECT number, Dish, Main_ingredient, Ingredient2, Ingredient3, Meal_type, Main_flavour, Prep_time, Serves FROM website_dishes");

// Are there any errors in my SQL statement?
if(!$res) {
  print("MySQL error: " . mysqli_error($mysqli));
  exit;
}
// display in HTML table
?>
<table style="width:100%">
  <tr>
	<th>ID</th>
    <th>Dish</th>
    <th>Main Ingredient</th>
	<th>Ingredient 2</th>
    <th>Ingredient 3</th>
	<th>Meal Type</th>
	<th>Main Flavour</th>
	<th>Prep Time</th>
	<th>Serves</th>
  </tr>
  <?php while($row = mysqli_fetch_assoc($res)):?>
	  <tr>
		  <td><?php echo $row['number'].''; ?></td>
		  <td><?php echo $row['Dish'].''; ?></td>
		  <td><?php echo $row['Main_ingredient'] .''; ?></td>
		  <td><?php echo $row['Ingredient2'] .''; ?></td>
		  <td><?php echo $row['Ingredient3'] .''; ?></td>
		  <td><?php echo $row['Meal_type'] .''; ?></td>
		  <td><?php echo $row['Main_flavour'] .''; ?></td>
		  <td><?php echo $row['Prep_time'] .''; ?></td>
		  <td><?php echo $row['Serves'] .''; ?></td>
	  </tr>
	  <?php endwhile;?>
</table>
</body>
</html>