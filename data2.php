<?php


$Use_Id=$_POST['Use_Id'];

$Use_Pass=$_POST['Use_Pass'];



   $ip="localhost";
	$user="	id9863625_abc";
	$password="varun";
	$db_name="id9863625_mydb";
	$connection=mysqli_connect($ip,$user,$password,$db_name);
	$select="SELECT * FROM signup where email=$Use_Id and password=$Use_Pass or phone=$Use_Id and password=$Use_Pass";
	$result=($connection->query($select));
	$num=mysqli_num_rows($result);
	if ($num>0) {
		echo "Login Successful";
	}
	else
		echo "Wrong credentials";

?>