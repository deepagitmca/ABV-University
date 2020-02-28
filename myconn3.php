<?php 
	$servername3="localhost";
	$username3="root";
	$password3="";
	$database3="university";
	
	$conn3 = new mysqli($servername3,$username3,$password3,$database3);
	if($conn3->connect_error)
	{
		die(" Connection failed ".$conn3->connect_error);
	}
?>