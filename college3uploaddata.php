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
		$colcode=$_REQUEST["ccode"];
		$colname=$_REQUEST["cname"];
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
                  <td> <h1 align="center"> Welcome <?php echo  $_SESSION['auname']; ?> </h1> </td>
                </tr>
                <tr>
                    <td> <form id="form1" name="form1" method="post" enctype="multipart/form-data">
   	      <p>&nbsp;</p>
          	    <table width="500" border="0" align="center" cellpadding="5" cellspacing="10">
                 <tbody>
                  <tr>
                    <td bgcolor="#909090" style="text-align: center; color: #FDFDFD;"><h2>RVCE college upload data form</h2></td>
                  </tr>
                  <tr>
                    <td bgcolor="#D5DBD7">College code</td>
                   </tr>
                  <tr>
                	<td><input name="collegecode" type="text" required="required" id="collegecode" pattern="[a-zA-Z\s]+" title="Accepts lowercase,uppercase &amp; space" value="<?php echo "$colcode";?>" readonly></td>
               	   </tr>
                  <tr>
                    <td bgcolor="#D5DBD7">Name of the college</td>
                  </tr>
                  <tr>
                    <td><input name="collegename" type="text" required="required" id="collegename" pattern="[a-zA-Z\s]+" title="Accepts lowercase,uppercase &amp; space" value="<?php echo "$colname";?>" readonly></td>
                  </tr>
                  <tr>
                    <td bgcolor="#D5DBD7">Student Data</td>
                  </tr>
                  <tr>
                    <td><input type="file" name="studentdata" id="studentdata"></td>
                  </tr>
                  <tr>
                    <td bgcolor="#D5DBD7">Academic Performance</td>
                  </tr>
                  <tr>
                    <td><input type="file" name="academicdata" id="academicdata"></td>
                  </tr>
                  <tr>
                    <td bgcolor="#D5DBD7">Event Deails</td>
                  </tr>
                  <tr>
                    <td><input type="file" name="eventdata" id="eventdata"></td>
                   </tr>
              <tr style="text-align: center">
                <td bgcolor="#6E6E6E"><input type="submit" name="submit" id="submit" value="submit"></td>
                </tr>
            </tbody>
           </table>
          <p>&nbsp;</p>
      </form> </td>
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

<?php 
	include("myconn3.php");
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{	
		$colcode = $_REQUEST["collegecode"];
		$colname = $_REQUEST["collegename"];
		$date1 = date('Y-m-d');		
		$errors1 = array();
		$sdata1 = $_FILES['studentdata']['name'];
		$sdata_size1 = $_FILES['studentdata']['size'];
		$sdata_tmp1 = $_FILES['studentdata']['tmp_name'];
		$sdata_type1 = $_FILES['studentdata']['type'];
	
		$sdata_allowed1 =  array("pdf" => "document/pdf", "doc" => "document/doc","xls" => "document/xls","csv" => "document/csv");
	
	if (isset($_POST["submit"])) 
	{
	    $sdata_tmp11 = $_FILES["studentdata"]["tmp_name"];
		if ($_FILES["studentdata"]["size"] > 0)
		{
		 $file = fopen($sdata_tmp11, "r");
		 while (($data = fgetcsv($file,1000000,",")) !== FALSE) 
		 {
            $sqlInsert = "INSERT INTO college3student(usn,name) values ('" . $data[0] . "','" . $data[1] . "')";
            if($conn3->query($sqlInsert)===TRUE)
			{
                echo "<script> if(confirm('Uploaded csv successfully')) </script>";
            } 
			else 
			{
                echo "Problem in Importing CSV Data";
            }
          }
		}
	}
	
		// Verify file extension
	
		$ext1 = pathinfo($sdata1, PATHINFO_EXTENSION);
	
		if(!array_key_exists($ext1, $sdata_allowed1)) die("Error: Please select valid file format. ");
		move_uploaded_file($sdata_tmp1,"uploads/".$sdata1);
	
	    $errors2 = array();
		$adata1 = $_FILES['academicdata']['name'];
		$adata_size1 = $_FILES['academicdata']['size'];
		$adata_tmp1 = $_FILES['academicdata']['tmp_name'];
		$adata_type1 = $_FILES['academicdata']['type'];
	
		$adata_allowed1 =  array("pdf" => "document/pdf", "doc" => "document/doc","xls" => "document/xls","csv" => "document/csv");
	
	if (isset($_POST["submit"])) 
	{
	    $adata_tmp11 = $_FILES["academicdata"]["tmp_name"];
		if ($_FILES["academicdata"]["size"] > 0)
		{
		 $file1 = fopen($adata_tmp11, "r");
		 while (($data1 = fgetcsv($file1,1000000,",")) !== FALSE) 
		 {
            $sqlInsert1 = "INSERT INTO college3academicdata(usn,name,result) values ('" . $data1[0] . "','" . $data1[1] . "','" . $data1[2] ."')";
            if($conn3->query($sqlInsert1)===TRUE)
			{
                echo "<script> if(confirm('Uploaded csv successfully')) </script>";
            } 
			else 
			{
                echo "Problem in Importing CSV Data";
            }
          }
		}
	}
	
		// Verify file extension
	
		$ext2 = pathinfo($adata1, PATHINFO_EXTENSION);
	
		if(!array_key_exists($ext2, $adata_allowed1)) die("Error: Please select valid file format. ");
		move_uploaded_file($adata_tmp1,"uploads/".$adata1);
		
		$errors3 = array();
		$edata1 = $_FILES['eventdata']['name'];
		$edata_size1 = $_FILES['eventdata']['size'];
		$edata_tmp1 = $_FILES['eventdata']['tmp_name'];
		$edata_type1 = $_FILES['eventdata']['type'];
	
		$edata_allowed1 =  array("pdf" => "document/pdf", "doc" => "document/doc","xls" => "document/xls","csv" => "document/csv");
	
		// Verify file extension
	
		$ext3 = pathinfo($edata1, PATHINFO_EXTENSION);
	
		if(!array_key_exists($ext3, $edata_allowed1)) die("Error: Please select valid file format. ");
		move_uploaded_file($edata_tmp1,"uploads/".$edata1);
		
		
		    $insertquery = "INSERT INTO college3data(collegecode,collegename,date,studentdata,academicsdata,eventsdata) values('$colcode','$colname','$date1','$sdata1','$adata1','$edata1')";
				   
			if($conn3->query($insertquery)===TRUE)
			{
				echo "<script> if(confirm('Uploaded successfully')) </script>";
			}
			else
			{
				echo "Error : " . $insertquery . "<br>" . $conn3->error;
			}
			
		}
		else
		{
			echo "Error : " , "<br>" . $conn3->error;
		}
		$conn3->close();
