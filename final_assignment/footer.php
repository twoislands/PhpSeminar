<?php
/*****************************************
   SCRIBBLER:	TwoIslandS
   WEBSITE:	http://twoislands.net
   VERSION:	1.0 beta
 *****************************************/
 ?>
<br />
<p><a href="home.php">Home</a> <a href="search_form.php">Search</a>

<?php
	if (isset($_SESSION['username'])){
		/*if (administrator){
			echo <a href="users.php">Users</a> 
		} */
	echo '<a href="logout.php">Logout</a>'." ".'<a href="members_site.php">Profile</a>' ;
	}
	else{
	 echo '<a href="registration_form.php">Register</a> <a href="login.php">Login</a>';
	}
	  ?>

  </body>
</html>