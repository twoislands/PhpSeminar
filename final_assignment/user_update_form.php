<!********************************************
   SCRIBBLER:	TwoIslandS
   WEBSITE:	http://twoislands.net
   VERSION:	1.0 beta
 *****************************************-->

<?php include ('header.php');
      <form action ="user_update.php" method="post">
	  <p> Fill out the following form to update your details.<br>
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
	  <td colspan="2"><input type="submit" value="Update"> <input type="reset">
	  </tr>
	  </table>
	</form>
	

include ('footer.php'); ?>

