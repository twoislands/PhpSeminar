<!--********************************************
   SCRIBBLER:	TwoIslandS
   WEBSITE:	http://twoislands.net
   VERSION:	1.0 beta
 *****************************************-->

<?php include ('header.php');
/*
include ('mysql_connection&check.php');

$result = mysqli_query($sql_connect,"SELECT * FROM USERS WHERE username='$_POST[username]' AND password='$password'");
$admin_result = mysqli_query($sql_connect,"SELECT * FROM USERS WHERE username='$_POST[username]' AND password='$password'");
//var_dump($result);
*/
?>
    <form action ="search.php" method="post">
	  <p> <h3>Who are you looking for?</h3>
	  <table border="0">
	  <tr>
	  <td>First name: </td>
	  <td><input type="text" name="search_fname" maxlength="15" size="15"></td>
	  </tr>
	  <tr>
	  <td>Last name: </td>
	  <td><input type="text" name="search_sname" maxlength="30" size="30"></td>
	  </tr>
	  <tr>
	  <td>Telephone number: </td>
	  <td><input type="text" name="search_phone" maxlength="30" size="30"></td>
	  </tr>
	  <tr>
	  <td>Address: </td>
	  <td><input type="text" name="search_address" maxlength="8" size="8"></td>
	  </tr>
	  <tr>
	  <td colspan="2"><input type="submit" value="Search"></td>
	  </tr>
	  </table>
	</form>

<?php include ('footer.php'); ?>
