<?php 
/*********************************************
   SCRIBBLER:	TwoIslandS
   WEBSITE:	http://twoislands.net
   VERSION:	1.0 beta
 *********************************************/

include ('header.php');
include ('mysql_connection&check.php');

$result = mysqli_query($sql_connect,"SELECT * FROM CONTACTS");

    echo "<table border='1'>
    <tr>
    <th>ContactID</th>
    <th>Firstname</th>
    <th>Lastname</th>
	<th>Phone</th>
	<th>Address</th>
    </tr>";

    while($row = mysqli_fetch_array($result))
      {
      echo "<tr>";
      echo "<td>" . $row['contactsID'] . "</td>";
      echo "<td>" . $row['con_fname'] . "</td>";
      echo "<td>" . $row['con_sname'] . "</td>";
	  echo "<td>" . $row['con_phone'] . "</td>";
	  echo "<td>" . $row['con_address'] . "</td>";
      echo "</tr>";
      }
    echo "</table>";

    mysqli_close($sql_connect);
    
    include ('footer.php'); ?>

