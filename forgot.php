<?php include('server.php') ?>
<?php
$email=$_POST['email'];
$otp=rand(100,999);

   $ip="localhost";
	$user="	id9863625_abc";
	$password="varun";
	$db_name="id9863625_mydb";
	$connection=mysqli_connect($ip,$user,$password,$db_name);

$select="SELECT * FROM users where email='$email'";

$result=($connection->query($select));
$value=mysqli_fetch_array($result);
$id=$value['id'];
$update="UPDATE users set otp='$otp' where id='$id'";
$connection->query($update);

$to=$email;
$subject="OTP";
$txt="Your OTP is" $otp;
$headers="From: varunvishal10@gmail.com"."r\n";

mail($to,$subject,$txt,$headers);


?>