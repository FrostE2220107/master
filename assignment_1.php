<!DOCTYPE html>
<html>
<style>
table, th, td {
  border:1px solid black;
}
</style>
<body>
<?php
 // link to web page https://mi-linux.wlv.ac.uk/~2220107/Y2/assignment_1.php
//Connect to server/database
$mysqli = mysqli_connect("localhost", "2220107", "Skylanders3", "db2220107");
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
} else {
echo "Connected to the database successfully.";
}

// Run SQL query
$res = mysqli_query($mysqli, "SELECT Game_id, Game_name, Genre, Price, Date_of_Release FROM game_data");

// Are there any errors in my SQL statement?
if(!$res) {
  print("MySQL error: " . mysqli_error($mysqli));
  exit;
}

// How many rows were returned?
echo("<p>" . mysqli_num_rows($res) . " record(s) were returned...</p>");


// display in HTML table
?>
<table style="width:100%">
  <tr>
    <th>Game_id</th>
    <th>Game_name</th>
	<th>Genre</th>
    <th>Price</th>
	<th>Date of Release</th>
  </tr>
  <?php while($row = mysqli_fetch_assoc($res)):?>
	  <tr>
		  <td><?php echo $row['Game_id'].''; ?></td>
		  <td><?php echo $row['Game_name'] .''; ?></td>
		  <td><?php echo $row['Genre'] .''; ?></td>
		  <td><?php echo $row['Price'] .''; ?></td>
		  <td><?php echo $row['Date_of_Release'] .''; ?></td>
	  </tr>
	  <?php endwhile;?>
</table>

</body>
</html>