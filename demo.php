<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title> Welcome </title>
        <link rel="stylesheet" type="text/css" href="nav2.css"/>
         <link rel="stylesheet" href="style.css">
         
    </head>
   
    <body class="body">
        
        <table width="1000" border="0" cellspacing="0" cellpadding="0" align="center">
         <tbody>
            <tr>
                <td width="180" height="180" bgcolor="#DEF8F4"> <img src="abv.jpg" alt="ABV" width="180" height="180"> </td>
                <td align="center" bgcolor="#DEF8F4"> <font size="15"> ABV University  </font> </td>
            </tr>
            <tr>
                <td colspan="2" bgcolor="#C8D9EB"> <?php include("nav.php"); ?> </td>
            </tr>
            <tr bgcolor="#F8F8F8">
                <td colspan="2"> <p>&nbsp;</p> <form name="form1" method="post"> <p> name : <input name="na" type="text"></p>
      <p>&nbsp;</p>
      <p> <input type="submit" name="submit"></p></td>
            </tr></form>
            <tr>
                <td colspan="2" bgcolor="#9BC6F3" align="center"> All rights protected under ABV University @ 2019 </td>
            </tr>
        </tbody>
      </table>
    </body>
</html>

<?php 
	
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$fullname=$_REQUEST["na"];	
		include("mycon.php");
			    
				$insertquery = "INSERT INTO t1(name) values('$fullname')";
				   
				if($conn->query($insertquery)===TRUE)
				{
					echo "<script> if(confirm('Registration successful')) </script>";
				}
				else
				{
					echo "Error : " . $sql . "<br>" . $conn->error;
				}
				$conn->close();
				include("mycon1.php");
				$insertquery1 = "INSERT INTO t2(name) values('$fullname')";
				   
				if($conn1->query($insertquery1)===TRUE)
				{
					echo "<script> if(confirm('Registration successful')) </script>";
				}
				else
				{
					#echo "Error : " . $sql1 . "<br>" . $conn1->error;
				}
		
		
	
	$conn1->close();
	}
?>

