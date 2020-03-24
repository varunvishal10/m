<?php
{

	$userid=$_POST['email'];

	$ip="127.0.0.1";
	$user="root";
	$password="";
	$db_name="milestogo";
	

	$otp=rand(100,999);

	$ip="127.0.0.1";
	$user="root";
	$password="";
	$db_name="milestogo";
	$connection=mysqli_connect($ip,$user,$password,$db_name);

	


	$result=($connection->query("SELECT * FROM table4 WHERE  phone='$userid' or email='$userid' "));
	$value=mysqli_fetch_array($result);


	$id=$value['id'];

	$update="UPDATE table4 set otp='$otp' where id='$id'";

	$connection->query($update);

	echo"$otp";


}