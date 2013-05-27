<?php 
/*********************************************
   SCRIBBLER:	TwoIslandS
   WEBSITE:	http://twoislands.net
   VERSION:	1.0 beta
 *********************************************/

include ('header.php');

$password=sha1($_POST['password']);

include ('mysql_connection&check.php');

$result = mysqli_query($sql_connect,"SELECT * FROM USERS WHERE username='$_POST[username]' AND password='$password'");

if ($row = mysqli_fetch_array($result)){
	if ($row['username'] == $_POST['username'])
	{
		
		if ($row['password'] == sha1($_POST['password']))
		{
		
			$_SESSION['username'] = $_POST['username'];
			$_SESSION['password'] = $_POST['password'];
			echo "Welcome back " . $row['username'].".";
						echo "<br />";
			echo '<meta http-equiv="refresh" content="3;url=members_site.php">';

		}
		else{
			echo "Wrong password. please try again.";
			echo '<meta http-equiv="refresh" content="3;url=login.php">';
			}
	}
	else{
			header('location: invalid_access.php');
			}
}
else{
header('location: invalid_access.php');
}
include ('footer.php'); ?>