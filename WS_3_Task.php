<?php
	//connect to the other file
   $filename = "W_3_task_name.data";
   $fp = @fopen($filename, "rb") or die("Couldn't open file"); 
   $data = fread($fp, filesize($filename)); 
   while(!feof($fp)) { 
     $data .= fgets($fp, 1024); 
   } 
   fclose($fp); 

   $values = explode("\n", $data); 
   asort ($values);
	foreach ($values as $key => $val) {
	// echo "$key = $val<br>"; if I want to display it's original position in the index
	echo "$val<br>";
}
?>