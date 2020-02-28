<?php 
session_start();
ob_start();
if(!isset($_SESSION["auname"]))
{
	header("location:college3login.php");
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
		  $usn1 = "";
          $name1 = "";
		 // fetch username from session variable
	
	// Establish connection with database
	include("myconn2.php");
	// create a select query
	$sql1="Select *from college3student";
	// Execute the query
	$result1 = $conn2->query($sql1);
	// Check if it has returned atleast one row
		if($result1->num_rows > 0 )
		{
			// fetch 1 by 1 record from the result and store it in $row array.
			while($row1=$result1->fetch_assoc())
			{
				 $usn1 = $row1['usn'];
				 $name1 = $row1['name'];	  
			}
		}
		else
		{
			echo "Error : " . $sql1 . "<br>" . $conn2->error;
		}
				
  ?>

        <table width="1000" border="0" cellspacing="0" cellpadding="0" align="center">
         <tbody>
            <tr>
              <td height="140" bgcolor="#070707" align="left">  <?php include("header.php"); ?> </td>
            </tr>
            <tr>
              <td bgcolor="#6E6E6E"> <?php include("college3navmenu.php"); ?> </td>
           </tr>
            <tr bgcolor="#F8F8F8">
                <td bgcolor="#FFFFFF">
             <table width="1000" border="0" cellspacing="0" cellpadding="10">
              <tbody>
                <tr>
                  <td bgcolor="#F8F8F8"> 
                   <p>&nbsp;</p>
                   <p>
                     <?php
						include("myconn2.php");
						$sql="SELECT *from college3student";
						$result=$conn2->query($sql);
						if($result->num_rows==0)
						{
								echo "No Records Found";
						}
						else
						{
					?>
                   </p>
                   <p style="font-size: 18px; font-weight: bold; text-align: center;"> RVCE College student data </p>
                   <table width="699" border="1" align="center" cellpadding="4" cellspacing="4">
                     <tbody>
                       <tr>
                       <th width="159" bgcolor="#C3C3C3" style="text-align: center" scope="col"> Sl.No </th>
                         <th width="267" bgcolor="#C3C3C3" style="text-align: center" scope="col"> USN </th>
                         <th width="273" bgcolor="#C3C3C3" style="text-align: center" scope="col"> Name </th>
                       </tr>
                        <?php 
							$r1 = 1;
							while($row=$result->fetch_assoc())
							{
								$usn1=$row["usn"];
								$name1=$row["name"];
							?>
                       <tr>
                       <td bgcolor="#FFFFFF" style="text-align: center"> <?php echo $r1++;?></td>
                        <td bgcolor="#FFFFFF" style="text-align: center"> <?php echo $usn1;?></td>
                        <td bgcolor="#FFFFFF" style="text-align: center"> <?php echo $name1;?></td>
                       </tr>
                       <?php
						}
						}
                       ?>
                     </tbody>
                     
                   </table>
                   <br>
                   <p style="text-align: center"><a href="college3deleteallstudenrdata.php">Delete all</a></p>
                  <p>&nbsp;</p></td>
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
