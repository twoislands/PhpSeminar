<!********************************************
   SCRIBBLER:	TwoIslandS
   WEBSITE:	http://twoislands.net
   VERSION:	1.0 beta
 *****************************************-->

<?php include ('header.php');

$user_no_photo = '../users_uploads/user_no_photo.png';
  
if(!isset($_SESSION['username']) || empty($_SESSION['username'])) { 
header('location: invalid_access.php'); 
}

$username = $_SESSION['username'];
include ('mysql_connection&check.php');

    $result = mysqli_query($sql_connect,"SELECT * FROM USERS WHERE username='$username'");

    echo "<table border='1'>
    <tr>
    <th>UserID</th>
    <th>Firstname</th>
    <th>Lastname</th>
	<th>Username</th>
	<th>Email</th>
	<th>User Image</th>
    </tr>";

    while($row = mysqli_fetch_array($result))
      {
      echo "<tr>";
      echo "<td>" . $row['userID'] . "</td>";
	  $_SESSION['userID']= $row['userID'];
      echo "<td>" . $row['fname'] . "</td>";
      echo "<td>" . $row['sname'] . "</td>";
	  echo "<td>" . $row['username'] . "</td>";
	  echo "<td>" . $row['email'] . "</td>";
	  if (($row['user_image'] == NULL) || ($row['user_image'] == ""))
	  {
		echo '<td><img src="users_uploads/user_no_photo.png" width="200" /></td>';
	  }
	  else{
		echo '<td><img src="users_uploads/'. $row['user_image'] .'" width="200" /></td>';
	  }
	  echo "</tr>";
      }
    echo "</table>";
	?>
	
	<br />
	<p><h3>Clik here to upload a photo <a href="user_photo_upload_form.php">here.</a></h3></p>
	<p><h3>If you like to update your details please clik <a href="user_update_form.php">here.</a></h3></p>
	<p><h3>To delete your account clik <a href="delete_user.php">here.</a></h3></p>
<?php
      
 	mysqli_close($sql_connect);
      
	
include ('footer.php'); ?>

