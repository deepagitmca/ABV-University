<?php 
session_start();
ob_start();
if(!isset($_SESSION["auname"]))
{
	header("location:universitylogin.php");
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title> Welcome </title>
        <link rel="stylesheet" type="text/css" href="nav2.css"/>
         <link rel="stylesheet" href="style.css">
         
    </head>
   
    <body class="body">
        <?php 
	
		include("myconn3.php");
		$cname=$_REQUEST["cname"];
		$email1 = $_REQUEST["email"];
		$sql = "update newcollege set status='approved' where collegename='$cname'";
		$result = $conn3->query($sql);
		if($conn3->error)
		{
			die($conn3->error);
		}
		else
		{		
				$sql1="SELECT from newcollege where collegename='$cname'";
				$result1=$conn3->query($sql1);
				if($result1->num_rows > 0 )
				{
					while($row=$result1->fetch_assoc())
					{
						$colname=$row["collegename"];		 
					}
				}
				$to = $email1;
				$subject = 'Registration of college Approval Status';
				$msg = "Dear".$fname." we are happy to inform you that your request for registration of".$cname." college under ABV university has successfully approved. Will soonly provide you further details ";
				$message = wordwrap($msg,70);
				$headers = "From: deepa.kulkarni0607@gmail.com\r\n";
				
				if (mail($to, $subject, $message, $headers))
				{
				   echo "<script> alert('Approval Status Sent to the college')</script>";
				} 
				else
			    {
				   echo "<script> alert('Error Sending Email')</script>";
				}
				header("location:universityadmindashboard.php?msg= college ='$cname' approved successfully");
		}
		
	?>
    </body>
</html>
