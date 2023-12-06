<?php
include 'a2_banner.php';
include 'a2_dbconnect.php';

//collect the values from the user
$dish = $_REQUEST['dish'];
$ingr_1= $_REQUEST['ingr_1'];
$ingr_2 = $_REQUEST['ingr_2'];
$ingr_3 = $_REQUEST['ingr_3'];
$mty = $_REQUEST['Mty'];
$manfl = $_REQUEST['Manfl'];
$prepti= $_REQUEST['prepti'];
$serve = $_REQUEST['serve'];

//insert to database
$sql = "INSERT INTO website_dishes (Dish, Main_ingredient, Ingredient2, Ingredient3, Meal_type, Main_flavour, Prep_time, Serves)
VALUES ('$dish', '$ingr_1', '$ingr_2', '$ingr_3', '$mty', '$manfl', '$prepti', '$serve')";

// Check if the query is successful
$query_run = mysqli_query ($mysqli, $sql);
if ($query_run)
	{ 
	echo "Data successfully deleted, please use the banner to return to another page";
	}

?>