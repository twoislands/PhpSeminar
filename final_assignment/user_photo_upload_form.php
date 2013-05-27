<?php 
/*********************************************
   SCRIBBLER:	TwoIslandS
   WEBSITE:	http://twoislands.net
   VERSION:	1.0 beta
 *********************************************/

include ('header.php'); ?>

<form action="user_photo_upload.php" method="post"
enctype="multipart/form-data">
<label for="file">Picture:</label>
<input type="file" name="file" id="file"><br>
<input type="submit" name="submit" value="Submit">
</form>

<?php include ('footer.php'); ?>