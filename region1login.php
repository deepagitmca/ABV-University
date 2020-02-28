<?php 
session_start();
ob_start();
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
        
        <table width="1000" border="0" cellspacing="0" cellpadding="0" align="center">
         <tbody>
           <tr>
              <td height="140" bgcolor="#070707" align="left">  <?php include("header.php"); ?> </td>
            </tr>
            <tr>
              <td bgcolor="#6E6E6E"> <?php include("nav.php"); ?> </td>
           </tr>
            <tr bgcolor="#F8F8F8">
                <td colspan="2"> <p>&nbsp;</p>
                  <form id="form1" name="form1" method="post">
                  <p>&nbsp;</p>
                  <table width="400" border="0" align="center" cellpadding="10" cellspacing="2">
                    <tbody>
                      <tr>
                        <td colspan="2" bgcolor="#F9FFFB" style="text-align: center; font-size: 24px; font-weight: bold;">Belagavi Region</td>
                      </tr>
                      <tr>
                        <td colspan="2" bgcolor="#C4C7C5" style="text-align: center"> <h2>Admin Login Form </h2></td>
                        </tr>
                      <tr>
                        <td>Username</td>
                        <td> <input name="username" type="text" required="required" id="username"> </td>
                        </tr>
                      <tr>
                        <td>Password</td>
                        <td> <input name="password" type="password" required="required" id="password"> </td>
                        </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td><input name="submit" type="submit" id="submit" value="Submit"></td>
                        </tr>
                      
                      </tbody>
                    </table>
                  <p>&nbsp;</p>
                </form>
                  <p>&nbsp;</p></td>
            </tr>
           <tr>
               <td bgcolor="#070707" align="center" height="2"> <?php include("footer.php"); ?></td>
            </tr>
        </tbody>
      </table>
    </body>
</html>

<?php 
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	//establish connection
	include ("myconn1.php");
	
	//accept the values from user form
	$uname=$_REQUEST["username"];
	$pass=$_REQUEST["password"];
	
	$sql1 = "SELECT * from region1admin where username = '$uname' and password = '$pass'";
	$result1 = $conn1->query($sql1);
	if($result1->num_rows == 1)
	{
		  // create a session object name uname and assign username to it
		  $rcode = $_REQUEST["rcode"];
		  $rname = $_REQUEST["rname"];
		  $_SESSION["auname"]=$rname;
		 echo "<script> if(confirm('Login Successfull')) window.location='region1admindashboard.php'; </script>";
		 // header("location:buyerdashboard.php");
	}
	else
	{
		echo "<script> alert('Invalid username or password')</script>";
	}
}

?>