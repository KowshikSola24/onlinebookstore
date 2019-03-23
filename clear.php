<?php
include 'connect.php';
session_start();
$sql="DELETE from oders where name='".$_SESSION['u_fname']."'";mysqli_query($connect,$sql);
header("Location: /first/order.php");
?>