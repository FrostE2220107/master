<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The GF cookbook</title>
    </head>

<?php
 // link to web page https://mi-linux.wlv.ac.uk/~2220107/Y2/assignment_2/a2_menu.php
//Connect to server/database
$mysqli = mysqli_connect("localhost", "2220107", "Skylanders3", "db2220107");
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
} else {
echo "Connected to the database successfully.";
}
include 'a2_banner.php';
echo "this is the menu";
?>
</html>