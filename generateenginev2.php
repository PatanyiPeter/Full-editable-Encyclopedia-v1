<?php
	$filename = $_POST["filename"];
	$content = $_POST["content"];
	copy("first.html", "$filename.html");
	include("generateenginev2per2.php");
	include("generateenginev2per3.php");
	include("makethelink.php");
	include("index.php");
