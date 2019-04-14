<?php
	$fl = "<center><a href='$filename.html'><div class='linktothepage' style='color:black;width: 47%;background-color:#e2e2e2;font-size:200%;font-family: 'Anton', sans-serif;
	box-shadow:0px 0px 10px;font-size:200%'>$filename</div></a><br></center>";
	$file = fopen("index.php", "a");
	fwrite($file,"$fl" );
	fclose($file);

 ?>
