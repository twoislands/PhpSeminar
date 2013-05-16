<!--********************************************
   SCRIBBLER:	TwoIslandS
   WEBSITE:	http://twoislands.net
   VERSION:	1.0 beta
 *****************************************-->
<?
//create a new session
  session_start();
?>

<?php include ('header.php'); ?>
  <body>
      <h1>TwoIslandS' Address Book</h1>
       <form action ="register.php" method="post">
	  <p> Please fill out the following form to register with us.<br>
	  <table border="0">
	  <tr>
	  <td>First name: </td>
	  <td><input type="text" required="" name="fname" maxlength="15" size="15"></td>
	  </tr>
	  <tr>
	  <td>Last name: </td>
	  <td><input type="text" required="" name="sname" maxlength="30" size="30"></td>
	  </tr>
	  <tr>
	  <td>Username: </td>
	  <td><input type="text" required="" name="username" maxlength="30" size="30"></td>
	  </tr>
	  <tr>
	  <td>Password: </td>
	  <td><input type="password" required="" name="password" maxlength="8" size="8"></td>
	  </tr>
	  <tr>
	  <td>Confirm password: </td>
	  <td><input type="password" required="" name="confirm_pass" maxlength="8" size="8"></td>
	  </tr>
	  <tr>
	  <td>Email: </td>
	  <td><input type="email" required="" name="email" maxlength="20" size="20"></td>
	  </tr>
	  <tr>
	  <td colspan="2"><input type="submit" value="Register"> <input type="reset">
	  </tr>
	  </table>
	  <?php
	     if (isset($_SESSION['password'], $_SESSION['confirm_pass'])) {
	      if ($_SESSION['password'] != $_SESSION['confirm_pass']) {
		ob_start();
		print '<script type="text/javascript">'; 
		print 'alert("Passwords did not match")'; 
		print '</script>';
		ob_end_flush();  
	      }
	     }
	  ?>
	</form>
	<?php include ('footer.php'); ?>
	
