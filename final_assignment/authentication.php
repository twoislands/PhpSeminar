<!--********************************************
   SCRIBBLER:	TwoIslandS
   WEBSITE:	http://twoislands.net
   VERSION:	1.0 beta
 *****************************************-->
<?
//create a new session
  session_start();
?>

<?php include ('header.php');

$_SESSION['username'] = $_POST['username'];
$_SESSION['password'] = $_POST['password'];

include ('mysql_connection&check.php');

$result = mysqli_query($sql_connect,"SELECT * FROM USERS WHERE fname='$_POST[username]'");

if ($row = mysqli_fetch_array($result)){
	if ($row['password'] == sha1($_SESSION['password']))\
	{
		echo "Welcome back " . $row['username'].".";
		echo '<meta http-equiv="refresh" content="2;url=http://webdesign.about.com/">';
		echo "if not click here"
	}
	else{
		echo "You need to register first.";
		}
}
include ('footer.php'); ?>