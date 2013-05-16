<!********************************************
   SCRIBBLER:	TwoIslandS
   WEBSITE:	http://twoislands.net
   VERSION:	1.0 beta
 *****************************************-->

<?php include ('header.php');
	
$userID = $_SESSION['userID'];
	  
	include ('mysql_connection&check.php');
      $password=sha1($_POST['password']);
      $query_result = mysqli_query($sql_connect, "INSERT INTO `USERS`(`username`, `password`, `fname`, `sname`, `email`) VALUES ('$_POST[username]', '$password', '$_POST[fname]', '$_POST[sname]', '$_POST[email]')");
      
	  if ($query_result !== FALSE){
		echo "Thank you for registering";
			echo '<meta http-equiv="refresh" content="3;url=home.php">';
			echo "if not click here <a href='home.php'>Home</a >";
	  }
      
 	mysqli_close($sql_connect);
      
	
include ('footer.php'); ?>