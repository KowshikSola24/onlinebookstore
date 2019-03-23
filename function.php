<?php 
include('connect.php');
function products()
{
	if(!isset($_GET['add_cart']))
	{
	global $connect;
	$sql="SELECT DISTINCT genre FROM books";
	$run=mysqli_query($connect,$sql);
	while($products=mysqli_fetch_array($run))
	{
		$name=$products['genre'];
		echo "<div>";
		echo "<div class='col-md-4' align='center'>";
		echo "<img src='uploads/".$name.".jpg' width='300' height='300' class='img'>";
		echo "<br><br>";
		echo "<a href='home.php?add_cart=$name'><button type='submit' name='insertt' class='button'>".$name."</button><br><br>";
		echo "</div>";
		echo "</div>";
      }
  }
}


function books()
{
	global $connect;
	if(isset($_GET['add_cart']))
	{
	$name=$_GET['add_cart'];
	$sql="SELECT * FROM books where genre='$name'";
	$run=mysqli_query($connect,$sql);
	while($products=mysqli_fetch_array($run))
	{
		$id=$products['id'];
		$name=$products['name'];
		echo "<div class=col-md-4 align=center>";
		echo "<img src='uploads/".$name.".jpg' width='300' height='300'>";
		echo "<br><br>";
		echo "<a href='cart.php?cart=$id'><button type='submit' name='insert' class='button'>Add to cart</button><br><br>";
		echo "</div>";
	}
}

}

function cart()
{
	global $connect;
	if(isset($_GET['cart']))
{
	$id=$_GET['cart'];
	$sql="SELECT * from books where id='$id'";
	$run=mysqli_query($connect,$sql);
	while($products=mysqli_fetch_array($run))
	{
		$name=$products['name'];
		$price=$products['price'];
		$customer=$_SESSION['u_id'];
		$sql1="INSERT into cart(name,price,customerid) values('$name','$price','$customer')";mysqli_query($connect,$sql1);
		
	}
	header("Location:/first/home.php");
}
else
{
	echo "not set..............................";
}
}


?>