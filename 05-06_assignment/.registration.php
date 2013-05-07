<!********************************************
   SCRIBBLER:	TwoIslandS
   WEBSITE:	http://twoislands.net 
   VERSION:	1.0.1 beta
 *****************************************-->

<?php
$user=$_POST['user'];
$pass=$_POST['pass'];
$repass=$_POST['repass'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];

if ($pass != $repass || empty($pass))
{
    print '<script type="text/javascript">'; 
    print 'alert("Password does not match. Please try again")';
    print '</script>';
//     header ("Location: register.php");
}

 
?>