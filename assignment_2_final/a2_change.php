<?php
include 'a2_banner.php';
include 'a2_dbconnect.php';

//collect the values from the user
$number = $_REQUEST['number'];
$num = (int)$number;
$dish = $_REQUEST['dish'];
$ingr_1= $_REQUEST['ingr_1'];
$ingr_2 = $_REQUEST['ingr_2'];
$ingr_3 = $_REQUEST['ingr_3'];
$mty = $_REQUEST['Mty'];
$manfl = $_REQUEST['Manfl'];
$prepti= $_REQUEST['prepti'];
$serve = $_REQUEST['serve'];

//insert to database
$sql = "UPDATE website_dishes SET Dish = '$dish', Main_ingredient = '$ingr_1', Ingredient2 = '$ingr_2', Ingredient3 = '$ingr_3', Meal_type = '$mty', Main_flavour = '$manfl', Prep_time = '$prepti', Serves = '$serve' WHERE number = '$num' ";

// Check if the query is successful
$query_run = mysqli_query ($mysqli, $sql);
if ($query_run)
	{ 
	echo "Data successfully updated, please use the banner to return to another page";
	}
?>