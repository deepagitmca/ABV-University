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
        <?php 
		  $date1 = "";
          $sdata1 = "";
		  $adata1 = "";
		  $edata1 = "";
		 // fetch username from session variable
	
	// Establish connection with database
	include("myconn1.php");
	// create a select query
	$sql1="Select *from college1data";
	// Execute the query
	$result1 = $conn1->query($sql1);
	// Check if it has returned atleast one row
		if($result1->num_rows > 0 )
		{
			// fetch 1 by 1 record from the result and store it in $row array.
			while($row1=$result1->fetch_assoc())
			{
				 $date1 = $row1['date'];
				 $sdata1 = $row1['studentdata'];
		         $adata1 = $row1['academicsdata'];
		         $edata1 = $row1['eventsdata']; 	  
			}
		}
		else
		{
			echo "Error : " . $sql1 . "<br>" . $conn1->error;
		}
				
  ?>

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
                  <td bgcolor="#F8F8F8"> 
                   <p>&nbsp;</p>
                   <p>
                     <?php
						include("myconn1.php");
						$sql="SELECT *from college1data";
						$result=$conn1->query($sql);
						if($result->num_rows==0)
						{
								echo "No Records Found";
						}
						else
						{
					?>
                   </p>
                   <p style="text-align: center; font-size: 24px; font-weight: bold;">GIT College archieve data </p>
                   <table width="730" border="0" align="center" cellpadding="0" cellspacing="0">
                     <tbody>
                       <tr>
                       <th width="97" height="35" bgcolor="#C3C3C3" style="text-align: center" scope="col"> Sl.No </th>
                          <th width="139" bgcolor="#C3C3C3" style="text-align: center" scope="col"> Uploaded date </th>
                         <th width="155" bgcolor="#C3C3C3" style="text-align: center" scope="col"> Student data</th>
                         <th width="136" bgcolor="#C3C3C3" style="text-align: center" scope="col">Academics</th>
                         <th width="104" bgcolor="#C3C3C3" style="text-align: center" scope="col">Events</th>
                         <th width="99" bgcolor="#C3C3C3" style="text-align: center" scope="col"> Delete </th>
                       </tr>
                        <?php 
							$r1 = 1;
							while($row=$result->fetch_assoc())
							{
								$date1=$row["date"];
							?>
                       <tr>
                       <td height="39" bgcolor="#FFFFFF" style="text-align: center"> <?php echo $r1++;?></td>
                        <td bgcolor="#FFFFFF" style="text-align: center"> <?php echo $date1;?></td>
                         <td bgcolor="#FFFFFF" style="text-align: center"><a href="download.php?filename=<?php echo $sdata1;?>">Student data file</a></td>
                         <td bgcolor="#FFFFFF" style="text-align: center"><a href="download.php?filename=<?php echo $adata1;?>"> Academic details file</a></td>
                         <td bgcolor="#FFFFFF" style="text-align: center"><a href="download.php?filename=<?php echo $edata1;?>">Event details file</a></td>
                         <td bgcolor="#FFFFFF" style="text-align: center"><a href="college1deletedata.php?sdata=<?php echo $sdata1;?>&adata=<?php echo $adata1;?>&edata=<?php echo $edata1;?>&date=<?php echo $date1;?>"> Delete record </a> </td>
                       </tr>
                       <?php
						}
						}
                       ?>
                     </tbody>
                     
                   </table>
                   <br>
                   <br>
                   <br>
                   <table width="400" border="0" cellspacing="4" cellpadding="4">
                     <tbody>
                       <tr>
                         <td><a href="college1studentdata.php">View student data</a></td>
                         <td><a href="college1studentacademicdata.php">View academic performnace</a></td>
                       </tr>
                     </tbody>
                   </table>
                   <p>&nbsp;</p>
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
