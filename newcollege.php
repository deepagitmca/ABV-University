<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title> Welcome </title>
        <link rel="stylesheet" type="text/css" href="nav2.css"/>
         <link rel="stylesheet" href="style.css">
         <link href="jQueryAssets/jquery.ui.core.min.css" rel="stylesheet" type="text/css">
         <link href="jQueryAssets/jquery.ui.theme.min.css" rel="stylesheet" type="text/css">
         <link href="jQueryAssets/jquery.ui.datepicker.min.css" rel="stylesheet" type="text/css">
    <script src="jQueryAssets/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="jQueryAssets/jquery.ui-1.10.4.datepicker.min.js" type="text/javascript"></script>
    <script language="javascript">
  function datedifference(date11) 
  {
	dt1 = new Date(date1);
	dt2 = new Date();
	return Math.floor((Date.UTC(dt2.getFullYear(), dt2.getMonth(), dt2.getDate()) - Date.UTC(dt1.getFullYear(), dt1.getMonth(), dt1.getDate()) ) /(1000 * 60 * 60 * 24));
  }
	function validate()
	{
		var edate=document.getElementById("date1");
		if(datedifference(edate.value)<0)
		{
			alert('Invalid establish date');
			edate.focus();
			return false;
		}
	}
	</script>
    <script language="javascript">
	function getAge() 
	{
		var edate=document.getElementById("date1");
		var today = new Date();
		var nowyear = today.getFullYear();
		var nowmonth = today.getMonth();
		var nowday = today.getDate();
		var birth=new Date(edate.value);
		var birthyear = birth.getFullYear();
		var birthmonth = birth.getMonth();
		var birthday = birth.getDate();

		var age = nowyear - birthyear;
		if(age<5)
		{
			alert('Institute must be minimum 5 years  old');
			edate.focus();
			return false;
		}
	  }
</script>
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
                <td colspan="2"> 
      <form id="form1" name="form1" method="post" enctype="multipart/form-data" onSubmit="return validate(),getAge()">
   	      <p>&nbsp;</p>
          	    <table width="500" border="0" align="center" cellpadding="5" cellspacing="10">
                 <tbody>
                  <tr>
                    <td bgcolor="#909090" style="text-align: center; color: #FDFDFD;"><h2>New college registration Form</h2></td>
                  </tr>
                  <tr>
                    <td bgcolor="#D5DBD7">Name of the college</td>
                   </tr>
                  <tr>
                	<td><input name="collegename" type="text" required="required" id="collegename" pattern="[a-zA-Z\s]+" title="Accepts lowercase,uppercase &amp; space"></td>
               	   </tr>
                  <tr>
                    <td bgcolor="#D5DBD7">Name of the founder</td>
                   </tr>
                  <tr>
                    <td><input type="text" name="founder" id="founder" required="required pattern="[a-zA-Z\s]+" title="Accepts lowercase,uppercase &amp; space"></td>
                   </tr>
                  <tr>
                    <td bgcolor="#D5DBD7">Established on </td>
                   </tr>
                  <tr>
                    <td><input type="text" name="date1" id="date1"></td>
                   </tr>
                  <tr>
                    <td bgcolor="#D5DBD7">Email</td>
                   </tr>
                  <tr>
                    <td><input name="email" type="email" required="required" id="email" title="Please enter proper email format"></td>
                   </tr>
                  <tr>
                    <td bgcolor="#D5DBD7">Mobile No. </td>
                   </tr>
                  <tr>
                    <td><input name="mobileno" type="text" required="required" id="mobileno" pattern="(9|8|7)\d{9}" title="Phone number should contain 10 digits starting with 9, 8 or 7"></td>
                   </tr>
                  <tr>
                   <td bgcolor="#D5DBD7">Address</td>
                   </tr>
                  <tr>
                    <td><textarea name="address" required id="address"></textarea></td>
                   </tr>
                  <tr>
                  <td bgcolor="#D5DBD7">Accreditation</td>
                  </tr>
                  <tr>
                    <td><p>
                      <label>
                        <input type="checkbox" name="grades[]" value="nacc" id="grades_0">
                        NAAC</label>
                      <br>
                      <label>
                        <input type="checkbox" name="grades[]" value="acm" id="grades_1">
                        ACM</label>
                      <br>
                      <label>
                        <input type="checkbox" name="grades[]" value="nba" id="grades_2"> NBA<br>
                      </label>
                      <label>
                          <input type="checkbox" name="grades[]" value="aicte" id="grades_3">
                        AICTE</label>
                      <br>                      
                        <br>
                    </p></td>
                   </tr>
                  <tr>
                   <td bgcolor="#D5DBD7">More info</td>
                   </tr>
                  <tr>
                    <td><textarea name="info" id="info"></textarea></td>
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
                    <td><input type="file" name="academic" id="academic"></td>
                  </tr>
                  <tr>
                    <td bgcolor="#D5DBD7">Event Deails</td>
                  </tr>
                  <tr>
                    <td><input type="file" name="event" id="event"></td>
                   </tr>
              <tr style="text-align: center">
                <td bgcolor="#6E6E6E"><input type="submit" name="submit" id="submit" value="submit"></td>
                </tr>
            </tbody>
           </table>
          <p>&nbsp;</p>
      </form></td>
            </tr>
            <tr>
               <td bgcolor="#070707" align="center" height="2"> <?php include("footer.php"); ?></td>
            </tr>
        </tbody>
      </table>
    <script type="text/javascript">
