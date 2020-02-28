<?php 
session_start();
ob_start();
if(!isset($_SESSION["auname"]))
{
	header("location:region1login.php");
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
        <?php 
		  $colcode = "";
		  $colname = "";
          $sdata = "";
		  $adata = "";
		  $edata = "";
		 // fetch username from session variable
	
	// Establish connection with database
	include("myconn1.php");
	// create a select query
	$sql="Select *from college1data";
	// Execute the query
	$result = $conn1->query($sql);
	// Check if it has returned atleast one row
		if($result->num_rows > 0 )
		{
			// fetch 1 by 1 record from the result and store it in $row array.
			while($row=$result->fetch_assoc())
			{
				 $colcode = $row['collegecode'];
				 $colname = $row['collegename'];
				 $sdata = $row['studentdata'];
		         $adata = $row['academicsdata'];
		         $edata = $row['eventsdata']; 	  
			}
		}
		else
		{
			echo "Error : " . $sql . "<br>" . $conn1->error;
		}
				
  ?>
  <?php 
		  $colcode1 = "";
		  $colname1 = "";
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
				 $colcode1 = $row1['collegecode'];
				 $colname1 = $row1['collegename'];
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
              <td bgcolor="#6E6E6E"> <?php include("region1nav.php"); ?> </td>
           </tr>
            <tr bgcolor="#F8F8F8">
                <td colspan="2">  <h1 align="center"> <p>Belagavi region college data</p> </h1>
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
                  <table width="738" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tbody>
                      <tr>
                        <th width="142" height="30" bgcolor="#C3C3C3" style="text-align: center" scope="col"> College code </th>
                        <th width="158" bgcolor="#C3C3C3" style="text-align: center" scope="col"> College name</th>
                        <th width="181" bgcolor="#C3C3C3" style="text-align: center" scope="col"> Student data</th>
                        <th width="142" bgcolor="#C3C3C3" style="text-align: center" scope="col">Academics</th>
                        <th width="115" bgcolor="#C3C3C3" style="text-align: center" scope="col">Events</th>
                      </tr>
                      <?php 
							while($row=$result->fetch_assoc())
							{
								$colcode=$row["collegecode"];
							?>
                      <tr>
                        <td height="29" bgcolor="#FFFFFF" style="text-align: center"><?php echo $colcode;?></td>
                        <td bgcolor="#FFFFFF" style="text-align: center"><?php echo $colname;?></td>
                        <td bgcolor="#FFFFFF" style="text-align: center"><a href="download.php?filename=<?php echo $sdata;?>">Student data file</a></td>
                        <td bgcolor="#FFFFFF" style="text-align: center"><a href="download.php?filename=<?php echo $adata;?>"> Academic details file</a></td>
                        <td bgcolor="#FFFFFF" style="text-align: center"><a href="download.php?filename=<?php echo $edata;?>">Event details file</a></td>
                      </tr>
                      <?php
						}
						   $conn1->close();
						   include("myconn1.php");
						   $sql1="SELECT *from college2data";
						   $result1=$conn1->query($sql1);
						   while($row1=$result1->fetch_assoc())
							{
								$colcode1=$row1["collegecode"];
							?>
                      <tr>
                        <td height="29" bgcolor="#FFFFFF" style="text-align: center"><?php echo $colcode1;?></td>
                        <td bgcolor="#FFFFFF" style="text-align: center"><?php echo $colname1;?></td>
                        <td bgcolor="#FFFFFF" style="text-align: center"><a href="download.php?filename=<?php echo $sdata1;?>">Student data file</a></td>
                        <td bgcolor="#FFFFFF" style="text-align: center"><a href="download.php?filename=<?php echo $adata1;?>"> Academic details file</a></td>
                        <td bgcolor="#FFFFFF" style="text-align: center"><a href="download.php?filename=<?php echo $edata1;?>">Event details file</a></td>         
                        <?php
							}
						}
                       ?>
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
