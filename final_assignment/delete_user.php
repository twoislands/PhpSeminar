<!********************************************
   SCRIBBLER:	TwoIslandS
   WEBSITE:	http://twoislands.net
   VERSION:	1.0 beta
 *****************************************-->

<?php include ('header.php');
	
if(!isset($_SESSION['username']) || empty($_SESSION['username'])) { 
header('location: invalid_access.php'); 
}
		  
	include ('mysql_connection&check.php');
      
$userID = $_SESSION['userID'];
      $query_result = mysqli_query($sql_connect, "DELETE FROM USERS WHERE userID=$userID");
      
	  if ($query_result !== FALSE){
		
		?>
	<h2>We will miss you.</h2>
		
	<?php	echo '<meta http-equiv="refresh" content="3;url=home.php">';
			echo "if not click here <a href='home.php'>Home</a >";
	  }
      
 	mysqli_close($sql_connect);
      
	
include ('footer.php'); ?>