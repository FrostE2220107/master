<!DOCTYPE html>
<html>
    <title>Add your dish</title>
<body>

<?php include 'a2_banner.php'; ?>

<h2>Add your Dish</h2>

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
  <input type="text" id="serve_" name="serve" value=""><br><br>
  <input type="submit" value="Submit">
</form> 

</body>
</html>
