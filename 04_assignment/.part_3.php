<!********************************************
   SCRIBBLER:	TwoIslandS
   WEBSITE:	http://twoislands.net
   VERSION:	1.0 beta
 *****************************************-->
<?php
  setcookie("usename", "usename");
  setcookie("password", "password");

  if (!isset($_COOKIE["username"])){
  //Below is a pop up message with the help of a javascript
    print '<script type="text/javascript">'; 
    print 'alert("You are have not been authenticated. Please log in.")'; 
    print '</script>';
  }
  else{
  //Below is a pop up message with the help of a javascript
    print '<script type="text/javascript">'; 
    print 'alert("You are still logged in.")'; 
    print '</script>';
  }
?>

<html>
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <link rel="stylesheet" href="04_KALANTZIS_DIONYSIOS/styles/style.css" type="text/css" />
  <title>Εργασία 4</title></head>
  <body>

    <div id="wrap">
      <h1 id="header">Assignment 4</h1>
      <h2 id="logo">Exercise 3</h2>
      <h3 id="slogan">Authentication</h3>

      <p>Please log in.</p>
      <form action="part_3.1.php" "cookie_status.php" menthod="get">
	<p>Username: <INPUT TYPE="text" NAME="username" SIZE="12"></p>
	<p>Password : <INPUT TYPE="password" NAME="password" SIZE="12"></p>
	<input type="submit" value="Log in">
      </form>
      
      <!--Below is a form for the user to end his session -->
      <p>Would you like to terminate your session now? <p>
      <form action="cookie_status.php" method="get">
	<select name="cookie_status">
	<option value="Yes">Yes</option>
	<option value="No">No</option>
	</select>
	<input type="submit" value="Submit"></form>

    <p><a href="home.html">Home</a>

    </div>
  </body>
</html>