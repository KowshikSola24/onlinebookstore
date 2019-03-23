
<?php
if(isset($_POST['submitt']))
{
	include_once 'connect.php';
	$first=mysqli_real_escape_string($connect,$_POST['first']);
	$username=mysqli_real_escape_string($connect,$_POST['username']);
	$password=mysqli_real_escape_string($connect,$_POST['password']);
	$email=mysqli_real_escape_string($connect,$_POST['email']);

	if(empty($first)||empty($username)||empty($password)||empty($email))
	{
		header("Location: /first/signupadmin1.php?signup=empty");
		exit();
	}
	else
	{
		if(!preg_match("/^[a-zA-Z]*$/", $first))
		{
			header("Location: /first/signupadmin1.php?signup=invalidfirst");
			exit();
		}
		else
		{
			if (!filter_var($email,FILTER_VALIDATE_EMAIL))
			{
				header("Location: /first/signupadmin1.php?signup=email");
				exit();
			}
			else
			{
				$sql="SELECT * FROM admin WHERE username='$username'";
				$result=mysqli_query($connect,$sql);
				$row=mysqli_num_rows($result);
				if($row>0)
				{
					header("Location: /first/signupadmin1.php?signup=usernametakken");
					exit();
				}
				else
				{		
					//$pwdhashed=password_hash($password, PASSWORD_DEFAULT);
					$sql1="INSERT INTO admin(fname,username,password,email) values ('$first','$username','$password','$email');"; mysqli_query($connect, $sql1);
					header("Location: /first/signupadmin.php?signup=success");
					exit();
				}
			}
		}
	}
}
elseif (isset($_POST['loginedd'])) {
	header("Location: /first/adminlogin.php");
}
else
{
	header("Location: /first/signupadmin1.php");
	exit();
}
?>