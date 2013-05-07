<!********************************************
   SCRIBBLER:	TwoIslandS
   WEBSITE:	http://twoislands.net 
   VERSION:	1.0.1 beta
 *****************************************-->



<?php require ('headers.php');
$con=mysqli_connect("example.com","root","123..","azulmediadb");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT * FROM STYLE");

echo "<table border='1'>
<tr>
<th>Option 1</th>
<th>Option 2</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['color'] . "</td>";
  echo "<td>" . $row['colot'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysqli_close($con);

require ('footers.php'); ?>