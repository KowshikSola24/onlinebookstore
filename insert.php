<?php 
include('connect.php');
include('function.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
</head>
<body>
<?php
if (isset($_POST['insert'])) {
	$Genre=$_POST['genre'];
	$book=$_POST['bookname'];
	$price=$_POST['price'];
	$sql2="INSERT INTO books(name,genre,price) values('$book','$Genre','$price')";
	$result2=mysqli_query($connect,$sql2);

	//upload
	$file=$_FILES['file'];
	$fileName=$file['name'];
	$fileType=$file['type'];
	$fileTmp_name=$file['tmp_name'];
	$fileerror=$file['error'];
	$fileSize=$file['size'];

	$fileExt=explode('.',$fileName);
	$fileActualext=strtolower(end($fileExt));

	$extarray= array('jpg');
	if (in_array($fileActualext, $extarray)) {
		if ($fileerror===0) {
			$filenewname=$book.".".$fileActualext;
			$filedestination='C:/wamp64/www/first/uploads/'.$filenewname;
			move_uploaded_file($fileTmp_name, $filedestination);
			header("Location: /first/admin.php?upload=success");
		}
		else
		{
			echo "something did'nt go well";
		}
	}
	else
	{
		echo "file can't be uploaed";
	}
	}
else
{
	echo "Image not uploaed";
}	
?>
</body>
</html>