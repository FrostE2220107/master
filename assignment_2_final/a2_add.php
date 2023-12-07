<!DOCTYPE html>
<html>
	<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Add your dish</title>
	</head>
<body>

<?php 
session_start();
include 'a2_banner.php';?>

<h2>Add your Dish</h2>

<?php//check if user is logged in before letting them alter database ?>
<?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    echo "Welcome to the member's area, " . htmlspecialchars($_SESSION['username']) . "!";
echo " <a href='a2_logout.php'>Click here if you want to sign out</a>"; 
//give user a form to alter the database?>
	<form action="a2_insert.php">
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
  <input type="number" id="serve_" name="serve" value=""><br><br>
  <input type="submit" value="Submit">
</form> 
<?php } else {
    echo "Please log in to add a dish"; 
}
echo "<br>";
echo "<br>";?>


</body>
</html>
