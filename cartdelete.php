<?php
session_start();
include('connect.php');
if (isset($_GET['delete'])) {
	$name1=$_GET['delete'];
	$sql="DELETE from cart where name='$name1' and customerid=".$_SESSION['u_id']."";
	$result=mysqli_query($connect, $sql);
  header("Location: /first/cartdisplay.php");
}
else
{
	echo "string";
}
?>
