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
<form method="POST">
  <input type="text" name="address" placeholder="Enter address">
  <input type="text" name="phone" placeholder="Enter phone number">
  <button type="submit" name="submite">Place Order</button>
</form>
<?php
session_start();
include 'connect.php';
if (isset($_POST['submite'])) {
  $address=$_POST['address'];
  $phone=$_POST['phone'];
  if (!empty($address) and !empty($phone)) 
  {
  $sql1="SELECT * from cart where customerid=".$_SESSION['u_id']."";
  $result1=mysqli_query($connect,$sql1);
  while ($pro=mysqli_fetch_array($result1)) {
    $book=$pro['name'];
    $price=$pro['price'];
  $sql="INSERT into oders(name,address,phone,book,price) values('".$_SESSION['u_fname']."','$address','$phone','$book','$price')";mysqli_query($connect,$sql);
  }
echo "Order Placed Successfully";
// the message
$msg = "Order Placed Successfully";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail("".$_SESSION['u_email']."","My subject",$msg);
}
  else
  {
    echo "Enter the details correctly";
  }
}
?>  
</body>
</html>