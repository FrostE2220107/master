<!DOCTYPE html>
<html>
<style>
table, th, td {
  border:1px solid black;
}
</style>
<body>
<?php

//Connect to server/database
$mysqli = mysqli_connect("localhost", "2220107", "Skylanders3", "db2220107");
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
} else {
echo "Connected to the database successfully.";
}

// Run SQL query
$res = mysqli_query($mysqli, "SELECT Films, Duration FROM ws_4");

// Are there any errors in my SQL statement?
if(!$res) {
  print("MySQL error: " . mysqli_error($mysqli));
  exit;
}

// How many rows were returned?
echo("<p>" . mysqli_num_rows($res) . " record(s) were returned...</p>");

// Loop through resultset and display each field's value
//while($row = mysqli_fetch_assoc($res)) {
  //echo $row['Films']. " - ". $row['Duration'] ."<br>";
//}
// display in HTML table
?>
<table style="width:100%">
  <tr>
    <th>Films</th>
    <th>Duration</th>
  </tr>
  <?php while($row = mysqli_fetch_assoc($res)):?>
	  <tr>
		  <td><?php echo $row['Films'].''; ?></td>
		  <td><?php echo $row['Duration'] .''; ?></td>
	  </tr>
	  <?php endwhile;?>
</table>

</body>
</html>