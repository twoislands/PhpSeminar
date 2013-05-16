<!********************************************
   SCRIBBLER:	TwoIslandS
   WEBSITE:	http://twoislands.net
   VERSION:	1.0 beta
 *****************************************-->

<?php include ('header.php');

  
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
      echo "</tr>";
      }
    echo "</table>";
	?>
	<p><h3>If you like to update your details please clik <a href="user_update_form.php">here.</a></h3></p>
	<p><h3>To delete your account clik <a href="delete_user.php">here.</a></h3></p>
<?php
      
 	mysqli_close($sql_connect);
      
	
include ('footer.php'); ?>

