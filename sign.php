<?php
	$Use_Name=$_POST['Use_Name'];
$Use_Email=$_POST['Use_Email'];
$Use_Mob=$_POST['Use_Mob'];
$Use_Pass=$_POST['Use_Pass'];
$Use_Repass=$_POST['Use_Repass'];
	// Database Connection code
	$servername = "localhost";
	$username = "id9863625_abc";
	$password = "vvmessi";
	$dbname = "id9863625_mydb";
	$con = mysqli_connect($servername,$username,$password,$dbname);
	if(!$con)
	{
		die("Error : ".mysqli_connect_error());
	}
	if($Use_Pass == $Use_Repass)
	{
		$sql = "INSERT INTO 'signup' ('name', 'email', 'phone', 'password') VALUES('$Use_Name','$Use_Email','$Use_Mob','$Use_Pass');";
		if(mysqli_query($con,$sql))
		{
			echo "Registration Done Successfully...";
		}
		else
		{
			echo "Something went Wrong...";
		}
	}else
	{
		echo "Password Not matched....";
	}
	
	mysqli_close($con);
?>