<?php
$ip="localhost";
	$user="	id9863625_abc";
	$password="varun";
	$db_name="id9863625_mydb";

    $connection=mysqli_connect($ip,$user,$password,$db_name);
// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";
?>