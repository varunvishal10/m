<?php
$Usr_id=$_POST['username'];
$Usr_pass=$_POST['password'];

	$ip="localhost";
	$user="	id9863625_abc";
	$password="varun";
	$db_name="id9863625_mydb";

    $connection=mysqli_connect($ip,$user,$password,$db_name);

	$select="SELECT * FROM table4 where email='$Usr_id' and password='$Usr_pass' or mobile='$Usr_id' and password='$Usr_pass'";
	$result=($connection->query($select));
	$num=mysqli_num_rows($result);
	if ($num>0) 
		echo "login successful";
	else
		echo "wrong credentials";
	

	?>
