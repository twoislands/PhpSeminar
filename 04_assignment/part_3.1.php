<!********************************************
   SCRIBBLER:	TwoIslandS
   WEBSITE:	http://twoislands.net
   VERSION:	1.0 beta
 *****************************************-->
<?php
  setcookie("username",$_GET["username"], time()+3600);
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

    <?php
      $_COOKIE["username"] =$_GET["username"];
      $_COOKIE["password"] =$_GET["password"];
      
      if(empty($_COOKIE["username"]) || empty($_COOKIE["password"])){
	//Below is a pop up message with the help of a javascript
	print '<script type="text/javascript">'; 
	print 'alert("Incorrect username or password, please try again")'; 
	print '</script>';
	header ("Location: part_3.php");
      }
      else{
	echo "Welcome back ".$_COOKIE["username"] .".<br />";
	// I am displaying the password only to confirm that it has been passed through
	echo "Your password is ".$_COOKIE["password"] .".<br />";
      }
      
    ?>
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