<?php
session_start();
include('function.php');
include_once'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Online Book Shop</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    .button
    {
      background: black;
  color: white;
  padding: 10px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 10px 70px;
  cursor: pointer;
  border: 2px solid #555555;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}

.button:hover {
  background-color: white;
  color: black;
}
.img{
  border: 2px solid white;
 border-radius: 8px;
}
  </style>
</head>
<body background="/first/images/download.jpg">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="index.php">OBS</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="home.php"><span class="glyphicon glyphicon-user"></span>Home</a></li>
        <li><a href="cartdisplay.php"><span class="glyphicon glyphicon-user"></span>Cart</a></li>
        <li><a href="order.php"><span class="glyphicon glyphicon-user"></span>Your orders</a></li>
      </ul>
    </div>
  </div>
</nav>
<form action='logout.php' method='POST' align='right'>
<button type='submit' name='logout' class="button">logout</button>
</form><br>
<?php
echo "<div class='row-text-centre'>";
books();
products();
echo "</div>";
?>
</body>
</html>