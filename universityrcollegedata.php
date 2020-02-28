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
                <td colspan="2">  <h1 align="center"> <p>Colleges data<br>
                </p>
                </h1>
                  <table width="850" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tbody>
                      <tr style="text-align: center">
                        <th width="31" height="35" bgcolor="#B0AFAF" style="text-align: center" scope="col"> sl.no</th>
                        <th width="89" bgcolor="#B0AFAF" style="text-align: center" scope="col"> Code </th>
                        <th width="340" bgcolor="#B0AFAF" style="text-align: center" scope="col"> Name of the College </th>
                        <th width="89" bgcolor="#B0AFAF" style="text-align: center" scope="col">Regions</th>
                        <th width="89" bgcolor="#B0AFAF" style="text-align: center" scope="col">Student data</th>
                        <th width="89" bgcolor="#B0AFAF" style="text-align: center" scope="col">Academic data</th>
                      </tr>
                      <tr>
                        <th height="37" style="text-align: center" scope="row"> 1 </th>
                        <td style="text-align: center"> GI </td>
                        <td style="text-align: center"><a href="http://www.git.edu/" style="font-weight: normal"> Gogte Institute of Technology </a></td>
                        <td style="text-align: center">Belagavi</td>
                        <td style="text-align: center"><a href="universityadmin1collegedata.php">view</a></td>
                        <td style="text-align: center"><a href="universityadmin1academicdata.php">view</a></td>
                      </tr>
                      <tr>
                        <th height="38" style="text-align: center" scope="row"> 2 </th>
                        <td style="text-align: center"> JI </td>
                        <td style="text-align: center"><a href="https://www.jce.ac.in/"> Jain College of Engineering </a></td>
                        <td style="text-align: center">Belagavi</td>
                        <td style="text-align: center"><a href="universityadmin2collegedata.php">view</a></td>
                        <td style="text-align: center"><a href="universityadmin2academicdata.php">view</a></td>
                      </tr>
                      <tr>
                        <th height="37" style="text-align: center" scope="row"> 3 </th>
                        <td style="text-align: center">RV</td>
                        <td style="text-align: center"><a href="https://rvce.edu.in/"> R.V College of Engineering </a></td>
                        <td style="text-align: center">Bengaluru</td>
                        <td style="text-align: center"><a href="universityadmin3collegedata.php">view</a></td>
                        <td style="text-align: center"><a href="universityadmin3academicdata.php">view</a></td>
                      </tr>
                      <tr>
                        <th height="41" style="text-align: center" scope="row"> 4 </th>
                        <td style="text-align: center">JB</td>
                        <td style="text-align: center"><a href="https://sjbit.edu.in/"> SJB Institute of Technology </a></td>
                        <td style="text-align: center">Bengaluru</td>
                        <td style="text-align: center"><a href="universityadmin4collegedata.php">view</a></td>
                        <td style="text-align: center"><a href="universityadmin4academicdata.php">view</a></td>
                      </tr>
                    </tbody>
                  </table>
                  <h1 align="center">
                    <p>&nbsp; </p> 
                  </h1>
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
