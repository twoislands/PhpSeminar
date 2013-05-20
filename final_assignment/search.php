<!--********************************************
   SCRIBBLER:	TwoIslandS
   WEBSITE:	http://twoislands.net
   VERSION:	1.0 beta
 *****************************************-->

<?php include ('header.php');
$search_fname = $_POST['search_fname'];
$search_sname = $_POST['search_sname'];
$search_phone = $_POST['search_phone'];
$search_address = $_POST['search_address'];

include ('mysql_connection&check.php');

if ( $search_phone != '' && $search_fname=='' )

$q = "SELECT * FROM CONTACTS WHERE ";

if ( $search_fname != '' ) 		
	$q .= " fname LIKE '%$search_fname%' AND "; 
  
if ( $search_sname != '' )
	$q .= " sname LIKE '%$search_sname%' AND "; 
  
if ( $search_phone != '' )
	$q .= " phone='$search_phone' AND ";
  
if ( $search_address != '' )
	$q .= " address LIKE '%$search_address%' AND ";  

$q = substr($q, 0, -4);  	

	
echo $q;
exit;




$result = mysqli_query($sql_connect,$q);
//var_dump($result);
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