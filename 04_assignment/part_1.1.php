<!********************************************
   SCRIBBLER:	TwoIslandS
   WEBSITE:	http://twoislands.net
   VERSION:	1.0 beta
 *****************************************-->
<?
//create a new session
  session_start();
?>

<html>
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <link rel="stylesheet" href="04_KALANTZIS_DIONYSIOS/styles/style.css" type="text/css" />
  <title>Εργασία 4</title></head>
  <body>
    <div id="wrap">
      <h1 id="header">Assignment 4</h1>
      <h2 id="logo">Exercise 1</h2>
      <h3 id="slogan">Web form</h3>
      
      <?php
      $_SESSION['firstname']=$_POST['firstname'];
      $_SESSION['surname']=$_POST['surname'];
      $_SESSION['email']=$_POST['email'];
      $_SESSION['phone_number']=$_POST['phone_number'];
      
      if (empty($_SESSION['firstname']) || empty($_SESSION['surname']) || empty($_SESSION['email']) || empty($_SESSION['phone_number'])){
	
	print '<script type="text/javascript">'; 
	print 'alert("Please fill out all the boxes")'; 
	print '</script>';
	header ("Location: part_1..html");
      }
      else{
	echo "First name: ".$_SESSION['firstname']=$_POST['firstname']. "<p>";
	echo "Last name : ".$_SESSION['surname']=$_POST['surname']. "<p>";
	echo "E-mail: ".$_SESSION['email']=$_POST['email']. "<p>";
	echo "Contact number: ".$_SESSION['phone_number']=$_POST['phone_number']. "<p>";
	}
      ?>
      <p>Would you like to terminate your session now? </p>
      <!--Below is a form for the user to end his session -->
      <form action="part_2.php" method="get">
	<select name="session_status">
	<option value="Yes">Yes</option>
	<option value="No">No</option>
	</select>
	<input type="submit" value="Submit"></form>
      
      <p><a href="home.html">Home</a>
    </div>
  </body>
</html>