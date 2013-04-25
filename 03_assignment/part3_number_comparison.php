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
<h2>Exercise 3</h2>
<h3>User-defined function printValue()</h3>

<?php
$my_array = array (12, 2, 13, 5, 25, 30, 45);

//function to be made
function printValue($array, $array_item){
echo '<br>'.$array[$array_item].'<br />';
}
//for the size of the given array my function printValue() will be called
for ($i = 0; $i <count($my_array) ; $i++){
printValue($my_array, $i);
}
//A goodbye message is printed on the client's browser.
echo '<br><br />Thank you and goodbye!';
?>
</body>
</html>