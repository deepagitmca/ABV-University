<?php 
session_start();
ob_start();
if(!isset($_SESSION["auname"]))
{
	header("location:college1login.php");
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
        
        <table width="1000" border="0" cellspacing="0" cellpadding="0" align="center">
         <tbody>
            <tr>
              <td height="140" bgcolor="#070707" align="left">  <?php include("header.php"); ?> </td>
            </tr>
            <tr>
              <td bgcolor="#6E6E6E"> <?php include("college1navmenu.php"); ?> </td>
           </tr>
            <tr bgcolor="#F8F8F8">
                <td bgcolor="#FFFFFF">
             <table width="1000" border="0" cellspacing="0" cellpadding="10">
              <tbody>
                <tr>
                  <td> <h1 align="center"> Welcome <?php echo  $_SESSION['auname']; ?>  </h1>
                  <p align="center">&nbsp;</p>
                  <p align="center">&nbsp;</p>
                  <p align="center">&nbsp;</p>
                  <p align="center">&nbsp;</p>
                  <p align="center">&nbsp;</p>
                  <p align="center">&nbsp;</p>
                  <p align="center">&nbsp;</p>
                  <p align="center">&nbsp;</p>
                  <p align="center">&nbsp;</p>
                  <p align="center">&nbsp;</p></td>
                </tr>
              	</tbody>
              </table></td>
            </tr>
            <tr>
               <td bgcolor="#070707" align="center" height="2"> <?php include("footer.php"); ?></td>
            </tr>
        </tbody>
      </table>
    </body>
</html>
