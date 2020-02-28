<?php 
session_start();
ob_start();
if(!isset($_SESSION["auname"]))
{
	header("location:college2login.php");
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
	include("myconn1.php");
	$date1=$_REQUEST["date"];
	$sdata1=$_REQUEST["sdata"];
	$adata1=$_REQUEST["adata"];
	$edata1=$_REQUEST["edata"];
	$delquery="delete from college2data  where date = '$date1'";
	if($conn1->error)
	{
		die("Error:".$conn1->error);
	}
	if($conn1->query($delquery)===TRUE)
	{
		echo "<script> if(confirm('Deleted successfully')) window.location='college2archives.php';</script>";
	}
	else
	{
		echo "Error : " . $$delquery . "<br>" . $conn1->error;
	}	
?>
<?php 
	include("myconn3.php");
	$date1=$_REQUEST["date"];
	$sdata1=$_REQUEST["sdata"];
	$adata1=$_REQUEST["adata"];
	$edata1=$_REQUEST["edata"];
	$delquery="delete from college2data  where date = '$date1'";
	if($conn3->error)
	{
		die("Error:".$conn3->error);
	}
	if($conn3->query($delquery)===TRUE)
	{
		echo "<script> if(confirm('Deleted successfully')) window.location='college2archives.php';</script>";
	}
	else
	{
		echo "Error : " . $$delquery . "<br>" . $conn3->error;
	}	
?>

            </body>
</html>
