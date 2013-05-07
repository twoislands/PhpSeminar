<!********************************************
   SCRIBBLER:	TwoIslandS
   WEBSITE:	http://twoislands.net
   VERSION:	1.0 beta
 *****************************************-->

<html>
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <link rel="stylesheet" href="04_KALANTZIS_DIONYSIOS/styles/style.css" type="text/css" />
  <title>Εργασία 4</title></head>
  <body>
  <div id="wrap">
    <?php
      switch ($_GET['cookie_status'])
      {
      case "Yes":
      echo "Your cookie (".$_COOKIE["username"].") has been expired<p>";
      setcookie("username",$_COOKIE["username"], time()-7200);
      break;
      case "No":
      echo "You are still logged in<P>";
      break;
      }
    ?>
    <p><a href="home.html">Home</a>
  </div>
  </body>
</html>