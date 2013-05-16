<!********************************************
   SCRIBBLER:	TwoIslandS
   WEBSITE:	http://twoislands.net
   VERSION:	1.0 beta
 *****************************************-->
    
    <?php $sql_connect = mysqli_connect("localhost", "root", "qweasd", "address_book");
      
      if (mysqli_connect_errno()) {
	echo 'Error: Could not connect to database. '.mysqli_connect_error();
	exit;
      }
      ?>