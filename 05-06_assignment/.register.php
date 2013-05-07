<!DOCTYPE >
<!********************************************
   SCRIBBLER:	TwoIslandS
   WEBSITE:	http://twoislands.net 
   VERSION:	1.0.1 beta
 *****************************************-->

<?php require ('headers.php'); ?>

    <div id="main"> <a name="TemplateInfo"></a>
      <div class="box">
        <br/>
		<form id="regform" action="registration.php" method="post"><br/>
			<p><label for="user">Username:</label>
				<input type="text" name="user" class="inputbox"/></p>
			<p><label for="pass">Κωδικός:</label>
				<input type="password" name="pass" class="inputbox"/></p>
			<p><label for="repass">Επαλήθευση Kωδικού:</label>
				<input type="password" name="repass" class="inputbox"/></p>
			<p><label for="fname">Όνομα:</label>
				<input type="text" name="fname" class="inputbox"/></p>
			<p><label for="lname">Επίθετο:</label>
				<input type="text" name="lname" class="inputbox"/></p>
			<br/>
			<p> <input type="submit" name="submitbutton" id="submitbutton" color=rgb(13, 48, 109) value="Εγγραφή"/>
		</form>
      </div>
      
    <?php require ('footers.php'); ?>