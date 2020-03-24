<?php

$Use_Name=$_POST['username'];
$Use_Email=$_POST['email'];
$Use_Mob=$_POST['phone'];
$Use_Pass=$_POST['password'];
$Use_Repass=$_POST['repassword'];
if ($password==$repassword)
{
	$ip="127.0.0.1";
	$user="root";
	$password="";
	$db_name="milestogo";

	$connection=mysqli_connect($ip,$user,$password,$db_name);

	$select="SELECT * FROM signup where email='$email' or phone='$phone'";
	$result=($connection->query($select));
	$num=mysqli_num_rows($result);
	if ($num>0) 
		echo "User Already Exists";
	else{
    	$insert="INSERT INTO signup SET name='$username', email='$email', phone='$phone', password='$password'";

		$connection->query($insert);

		echo "Signup Complete";
	}
}
else

	echo "Password Mismatch";


?>