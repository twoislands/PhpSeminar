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
    <?php
      switch ($_GET['session_status'])
      {
      case "Yes":
      echo "You session has been terminated<p>";
      session_destroy();
      break;
      case "No":
      echo "You are still logged in<P>";
      break;
      }
    ?>
    <p><a href="ergasia_4.html">Home</a>
    </div>
  </body>
</html>