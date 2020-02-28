<?php 
	$servername1="localhost";
	$username1="root";
	$password1="";
	$database1="region1";
	
	$conn1 = new mysqli($servername1,$username1,$password1);
	if($conn1->connect_error)
	{
		die(" Connection failed ".$conn1->connect_error);
		alert(" Connection to the region database failed..... ! Wait for some time we are connecting you to university database ");
		$conn1.close();
		include("myconn5.php");
	}
	//else
	//{
		//include("myconn3.php");
		//alert(" Connection to the region database failed..... ! Wait for some time we are connecting you to university database ");
		
	//}
	else
	{
		//die(" Connection failed ".$conn1->connect_error);
		echo "<script> alert('Connection to the region database failed..... ! Wait for some time we are connecting you to university database'); </script>"; 
		include("myconn5.php");
	}
?>