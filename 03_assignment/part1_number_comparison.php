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
$x = array(23, 10, 5);
$y = array(3, 10, 2);
$result_array = array('result', 'result', 'result');

echo "Below you can see the results for Exercise 1 of Assignment 3. <br><br />";

for ($i=0; $i<3; $i++){
if ($x[$i]>$y[$i]){
$result_array[$i] = 'The value on the left ('.$x[$i].') is greater that the value on the right ('.$y[$i].').';
}
else{
$result_array[$i] = 'The value on the left ('.$x[$i].') is equal or smaller that the value on the right ('.$y[$i].').';
}
echo '|'.$x[$i].'|'.$y[$i].'|';	
echo '=> '.$result_array[$i].'<br />';
}

//A goodbye message is printed on the client's browser.
echo '<br><br />Thank you and goodbye!';
?>
</body>
</html>