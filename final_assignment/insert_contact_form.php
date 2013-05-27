<?php 
/*********************************************
   SCRIBBLER:	TwoIslandS
   WEBSITE:	http://twoislands.net
   VERSION:	1.0 beta
 *********************************************/

include ('header.php'); 
if (isset($_SESSION['username'])){
	?>
  <body>
      <h1>TwoIslandS' Address Book</h1>
    <form action ="contact_insertion.php" method="post">
	  <p> Please fill out the following form to insert a new contact.<br>
	  <table border="0">
	  <tr>
	  <td>First name: </td>
	  <td><input type="text" required="" name="con_fname" maxlength="15" size="15"></td>
	  </tr>
	  <tr>
	  <td>Last name: </td>
	  <td><input type="text" required="" name="con_sname" maxlength="30" size="30"></td>
	  </tr>
	  <tr>
	  <td>Phone number: </td>
	  <td><input type="text" required="" name="con_phone" maxlength="10" size="10"></td>
	  </tr>
	  <tr>
	  <td>Address: </td>
	  <td><input type="text" required="" name="con_address" maxlength="20" size="20"></td>
	  </tr>
	  <tr>
	  <td colspan="2"><input type="submit" value="Insert"> <input type="reset">
	  </tr>
	  </table>
	</form>
<?php
	
	}
	else{
		header('location: invalid_access.php');
	}
	
include ('footer.php'); ?>
	
