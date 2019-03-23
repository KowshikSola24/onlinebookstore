<?php
session_start();
include_once 'connect.php';
if(isset($_POST['logind']))
{
$user=mysqli_real_escape_string($connect,$_POST['unamed']);
$password=mysqli_real_escape_string($connect,$_POST['pwdd']);
if(empty($user)||empty($password))
{
	header("Location: /first/adminlogin.php?signin=empty");
	exit();
}
else
{
$sql="SELECT * from admin where username='$user' and password='$password'";
$result=mysqli_query($connect,$sql);
$row=mysqli_fetch_assoc($result);
if(mysqli_num_rows($result)<1)
{
	header("Location: /first/adminlogin.php?signin=error");
	exit();
}
else
{
	$_SESSION['u_id']=$row['id'];
	$_SESSION['u_fname']=$row['fname'];
	$_SESSION['u_name']=$row['username'];
	$_SESSION['u_email']=$row['email'];
	$sql3="CREATE TABLE ".$_SESSION['u_fname']."(name varchar(20), price int(10), UNIQUE(name))";mysqli_query($connect,$sql3);
	header("Location: /first/admin.php?signin=success");
	exit();
}
}
}?>
