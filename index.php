<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Registration Form</title>
		<link rel="stylesheet" href="style.css">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
		
		</style>
	</head>
	<body>
		
		<div class="signup-from">
			<img src="user.png" alt="">
			<form action="process.php" method="post" accept-charset="utf-8">
				<input type="text" placeholder="User Name" class="text" name="UserName">
				<input type="email" placeholder="Email" class="text" name="Email">
				<input type="password" placeholder="Password" class="text" name="password">
				<input type="password" placeholder="Confirm Password" class="text" name="cpass">
				<input type="submit" value="create a account" class="btn" name="btn-save">
				<a href="#">Already Have a Account</a>
			</form>
		</div>
	</body>
</html>