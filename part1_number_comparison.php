<!********************************************
   SCRIBBLER:	TwoIslandS
   WEBSITE:	http://twoislands.net
   VERSION:	1.0 beta
 *****************************************-->

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Εργασία 3</title>
<head>
<body>
<h1>Assignment 3</h1>
<h2>Exercise 1</h2>
<h3>Comparison of two numbers</h3>

<?php

// $default_values = array ( array(23, 3), array(10, 10), array(5,2));
$default_values = array ( array(23, 10, 5), array(3, 10, 2));
$result_array = array('result', 'result', 'result');
$first_number = $_POST['first_number'];
$second_number = $_POST['second_number'];

if (empty($first_number) || empty($second_number)) {
echo  "You have not insert any nuymbers therefore I will procced on the comparison of the default values. <br><br />";
for ($column = 0; $column < 2; $column++){
for ($row = 0; $row < 3; $row ++){
for ($i = 0; $i < 3; $i++){
// if ($default_values[$row][$column] > $default_values[$row][$column]){
// $result_array[$i]='The value on the left is greater that the value on the right';
// }
// else{
// $result_array[$i]='The value on the left is equal or smaller that the value on the right';
// }
}
}
}
for ($column = 0; $column < 2; $column++){
for ($row = 0; $row < 3; $row ++){
for ($i = 0; $i < 3; $i++){
echo '|'.$default_values[$row][$column];	
}
echo '| => <br />';
}
}
}
?>
</body>
</html>