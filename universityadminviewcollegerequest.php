<?php 
session_start();
ob_start();
if(!isset($_SESSION["auname"]))
{
	header("location:universitylogin.php");
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
		  $colname = "";
		  $fname = "";
          $edate = "";
		  $email = "";
		  $mob = "";
		  $add = "";
		  $acc = "";
          $sdata = "";
		  $adata = "";
		  $edata = "";
		 // fetch username from session variable
	
	// Establish connection with database
	include("myconn3.php");
	// create a select query
	$sql="Select *from newcollege where status='not approved'";
	// Execute the query
	$result = $conn3->query($sql);
	// Check if it has returned atleast one row
		if($result->num_rows > 0 )
		{
			// fetch 1 by 1 record from the result and store it in $row array.
			while($row=$result->fetch_assoc())
			{
				$colname = $row['collegename'];
		  		$fname = $row['foundername'];
          		$edate = $row['establishdate'];
		  		$email = $row['email'];
		  		$mob = $row['contact'];
		  		$add = $row['address'];
		  		$acc = $row['accreditation'];
          		$sdata = $row['studentdata'];
		  		$adata = $row['academics'];
		  		$edata = $row['events'];  
			}
		}
		else
		{
			echo "Error : " . $sql . "<br>" . $conn3->error;
		}
				
  ?>
  
        <table width="1000" border="0" cellspacing="0" cellpadding="0" align="center">
         <tbody>
            <tr>
              <td height="140" bgcolor="#070707" align="left">  <?php include("header.php"); ?> </td>
            </tr>
            <tr>
              <td bgcolor="#6E6E6E"> <?php include("universitynav.php"); ?> </td>
           </tr>
            <tr bgcolor="#F8F8F8">
                <td> <h1 align="center"> Welcome <?php echo "ABV University"; ?> </h1> 
                <?php
						include("myconn3.php");
						$sql="SELECT *from newcollege where status='not approved'";
						$result=$conn3->query($sql);
						if($result->num_rows==0)
						{
							echo "No Records Found";
						}
						else
						{
					?>
                    <p>&nbsp;  </p>
                  <table width="826" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tbody>
                      <tr>
                        <th width="214" bgcolor="#C3C3C3" style="text-align: center" scope="col"> College name </th>
                        <th width="169" bgcolor="#C3C3C3" style="text-align: center" scope="col"> Founder name</th>
                        <th width="214" bgcolor="#C3C3C3" style="text-align: center" scope="col"> Establish date </th>
                        <th width="169" bgcolor="#C3C3C3" style="text-align: center" scope="col"> Email </th>
                        <th width="140" bgcolor="#C3C3C3" style="text-align: center" scope="col"> Contact </th>
                        <th width="214" bgcolor="#C3C3C3" style="text-align: center" scope="col"> Address </th>
                        <th width="169" bgcolor="#C3C3C3" style="text-align: center" scope="col"> Accreditation </th>
                        <th width="214" bgcolor="#C3C3C3" style="text-align: center" scope="col"> Student data </th>
                        <th width="169" bgcolor="#C3C3C3" style="text-align: center" scope="col"> Academics </th>
                        <th width="140" bgcolor="#C3C3C3" style="text-align: center" scope="col"> Events </th>
                        <th width="140" bgcolor="#C3C3C3" style="text-align: center" scope="col"> Approve Request </th>
                        <th width="140" bgcolor="#C3C3C3" style="text-align: center" scope="col"> Approve Request </th>
                      </tr>
                      <?php 
							while($row=$result->fetch_assoc())
							{
								$colname=$row["collegename"];
							?>
                      <tr>
                        <td bgcolor="#FFFFFF" style="text-align: center"><?php echo $colname;?></td>
                        <td bgcolor="#FFFFFF" style="text-align: center"><?php echo $fname;?></td>
                        <td bgcolor="#FFFFFF" style="text-align: center"><?php echo $edate;?></td>
                        <td bgcolor="#FFFFFF" style="text-align: center"><?php echo $email;?></td>
                        <td bgcolor="#FFFFFF" style="text-align: center"><?php echo $mob;?></td>
                        <td bgcolor="#FFFFFF" style="text-align: center"><?php echo $add;?></td>
                        <td bgcolor="#FFFFFF" style="text-align: center"><?php echo $acc;?></td>
                        <td bgcolor="#FFFFFF" style="text-align: center"><a href="download.php?filename=<?php echo $sdata;?>">Student data file</a></td>
                        <td bgcolor="#FFFFFF" style="text-align: center"><a href="download.php?filename=<?php echo $adata;?>"> Academic details file</a></td>
                        <td bgcolor="#FFFFFF" style="text-align: center"><a href="download.php?filename=<?php echo $edata;?>">Event details file</a></td>
                        <td bgcolor="#FFFFFF" style="text-align: center"> <a href="collegeapprovalmail.php?cname=<?php echo $colname."&email=".$email;?>">Approve </a> </td>
                        <td bgcolor="#FFFFFF" style="text-align: center"> <a href="collegerejectmail.php?cname=<?php echo $colname."&email=".$email;?>"> Reject </a> </td>
                      </tr>
                      <?php
						}
				}
                       ?>
   
                    </tbody>
                  </table>
                  <p>&nbsp;  </p>
                </td> 
            </tr>
           <tr>
               <td bgcolor="#070707" align="center" height="2"> <?php include("footer.php"); ?></td>
            </tr>
        </tbody>
      </table>
    </body>
</html>
