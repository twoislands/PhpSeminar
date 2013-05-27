<?php 
/*********************************************
   SCRIBBLER:	TwoIslandS
   WEBSITE:	http://twoislands.net
   VERSION:	1.0 beta
 *********************************************/
 
include ('header.php');
$userID = $_SESSION['userID'];
	  
	include ('mysql_connection&check.php');
	
	
	 $query_result = mysqli_query($sql_connect, "INSERT INTO `CONTACTS`(`con_fname`, `con_sname`, `con_phone`, `con_address`) VALUES ('$_POST[con_fname]', '$_POST[con_sname]', '$_POST[con_phone]', '$_POST[con_address]')");
	
	if ($query_result !== FALSE){
		echo "You additon will be available soon.";
			echo '<meta http-equiv="refresh" content="3;url=home.php">';
			echo "if not click here <a href='home.php'>Home</a >";
	  }
      
 	mysqli_close($sql_connect);


	
include ('footer.php'); ?>

