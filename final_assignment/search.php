<?php 
/******************************************
   SCRIBBLER:	TwoIslandS
   WEBSITE:	http://twoislands.net
   VERSION:	1.0 beta
 *****************************************/

include ('header.php');
$search_fname = $_POST['search_fname'];
$search_sname = $_POST['search_sname'];
$search_phone = $_POST['search_phone'];
$search_address = $_POST['search_address'];

include ('mysql_connection&check.php');

$no_q = FALSE;

$q = "SELECT * FROM `CONTACTS` WHERE ";

if ( $search_phone != '' || $search_fname!='' ){
	$no_q = TRUE;
	}
if ( $search_fname != '' ){
	$q .= " con_fname LIKE '%$search_fname%' AND "; 
	}
if ( $search_sname != '' ){
	$q .= " con_sname LIKE '%$search_sname%' AND "; 
	}
if ( $search_phone != '' ){
	$q .= " con_phone='$search_phone' AND ";
	}
if ( $search_address != '' ){
	$q .= " con_address LIKE '%$search_address%' AND ";
	}

if ($no_q){

	$q = substr($q, 0, -4);  

	echo $q ."<br/>";
	echo "<table border='1'>
    <tr>
    <th>ContactID</th>
    <th>Firstname</th>
    <th>Lastname</th>
	<th>Phone</th>
	<th>Address</th>
    </tr>";

	$result = mysqli_query($sql_connect, $q);
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
	
}
else{
 echo "You need to insert at least Firstname or Phone number";
 echo '<meta http-equiv="refresh" content="3;url=search_form.php">';
}

include ('footer.php'); ?>