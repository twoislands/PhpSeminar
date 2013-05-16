<!********************************************
   SCRIBBLER:	TwoIslandS
   WEBSITE:	http://twoislands.net
   VERSION:	1.0 beta
 *****************************************-->

<?php include ('header.php');
     
include ('mysql_connection&check.php');

    $result = mysqli_query($sql_connect,"SELECT * FROM USERS");

    echo "<table border='1'>
    <tr>
    <th>UserID</th>
    <th>Firstname</th>
    <th>Lastname</th>
    </tr>";

    while($row = mysqli_fetch_array($result))
      {
      echo "<tr>";
      echo "<td>" . $row['userID'] . "</td>";
      echo "<td>" . $row['fname'] . "</td>";
      echo "<td>" . $row['sname'] . "</td>";
      echo "</tr>";
      }
    echo "</table>";

    mysqli_close($sql_connect);
    
    include ('footer.php'); ?>

