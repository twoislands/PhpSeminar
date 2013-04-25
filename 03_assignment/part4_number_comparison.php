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
<h2>Exercise 4</h2>
<h3>Name of the day</h3>

<?php

//Below are 7 functions, one for each day of the week. 
//Each function simply prints on the client browser a message on the current day.
function monday(){
echo "Today is Monday";}
function tuesday(){
echo "Today is Tuesday";}
function wednesday(){
echo "Today is Wednesday";}
function thursday(){
echo "Today is Thursday";}
function friday(){
echo "Today is Friday";}
function saturday(){
echo "Today is Saturday";}
function sunday(){
echo "Today is Sunday";}

//The built-in function date is passing the current day in the variable $current_day.
$current_day = date("l");

//the switch statement is going to much the current day with the function and execute the function.
switch ($current_day){
case "Monday": monday();
break;
case "Tuesday": tuesday();
break;
case "Wednesday": wednesday();
break;
case "Thursday": thursday();
break;
case "Friday": friday();
break;
case "Saturday": saturday();
break;
case "Sunday": sunday();
break;
}

//A goodbye message is printed on the client's browser.
echo '<br><br />Thank you and goodbye!';
?>
</body>
</html>