?>

<?php 
	include("myconn2.php");
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{	
		$colcode = $_REQUEST["collegecode"];
		$colname = $_REQUEST["collegename"];
		$date1 = date('Y-m-d');
		$errors1 = array();
		$sdata1 = $_FILES['studentdata']['name'];
		$sdata_size1 = $_FILES['studentdata']['size'];
		$sdata_tmp1 = $_FILES['studentdata']['tmp_name'];
		$sdata_type1 = $_FILES['studentdata']['type'];
	
		$sdata_allowed1 =  array("pdf" => "document/pdf", "doc" => "document/doc","xls" => "document/xls","csv" => "document/csv");
	
	 $sdata_tmp11 = $_FILES["studentdata"]["tmp_name"];
		$file = fopen($sdata_tmp11, "r");
		if ($_FILES["studentdata"]["size"] > 0)
		{
		  while (($data = fgetcsv($file, 10000, ",")) !== FALSE)
		  {
            $sqlInsert = "INSERT INTO college3student(usn,name) values ('" . $data[0] . "','" . $data[1] . "')"; 
            if($conn2->query($sqlInsert)===TRUE)
			{
                echo "<script> if(confirm('Uploaded csv successfully')) </script>";
            } 
			else 
			{
                echo "Problem in Importing CSV Data";
            }
         }
		}
		// Verify file extension
	
		$ext1 = pathinfo($sdata1, PATHINFO_EXTENSION);
	
		if(!array_key_exists($ext1, $sdata_allowed1)) die("Error: Please select valid file format. ");
		move_uploaded_file($sdata_tmp1,"uploads/".$sdata1);
	
	    $errors2 = array();
		$adata1 = $_FILES['academicdata']['name'];
		$adata_size1 = $_FILES['academicdata']['size'];
		$adata_tmp1 = $_FILES['academicdata']['tmp_name'];
		$adata_type1 = $_FILES['academicdata']['type'];
	
		$adata_allowed1 =  array("pdf" => "document/pdf", "doc" => "document/doc","xls" => "document/xls","csv" => "document/csv");
	
	if (isset($_POST["submit"])) 
	{
	    $adata_tmp11 = $_FILES["academicdata"]["tmp_name"];
		if ($_FILES["academicdata"]["size"] > 0)
		{
		 $file1 = fopen($adata_tmp11, "r");
		 while (($data1 = fgetcsv($file1,1000000,",")) !== FALSE) 
		 {
            $sqlInsert1 = "INSERT INTO college3academicdata(usn,name,result) values ('" . $data1[0] . "','" . $data1[1] . "','" . $data1[2] ."')";
            if($conn2->query($sqlInsert1)===TRUE)
			{
                echo "<script> if(confirm('Uploaded csv successfully')) </script>";
            } 
			else 
			{
                echo "Problem in Importing CSV Data";
            }
          }
		}
	}
	
		// Verify file extension
	
		$ext2 = pathinfo($adata1, PATHINFO_EXTENSION);
	
		if(!array_key_exists($ext2, $adata_allowed1)) die("Error: Please select valid file format. ");
		move_uploaded_file($adata_tmp1,"uploads/".$adata1);
		
		$errors3 = array();
		$edata1 = $_FILES['eventdata']['name'];
		$edata_size1 = $_FILES['eventdata']['size'];
		$edata_tmp1 = $_FILES['eventdata']['tmp_name'];
		$edata_type1 = $_FILES['eventdata']['type'];
	
		$edata_allowed1 =  array("pdf" => "document/pdf", "doc" => "document/doc","xls" => "document/xls","csv" => "document/csv");
	
		// Verify file extension
	
		$ext3 = pathinfo($edata1, PATHINFO_EXTENSION);
	
		if(!array_key_exists($ext3, $edata_allowed1)) die("Error: Please select valid file format. ");
		move_uploaded_file($edata_tmp1,"uploads/".$edata1);
		
		
		    $insertquery = "INSERT INTO college3data(collegecode,collegename,date,studentdata,academicsdata,eventsdata) values('$colcode','$colname','$date1','$sdata1','$adata1','$edata1')";
				   
			if($conn2->query($insertquery)===TRUE)
			{
				echo "<script> if(confirm('Uploaded successfully')) window.location='college3admindashboard.php';</script>";
			}
			else
			{
				echo "Error : " . $insertquery . "<br>" . $conn2->error;
			}
			
		}
		else
		{
			echo "Error : " , "<br>" . $conn2->error;
		}
		$conn2->close();
?>




