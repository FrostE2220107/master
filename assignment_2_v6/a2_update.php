<!DOCTYPE html>
<html>
    <title>Update a Dish</title>
<body>

<?php 
session_start();
include 'a2_banner.php'; 
 include 'a2_dbconnect.php';
 //check if user is logged in before letting them alter database 
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    echo "Welcome to the member's area, " . htmlspecialchars($_SESSION['username']) . "!";
echo " <a href='a2_logout.php'>Click here if you want to sign out</a>"; 
echo "<br>";
echo "<br>";
echo "If you wish to remove your dish, please enter it's ID number as shown in the database below \r\n";

?>
<br> <br>
<h2>Below is the details on our Dishes, please enter the ID of the dish you are updating and then the replacement details</h2>

<?php //give the user the form to enter their inputs ?>
<form action="a2_change.php">
  <label for="lname">ID of dish to be updated:</label>
  <input type="number" id="number_" name="number" value=""> <br> <br>
  <label for="fname">Dish:</label><br>
  <input type="text" id="dish_" name="dish" value=""><br>
  <label for="lname">Main ingredient:</label><br>
  <input type="text" id="ingr_1_" name="ingr_1" value=""><br>
  <label for="lname">Ingredient 2:</label><br> 
  <input type="text" id="ingr_2_" name="ingr_2" value=""><br>
  <label for="lname">Ingredient 3:</label><br>
  <input type="text" id="ingr_3_" name="ingr_3" value=""><br>
  <label for="lname">Meal Type:</label><br>
  <input type="text" id="Mty_" name="Mty" value=""><br>
  <label for="fname">Main Flavour:</label><br>
  <input type="text" id="Manfl_" name="Manfl" value=""><br>
  <label for="lname">Prep Time:</label><br>
  <input type="text" id="prepti_" name="prepti" value=""><br>
  <label for="lname">Serves:</label><br>
  <input type="text" id="serve_" name="serve" value=""><br><br>
  <input type="submit" value="Submit">
</form> 
<?php } else {
    echo "Please log in to update a dish"; 
}
?>
<?php
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