<!DOCTYPE html>
<html>
<head>
	<title>encyclopedia</title>
<link href="https://fonts.googleapis.com/css?family=Anton|Permanent+Marker" rel="stylesheet">

    <meta charset="utf-8">

</head>
<style type="text/css">
	body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}
.create-new-btn{
  width: 50%;
  background-color: black;
  border-radius: 10px;
  transition: opacity 0.7s;
}
.create-new-btn a{
  font-size: 200%;
  text-decoration: none;
  color: white;
  display: block;
}
.create-new-btn:hover{
  opacity: 0.7;
}


.topnav {
  overflow: hidden;
  background-color: black;
}
.logo{
	font-family: 'Permanent Marker', cursive;
	font-size: 100%;
}
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  transition: background-color 0.5s;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
</style>
<body>
	<div class="topnav" id="myTopnav">
  <a href="#home" class="logo">someone's encyclopedia</a>
  <a href="#contact">Github</a>
  <a href="login.php">Login</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars">menu</i>
  </a>
</div>

<div style="padding-left:16px">
</div>

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
	<br>
	<br>
<center>
  <div class="create-new-btn"><a href="admin.php">new</a></div>
</center>