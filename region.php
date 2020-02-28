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
      <table width="761" border="0" align="center" cellpadding="0" cellspacing="0">
  <tbody>
    <tr style="text-align: center; font-weight: 900; font-size: 24px;">
      <th height="42" colspan="5" bgcolor="#FFFFFF" scope="col">Regions under ABV university</th>
      </tr>
    <tr style="text-align: center">
      <th width="54" height="42" bgcolor="#C7C7C7" scope="col"> sl.no</th>
      <th width="81" bgcolor="#C7C7C7" scope="col">Region</th>
      <th width="81" bgcolor="#C7C7C7" scope="col">Region code</th>
      <th width="434" bgcolor="#C7C7C7" scope="col"> Address </th>
      <th width="90" bgcolor="#C7C7C7" scope="col"> Login </th>
      </tr>
    <tr>
      <th style="text-align: center" scope="row"> 1 </th>
      <td style="text-align: center">Belagavi</td>
      <td style="text-align: center">R01</td>
      <td style="text-align: left"><p>&nbsp;</p>
        <p>ABVTU, Regional Center Belagavi,<br>
          Jnanasangama, Mache, Belagavi – 590 018.<br>
          Fax :08312498197,<br>
          E_Mail: abvtubelgaum@abvtu.ac.in</p>
        <p><br>
        </p></td>
      <td style="text-align: center"><a  href="region1login.php?rname=<?php echo "Belagavi"; ?>&rcode =<?php echo "R01"; ?> "> Login </a> </td>
      </tr>
    <tr>
      <th style="text-align: center" scope="row"> 2 </th>
      <td style="text-align: center">Bengaluru</td>
      <td style="text-align: center">R02</td>
      <td><p>&nbsp;</p>
        <p><span style="text-align: left">ABVTU, Regional Center Bengaluru, <br>
          RHCS Layout Annapoorneshwarinagar, Nagarbhavi, Bengaluru-560091. <br>
          Fax: 080-23186932, <br>
          PDC/Transcript:080-23016666 <br>
          General Enquiry:080-23016669 <br>
          PG and Ph.D Related:080-23016692 <br>
          Exam Related:080-23016654/23181188<br>
          E_Mail: sorob4@abvtu.ac.in </span></p>
        <p>&nbsp;</p></td>
      <td style="text-align: center"> <a  href="region2login.php?rname=<?php echo "Bangalore"; ?>&rcode =<?php echo "R02"; ?>"> Login </a> </td>
      </tr>
  </tbody>
</table>

  
      <p align="center"> <a  href="newcollege.php"> Apply for new colleges </a> </p>
      <p>&nbsp;</p></td>
            </tr>
            <tr>
               <td bgcolor="#070707" align="center" height="2"> <?php include("footer.php"); ?></td>
            </tr>
        </tbody>
      </table>
    </body>
</html>
