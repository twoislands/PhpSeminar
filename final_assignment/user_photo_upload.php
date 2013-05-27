<?php 
/*********************************************
   SCRIBBLER:	TwoIslandS
   WEBSITE:	http://twoislands.net
   VERSION:	1.0 beta
 *********************************************/

include ('header.php'); 
$todir = 'users_uploads/';

  if ($_FILES["file"]["error"] > 0)
    {
    echo "Error: " . $_FILES["file"]["error"] . "<br>";
    }
  else
    {
    echo $_FILES["file"]["name"] . " uploaded successfully " . "<br>";
    
	move_uploaded_file( $_FILES['file']['tmp_name'], $todir .($_FILES['file']['name'] ) );
	
	include ('mysql_connection&check.php');

    mysqli_query($sql_connect, "UPDATE USERS SET user_image='".$_FILES['file']['name']."'WHERE userID=".$_SESSION['userID']);
    }

include ('footer.php'); ?>