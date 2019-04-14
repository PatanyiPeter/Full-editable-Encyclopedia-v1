<?php 
	$bcontent = "<center><div></h1><p>$content</p>";
	$contentw = fopen("$filename.html", "a");
	fwrite($contentw, "$bcontent");
	fclose($contentw);
 ?>