<?php include('function.php');
session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>Online Book Shop</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="home.php">OBS </a>
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

<div class="container-fluid">
  <h2>Cart</h2>                                                                                      
  <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>Remove Book</th>
        <th>Discription</th>
        <th>Price</th>
      </tr>
    </thead>
    <tbody>
    <?php 
     cart();
    # header("Location : /first/home.php");
    ?>
    </tbody>
  </table>
  </div>
</div>

<form action="logout.php" method="POST">
  <button type="submit" name="logout">logout</button>
</form>
</body>
</html>