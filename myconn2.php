<?php 
	$servername2="localhost";
	$username2="root";
	$password2="";
	$database2="region2";
	
	$conn2 = new mysqli($servername2,$username2,$password2,$database2);
	if($conn2->connect_error)
	{
		die(" Connection failed ".$conn2->connect_error);
	}
?>