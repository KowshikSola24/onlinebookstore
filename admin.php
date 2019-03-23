<?php 
include('function.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
<style>
	.abc{
		font-size: 18px;
		margin-left:220px;
	}
	.abcd
	{
		
		font-size: 18px;
	}
</style>
</head>
<body background="/first/images/download.jpg">
	<br><br><br><br><br><br><br><br><br><br>
<form  align="center" method="POST" action="insert.php" enctype="multipart/form-data">
	<a style="color: white" type="x"><u><b>ADMIN</b></u></a><br><br>
	<input type="text" class="abcd" name="gerne" placeholder="Enter gerne"><br><br>
	<input type="text" class="abcd" name="bookname" placeholder="Enter bookname"><br><br>
	<input type="text" class="abcd" name="price" placeholder="Enter price"><br><br>
	<input type="file" class="abc" name="file" ><br><br>
	<button type="submit" name="insert" class="abcd" >Update Database</button>
</form><br>
<form align="center" method="POST" action="adminlogout.php" enctype="multipart/form-data">
<button  type="submit" name="adminlogout" class="abcd" id="c">Logout</button>
</form>
</body>
</html>