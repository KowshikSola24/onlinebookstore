<!DOCTYPE html>
<html>
<head>
	<title>Sci-Fic</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
        <li><a href="cart.php"><span class="glyphicon glyphicon-user"></span>Cart</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="row-text-center">
  <div class="col-md-4">
    <img src="/first/images/ece.jpg" alt="Luis Fonsi" width="300" height="236">
    action<br><br>
    <a href="adventure.php" class="btn btn-info" role="button">
    Action And Adventure</a>
  </div>
  <div class="col-md-4">
    <img src="/first/images/ece.jpg"  alt="Luis Fonsi" width="300" height="236">
    history<br><br>
    <a href="history.php" class="btn btn-info" role="button">
      History</a><br><br>
  </div>
  <div class="col-md-4">
    <img src="/first/images/ece.jpg"  alt="Luis Fonsi" width="300" height="236">
    science fic<br><br>
    <a href="scific.php" class="btn btn-info" role="button">Sci-Fic</a><br><br>
  </div>
</div>
<div class="row-text-center">
  <div class="col-md-4">
    <img src="/first/images/ece.jpg"  alt="Luis Fonsi" width="300" height="236">
    comic<br><br>
    <a href="comic.php" class="btn btn-info" role="button">comic</a><br><br>
  </div>
  <div class="col-md-4">
    <img src="/first/images/ece.jpg"  alt="Luis Fonsi" width="300" height="236">
    mistery<br><br>
    <a href="mistery.php" class="btn btn-info" role="button">Mistery</a><br><br>
  </div>
  <div class="col-md-4">
    <img src="/first/images/ece.jpg"  alt="Luis Fonsi" width="300" height="236">
    textbooks<br><br>
    <a href="textbooks.php" class="btn btn-info" role="button">TextBooks</a><br><br>
  </div>
</div>
<div class="col-md-6"></div>
<div class="col-md-6">
<form action="logout.php" method="POST">
  <button type="submit" name="logout">logout</button>
  </form>
</div>
</body>
</html>