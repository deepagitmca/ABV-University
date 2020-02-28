<?php 
	$servername1="localhost";
	$username1="root";
	$password1="";
	$database1="university";
	
	$conn3 = new mysqli($servername1,$username1,$password1,$database1);
	if($conn3->connect_error)
	{
		die(" Connection failed ".$conn3->connect_error);	
	}
?>