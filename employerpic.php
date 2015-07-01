<!--<form method="post" enctype="multipart/form-data">
<table width="350" border="0" cellpadding="1" cellspacing="1" class="box">
<tr> 
<td width="246">
<input type="hidden" name="MAX_FILE_SIZE" value="2000000">
<input name="userfile" type="file" id="userfile"> 
</td>
<td width="80"><input name="upload" type="submit" class="box" id="upload" value=" Upload "></td>
</tr>
</table>
</form>
-->
<?php
  session_start();
  // If the session vars aren't set, try to set them with a cookie
  if (!isset($_SESSION['ID'])) {
    if (isset($_COOKIE['ID']) && isset($_COOKIE['email'])) {
     // $_SESSION['user_id'] = $_COOKIE['user_id'];
      //$_SESSION['username'] = $_COOKIE['username'];
    }
  }

$dbc=mysqli_connect('localhost','root','zxcv','jobseeker') or die('Database Connection error');
$target_dir = "images/";


if(isset($_POST['upload']) && $_FILES['userfile']['size'] > 0)
{
$fileName = $_FILES['userfile']['name'];
$tmpName  = $_FILES['userfile']['tmp_name'];
$fileSize = $_FILES['userfile']['size'];
$fileType = $_FILES['userfile']['type'];
$target_file = $target_dir . basename($_FILES['userfile']['name']);

$fp      = fopen($tmpName, 'r');
$content = fread($fp, filesize($tmpName));
$content = addslashes($content);
fclose($fp);

if(!get_magic_quotes_gpc())
{
    $fileName = addslashes($fileName);
}
if($_FILES['userfile']['type']=="image/jpeg"||"image/png") //uploads only image files
{
$query = "UPDATE employer SET logo='$content' WHERE employerid = '" . $_SESSION['employerid'] . "'";

mysqli_query($dbc,$query) or die('Error, query failed'); 
move_uploaded_file('userfile',$target_file);

mysqli_close($dbc);

echo "<br>File $fileName uploaded<br>";
}
else
	{ echo ' Invalid file type! Only .jpeg allowed';}
} 
?>