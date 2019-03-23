<?php
session_id();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<title>Sign up</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style> 
  .button {
  background: white;
  border: none;
  color: black;
  padding: 10px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 20px;
  cursor: pointer;
}
input[type=text] {
  width: 30%;
  height: 100%;
  padding: 12px 20px;
  margin: 8px 20px;
  box-sizing: border-box;
  border: none;
  background-color: white;
  color: black;
}
input[type=password] {
  width: 30%;
  height: 100%;
  padding: 12px 20px;
  margin: 8px 20px;
  box-sizing: border-box;
  border: none;
  background-color: white;
  color: black;
}</style>
</head>
	<body style="background-color:#062F4F" background="/first/images/download.jpg">
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="index.php">OBS </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="signup1.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
<form action="signin.php" method="POST" align="center">
	<input type="text" name="uname" placeholder="username"><br>
	<input type="password" name="pwd" placeholder="password"><br>
	<button type="submit" name="login" class="button">signin</button>
</form>
</body>
</html>