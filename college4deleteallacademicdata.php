<?php 
session_start();
ob_start();
if(!isset($_SESSION["auname"]))
{
	header("location:college4login.php");
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
	include("myconn2.php");
	$delquery="delete from college4academicdata ";
	if($conn2->error)
	{
		die("Error:".$conn2->error);
	}
	if($conn2->query($delquery)===TRUE)
	{
		echo "<script> if(confirm('Deleted successfully')) window.location='college4archives.php';</script>";
	}
	else
	{
		echo "Error : " . $$delquery . "<br>" . $conn2->error;
	}	
?>

<?php 
	include("myconn3.php");
	$delquery="delete from college4academicdata";
	if($conn3->error)
	{
		die("Error:".$conn3->error);
	}
	if($conn3->query($delquery)===TRUE)
	{
		echo "<script> if(confirm('Deleted successfully')) window.location='college4archives.php';</script>";
	}
	else
	{
		echo "Error : " . $$delquery . "<br>" . $conn3->error;
	}	
?>
            </body>
</html>
