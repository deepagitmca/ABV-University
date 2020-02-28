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
                  <p style="font-size: 24px; font-weight: bold; text-align: center;">List of colleges under this Institution</p>
      <table width="839" border="0" align="center" cellpadding="0" cellspacing="0">

  <tbody>
    <tr style="text-align: center">
      <th width="31" bgcolor="#B0AFAF" style="text-align: center" scope="col"> sl.no</th>
      <th width="89" bgcolor="#B0AFAF" style="text-align: center" scope="col"> Code  </th>
      <th width="340" bgcolor="#B0AFAF" style="text-align: center" scope="col"> Name of the College </th>
      <th width="52" bgcolor="#B0AFAF" style="text-align: center" scope="col">STD Code</th>
      <th width="89" bgcolor="#B0AFAF" style="text-align: center" scope="col"> Phone </th>
      <th width="89" bgcolor="#B0AFAF" style="text-align: center" scope="col">Regions</th>
      <th width="89" bgcolor="#B0AFAF" style="text-align: center" scope="col">Login to Region</th>
      
       </tr>
    <tr>
      <th height="37" style="text-align: center" scope="row"> 1 </th>
      <td style="text-align: center"> GI </td>
      <td style="text-align: center"><a href="http://www.git.edu/" style="font-weight: normal"> Gogte Institute of Technology </a></td>
      <td style="text-align: center">0831</td>
      <td style="text-align: center">2405506</td>
      <td style="text-align: center">Belagavi</td>
      <td style="text-align: center"> <a href="college1login.php?cname=<?php echo "GIT";?>&ccode=<?php echo "GI";?>"> Login </a> </td>
      
    </tr>
    <tr>
      <th height="38" style="text-align: center" scope="row"> 2 </th>
      <td style="text-align: center"> JI </td>
      <td style="text-align: center"> <a href="https://www.jce.ac.in/"> Jain College of Engineering </a> </td> 
      <td style="text-align: center">0831</td>
      <td style="text-align: center">2411183</td>
      <td style="text-align: center">Belagavi</td>
      <td style="text-align: center"> <a href="college2login.php?cname=<?php echo "Jain college";?>&ccode=<?php echo "JI";?>"> Login </a> </td>
      
    </tr>
    <tr>
      <th height="37" style="text-align: center" scope="row"> 3 </th>
      <td style="text-align: center">RV</td>
      <td style="text-align: center"> <a href="https://rvce.edu.in/"> R.V College of Engineering </a> </td> 
      <td style="text-align: center">080</td>
      <td style="text-align: center">28600184</td>
      <td style="text-align: center">Bengaluru</td>
      <td style="text-align: center"> <a href="college3login.php?cname=<?php echo "RVC";?>&ccode=<?php echo "RV";?>"> Login </a> </td>
      
    </tr>
    <tr>
      <th height="41" style="text-align: center" scope="row"> 4 </th>
      <td style="text-align: center">JB</td>
      <td style="text-align: center"> <a href="https://sjbit.edu.in/"> SJB Institute of Technology </a> </td> 
      <td style="text-align: center">080</td>
      <td style="text-align: center">28603651</td>
      <td style="text-align: center">Bengaluru</td>
      <td style="text-align: center"> <a href="college4login.php?cname=<?php echo "SJBIT";?>&ccode=<?php echo "JB";?>"> Login </a> </td>
    </tr>
   </tbody>
</table>     
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p></td>
            </tr>
            <tr>
               <td bgcolor="#070707" align="center" height="2"> <?php include("footer.php"); ?></td>
            </tr>
        </tbody>
      </table>
    </body>
</html>
