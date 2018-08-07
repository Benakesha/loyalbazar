<?php
	
	$host='localhost';
	$user='root';
	$password='BNag18@123';
	$dbName='loyal_db';

	$conn=new mysqli($host,$user,$password,$dbName);
	if(mysqli_connect_errno()){
		echo "Failed to connect MySQL database.".mysqli_connect_error();

	}
?>
