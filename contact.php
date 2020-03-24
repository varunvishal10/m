
<?php

$Use_Name=$_POST['name'];
$Use_Email=$_POST['email'];
$Use_Mob=$_POST['phone'];
$Use_Car=$_POST['carnum'];

$ip="localhost";
$user="id10876328_reg";
$password="hello";
$db_name="id10876328_reg";

	$connection=mysqli_connect($ip,$user,$password,$db_name);

	
		$insert="INSERT INTO contact SET name='$Use_Name', email='$Use_Email', phone='$Use_Mob', carnum='$Use_Car'";
		$connection->query($insert);
		echo "Message Sent";

		?>