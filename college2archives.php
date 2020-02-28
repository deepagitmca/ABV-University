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
		  $date1 = "";
          $sdata1 = "";
		  $adata1 = "";
		  $edata1 = "";
		 // fetch username from session variable
	
	// Establish connection with database
	include("myconn1.php");
	// create a select query
	$sql1="Select *from college2data";
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
              <td bgcolor="#6E6E6E"> <?php include("college2navmenu.php"); ?> </td>
           </tr>
            <tr bgcolor="#F8F8F8">
                <td bgcolor="#FFFFFF">
             <table width="1000" border="0" cellspacing="0" cellpadding="10">
              <tbody>
                <tr>
                  <td bgcolor="#F8F8F8"><p><br>
                   </p>
                   <?php
						include("myconn4.php");
						$sql="SELECT *from college2data";
						
						if($result1=$conn1->query($sql)===TRUE)
						{
							if($result1->num_rows==0)
							{
								echo "No Records Found";
							}
						}
						
						elseif($result=$conn3->query($sql)===TRUE)
						{
							if($result->num_rows==0)
							{
								echo "No Records Found";
							}
						}
						else
						{
					?>
                   <br>
                   <br>
                   <br>
                   <br>
                   <br>
                   <br>
                   <table width="831" border="0" align="center" cellpadding="2" cellspacing="2">
                     <tbody>
                       <tr>
                         <th height="41" colspan="6" bgcolor="#FFFFFF" style="text-align: center" scope="col"><span style="text-align: center; font-size: 24px; font-weight: 900;">Jain college archieve data </span></th>
                       </tr>
                       <tr>
                       <th width="88" height="41" bgcolor="#C3C3C3" style="text-align: center" scope="col"> Sl.No </th>
                          <th width="139" bgcolor="#C3C3C3" style="text-align: center" scope="col"> Uploaded date </th>
                         <th width="156" bgcolor="#C3C3C3" style="text-align: center" scope="col"> Student data</th>
                         <th width="114" bgcolor="#C3C3C3" style="text-align: center" scope="col">Academics</th>
                         <th width="88" bgcolor="#C3C3C3" style="text-align: center" scope="col">Events</th>
                         <th width="93" bgcolor="#C3C3C3" style="text-align: center" scope="col"> Delete </th>
                       </tr>
                        <?php 
							$r1 = 1;
							$result=$conn3->query($sql);
							
							while($row=$result->fetch_assoc())
							{
								$date1=$row["date"];
							?>
                       <tr>
                       <td height="33" bgcolor="#FFFFFF" style="text-align: center"> <?php echo $r1++;?></td>
                        <td bgcolor="#FFFFFF" style="text-align: center"> <?php echo $date1;?></td>
                         <td bgcolor="#FFFFFF" style="text-align: center"><a href="download.php?filename=<?php echo $sdata1;?>">Student data file</a></td>
                         <td bgcolor="#FFFFFF" style="text-align: center"><a href="download.php?filename=<?php echo $adata1;?>"> Academic details file</a></td>
                         <td bgcolor="#FFFFFF" style="text-align: center"><a href="download.php?filename=<?php echo $edata1;?>">Event details file</a></td>
                         <td bgcolor="#FFFFFF" style="text-align: center"><a href="college2deletedata.php?sdata=<?php echo $sdata1;?>&adata=<?php echo $adata1;?>&edata=<?php echo $edata1;?>&date=<?php echo $date1;?>"> Delete record </a> </td>
                       </tr>
                       <?php
					   
						}
						
						}
                       ?>
                     </tbody>
                     
                   </table>
                   <br>
                   <p>&nbsp;</p>
                   <table width="400" border="0" cellspacing="4" cellpadding="4">
                     <tbody>
                       <tr>
                         <td><a href="college2studentdata.php">View student data</a></td>
                         <td><a href="college2studentacademicdata.php">View academic performnace</a></td>
                       </tr>
                     </tbody>
                   </table>
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
