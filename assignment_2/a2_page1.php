<!DOCTYPE html>
<html>
<style>
table, th, td {
  border:1px solid black;
}
</style>
<body>
<?php
include 'a2_banner.php';
echo "Welcome to the complete cookbook, where you can find all our recipies listed, you can look here for your next dish, but we reccomend searching instead";
//Connect to server/database
$mysqli = mysqli_connect("localhost", "2220107", "Skylanders3", "db2220107");
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
} else {
echo "Connected to the database successfully.";
}
// Run SQL query
$res = mysqli_query($mysqli, "SELECT Dish, Main_ingredient, Ingredient2, Ingredient3, Meal_type, Main_flavour, Prep_time, Serves FROM website_dishes");

// Are there any errors in my SQL statement?
if(!$res) {
  print("MySQL error: " . mysqli_error($mysqli));
  exit;
}
// display in HTML table
?>
<table style="width:100%">
  <tr>
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