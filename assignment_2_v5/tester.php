<?php
$sql=""SELECT name, room FROM staff"";
  $result=mysqli_query($sql);
  echo mysqli_num_rows($result);
?>