<!********************************************
   SCRIBBLER:	TwoIslandS
   WEBSITE:	http://twoislands.net
   VERSION:	1.0 beta
 *****************************************-->

<?php include ('header.php');
	
	if (isset($_POST['password'], $POST['confirm_pass'])) {
		if ($_POST['password'] != $POST['confirm_pass']) {
			echo '<script type="text/javascript">'; 
			echo 'alert("Passwords did not match")'; 
			echo '</script>';  
		}
	}
	  
	include ('mysql_connection&check.php');
      $password=sha1($_POST['password']);
      $query_result = mysqli_query($sql_connect, "INSERT INTO `USERS`(`username`, `password`, `fname`, `sname`, `email`) VALUES ('$_POST[username]', '$password', '$_POST[fname]', '$_POST[sname]', '$_POST[email]')");
      
	  if ($query_result !== FALSE){
		echo "Thank you for registering";
			echo '<meta http-equiv="refresh" content="3;url=members_site.php">';
			echo "if not click here <a href='home.php'>Home</a >";
	  }
      
 	mysqli_close($sql_connect);
      
	
include ('footer.php'); ?>