<!--********************************************
   SCRIBBLER:	TwoIslandS
   WEBSITE:	http://twoislands.net
   VERSION:	1.0 beta
 *****************************************-->

<?php include ('header.php'); ?>
      <h1>TwoIslandS' Address Book</h1>
       <form action ="authentication.php" method="post">
	  <p> Please use your credentials to login.<br>
	  <table border="0">
		  <tr>
		  <td>Username: </td>
		  <td> <input type="text" required="" name="username" maxlength="12" size="12"></td>
		  </tr>
		  <tr>
		  <td>Password: </td>
		  <td><input type="password" required="" name="password" maxlength="8" size="8"></td>
		  </tr>
		  <tr>
		  <td colspan="2"><input type="submit" value="Login">
		  </tr>
	  </table>
	</form>
	<?php include ('footer.php'); ?>