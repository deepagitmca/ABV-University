<?php 
session_start();
ob_start();
if(!isset($_SESSION["auname"]))
{
	header("location:universitylogin.php");
}

?><!DOCTYPE html>
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
              <td bgcolor="#6E6E6E"> <?php include("universitynav.php"); ?> </td>
           </tr>
            <tr bgcolor="#F8F8F8">
                <td colspan="2">  <h1 align="center"> <p>Region data</p> 
                  </h1>
                  <table width="300" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tbody>
                      <tr>
                        <th width="142" height="38" bgcolor="#C3C3C3" style="text-align: center" scope="col">Region Name</th>
                        <th width="158" bgcolor="#C3C3C3" style="text-align: center" scope="col">Region data</th>
                      </tr>
                      <tr>
                        <td height="35" bgcolor="#FFFFFF" style="text-align: center">Belagavi region</td>
                        <td bgcolor="#FFFFFF" style="text-align: center"><a href="universityadminregion1collegedata.php">view</a></td>
                      </tr>
                      <tr>
                        <td height="35" bgcolor="#FFFFFF" style="text-align: center">Bangalore region</td>
                        <td bgcolor="#FFFFFF" style="text-align: center"><a href="universityadminregion2collegedata.php">view</a></td>
                      </tr>
                    </tbody>
                  </table>
                  <p>&nbsp;</p>
              </td>
            </tr>
            <tr>
               <td bgcolor="#070707" align="center" height="2"> <?php include("footer.php"); ?></td>
            </tr>
        </tbody>
      </table>
    </body>
</html>