$(function() {
	$( "#date1" ).datepicker({
		dateFormat:"yy-mm-dd"
	}); 
});
        </script>
    </body>
</html>

 <?php 
	include("myconn3.php");
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{	
		$colname = $_REQUEST["collegename"];
		$fname = $_REQUEST["founder"];
		$dob = $_REQUEST["date1"];
		$mail = $_REQUEST["email"];
		$mob = $_REQUEST["mobileno"];
		$add = $_REQUEST["address"];
		$acc = $_REQUEST["grades"];
		$information = $_REQUEST["info"];	
			
			include("myconn3.php");	
		$errors1 = array();
		$sdata = $_FILES['studentdata']['name'];
		$sdata_size = $_FILES['studentdata']['size'];
		$sdata_tmp = $_FILES['studentdata']['tmp_name'];
		$sdata_type = $_FILES['studentdata']['type'];
	
		$sdata_allowed = array("pdf" => "document/pdf", "doc" => "document/doc","xlsx" => "document/xlsx","xls" => "document/xls","csv" => "document/csv");
	
		// Verify file extension
	
		$ext1 = pathinfo($sdata, PATHINFO_EXTENSION);
	
		if(!array_key_exists($ext1, $sdata_allowed)) die("Error: Please select valid file format. ");
		move_uploaded_file($sdata_tmp,"uploads/".$sdata);
	
	    $errors2 = array();
		$adata = $_FILES['academic']['name'];
		$adata_size = $_FILES['academic']['size'];
		$adata_tmp = $_FILES['academic']['tmp_name'];
		$adata_type = $_FILES['academic']['type'];
	
		$adata_allowed = array("pdf" => "document/pdf", "doc" => "document/doc","xlsx" => "document/xlsx","xls" => "document/xls","csv" => "document/csv");
		// Verify file extension
	
		$ext2 = pathinfo($adata, PATHINFO_EXTENSION);
	
		if(!array_key_exists($ext2, $adata_allowed)) die("Error: Please select valid file format. ");
		move_uploaded_file($adata_tmp,"uploads/".$adata);
		
		$errors3 = array();
		$edata = $_FILES['event']['name'];
		$edata_size = $_FILES['event']['size'];
		$edata_tmp = $_FILES['event']['tmp_name'];
		$edata_type = $_FILES['event']['type'];
	
		$edata_allowed = array("pdf" => "document/pdf", "doc" => "document/doc","xlsx" => "document/xlsx","xls" => "document/xls","csv" => "document/csv");
	
		// Verify file extension
	
		$ext3 = pathinfo($edata, PATHINFO_EXTENSION);
	
		if(!array_key_exists($ext3, $edata_allowed)) die("Error: Please select valid file format. ");
		move_uploaded_file($edata_tmp,"uploads/".$edata);
		
		if(isset($_POST['submit']))
	    {
			$checkbox1=$_POST['grades'];
			$chk="";
			foreach($checkbox1 as $chk1)
			{
				$chk .= $chk1.",";
			}			
		 }
		$status = "not approved";
		    $insertquery = "INSERT INTO newcollege(collegename,foundername,establishdate,email,contact,address,accreditation,studentdata,academics,events,status) values('$colname','$fname','$dob','$mail','$mob','$add','$chk','$sdata','$adata','$edata','$status')";
				   
			if($conn3->query($insertquery)===TRUE)
			{
				echo "<script> if(confirm('Requested successfully')) window.location='region.php';</script>";
			}
			else
			{
				echo "Error : " . $insertquery . "<br>" . $conn3->error;
			}
		}
		else
		{
			echo  $conn3->error;
		}
		$conn3->close();
?>
