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
.input{
  width: 50%;
  border: 2px solid black;
  height: 25px;
  font-size: 25px;
}
.submit{
  width: 20%;
  background-color: black;
  border:none;
  height:auto;
  font-size: 150%;
  color: white;
  transition: opacity 0.5s;
}
.submit:hover{
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
  .submit{
    width: 70%;
  }
  .input{
    width: 90%;
    height: 50px;
  font-size: 50px;
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
	<center>
    <br>
    <h1 style="font-size: 300%;">Login Page</h1>
    <br>
    <br>
    <form action="logintotheadmin.php" id="loginpage" method="POST">
      <input class="input" type="type" name="username">
      <br>
      <br>
      <input class="input" type="password" name="password">
      <br>
      <br>
      <br>
      <input class="submit" type="submit" name="submit">
    </form>