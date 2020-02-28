<!doctype html>
 <html>
  <head>
   <meta charset="utf-8">
	<title> RVC Logout </title>
  </head>

  <body>
  <?php 
	// remove all session variables
	session_unset();
	
	// destroy the session
	session_destroy();
	header("location:colleges.php");
  ?>
 </body>
</html>