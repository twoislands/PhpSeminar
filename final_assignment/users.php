<?php 
/*********************************************
   SCRIBBLER:	TwoIslandS
   WEBSITE:	http://twoislands.net
   VERSION:	1.0 beta
 *********************************************/

include ('header.php');
include ('mysql_connection&check.php');

$result = mysqli_query($sql_connect,"SELECT * FROM USERS");

    echo "<table border='1'>
    <tr>
    <th>UserID</th>
    <th>Firstname</th>
    <th>Lastname</th>
	<th>Username</th>
	<th>Password</th>
    </tr>";

    while($row = mysqli_fetch_array($result))
      {
      echo "<tr>";
      echo "<td>" . $row['userID'] . "</td>";
      echo "<td>" . $row['fname'] . "</td>";
      echo "<td>" . $row['sname'] . "</td>";
	  echo "<td>" . $row['username'] . "</td>";
	  echo "<td>" . $row['password'] . "</td>";
      echo "</tr>";
      }
    echo "</table>";

    mysqli_close($sql_connect);
    
    include ('footer.php'); ?>

