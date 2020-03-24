<?php

$Use_Name=$_POST['Use_Name'];
$Use_Email=$_POST['Use_Email'];
$Use_Mob=$_POST['Use_Mob'];
$Use_Pass=$_POST['Use_Pass'];
$Use_Repass=$_POST['Use_Repass'];
if ($Use_Pass==$Use_Repass)
{
	$ip="localhost";
	$user="	id9863625_abc";
	$password="vvmessi";
	$db_name="id9863625_mydb";

	$connection=mysqli_connect($ip,$user,$password,$db_name);

    	$insert="INSERT INTO signup SET name=$Use_Name, email=$Use_Email, phone=$Use_Mob, password=$Use_Pass";

		$connection->query($insert);

		echo "Signup Complete";
	
}
else

	echo "Password Mismatch";


?>