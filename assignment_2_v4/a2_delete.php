<?php
include 'a2_banner.php';
include 'a2_dbconnect.php';

//collect the value from the user
$number = $_REQUEST['number'];

//remove from database
$sql = "DELETE FROM `website_dishes` WHERE `website_dishes`.`number` = '$number'";

//check if deletion was successful
$query_run = mysqli_query ($mysqli, $sql);
if ($query_run)
	{ 
	echo "Data successfully deleted, please use the banner to return to another page";
	}
else
	{ 
	echo "Oops, there has been an issue! try entering the ID number again";
	}

?>