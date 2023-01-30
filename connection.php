<?php 
	
	$con = mysqli_connect('localhost','root','','login');

	if(!$con)
	{
		echo 'please check the database connection';
	}
 ?>