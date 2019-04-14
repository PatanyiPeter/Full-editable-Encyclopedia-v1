<?php 
$title = fopen("$filename.html", "a");
	fwrite($title, "$filename");
	fclose($title);
 ?>