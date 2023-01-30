<?php 
	
	require_once('connection.php');

	if(isset($_POST['btn-save']))
	{
		$UserName = mysqli_real_escape_string ($con,$_POST['UserName']);
		$Email = mysqli_real_escape_string ($con,$_POST['Email']);
		$Password = mysqli_real_escape_string ($con,$_POST['password']);
		$Cpassword = mysqli_real_escape_string ($con,$_POST['cpass']);

		if(empty($UserName) || empty($Email) || empty($Password) || empty($Cpassword))
		{
			echo 'please fill in the blanks';
		}
		

	

		if($Password!=$Cpassword)
		{
			echo 'Password incorrect';
		}
		else
		{
			$pass = md5($Password);
			$sql = "insert into users (UName,Email,Password) values ('$UserName','$Email','$Password')";
			$result =mysqli_query($con,$sql);

			if($result)
			{
				echo 'Your result in saved in database';
			}
			
		}

	}

 ?>