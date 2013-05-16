<!********************************************
   SCRIBBLER:	TwoIslandS
   WEBSITE:	http://twoislands.net
   VERSION:	1.0 beta
 *****************************************-->

<?php include ('header.php');
      $_SESSION['password']=$_POST['password'];
      $_SESSION['confirm_pass']=$_POST['confirm_pass'];

	   if (isset($_SESSION['password'], $_SESSION['confirm_pass'])) {
	      if ($_SESSION['password'] != $_SESSION['confirm_pass']) {
		echo '<script type="text/javascript">'; 
		echo 'alert("Passwords did not match")'; 
		echo '</script>';  
	      }
	     }
	  
	  
	  
	  
include ('mysql_connection&check.php');
      
//       mysqli_query($sql_connect, "INSERT INTO USERS (username,password,fname,sname,email) VALUES (($username),($password(,($fname(,($sname),($email)");
      mysqli_query($sql_connect, "INSERT INTO `USERS`(`username`, `password`, `fname`, `sname`, `email`) VALUES ('$_POST[username]', '$_POST[password]', '$_POST[fname]', '$_POST[sname]', '$_POST[email]')");
      
      
 	mysqli_close($sql_connect);
      
	
include ('footer.php'); ?>