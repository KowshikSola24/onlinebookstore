<!DOCTYPE html>
<html>
<head>
	<title>Sign up as Admin</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style> 
  .button {
  background-color: black;
  border: none;
  color: white;
  padding: 15px 32px;
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
      <a class="navbar-brand" href="index.php">OBS </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="signupadmin1.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
<form action="signupadmin.php" method="POST">
	<input type="text" name="first" placeholder="First name"><br>
	<input type="text" name="username" placeholder="Username"><br>
	<input type="password" name="password" placeholder="Password"><br>
	<input type="text" name="email" placeholder="Email"><br>
	<button type="submit" name="submitt" class="button">signup</button>
	<button class="button" type="submit" name="loginedd">login</button>
</form>
</body>
</html>