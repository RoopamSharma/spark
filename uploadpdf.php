<form method="post" enctype="multipart/form-data">
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
<?php
$dbc=mysqli_connect('localhost','root','zxcv','jobseeker') or die('Database Connection error');

if(isset($_POST['upload']) && $_FILES['userfile']['size'] > 0)
{
$fileName = $_FILES['userfile']['name'];
$tmpName  = $_FILES['userfile']['tmp_name'];
$fileSize = $_FILES['userfile']['size'];
$fileType = $_FILES['userfile']['type'];

$fp      = fopen($tmpName, 'r');
$content = fread($fp, filesize($tmpName));
$content = addslashes($content);
fclose($fp);

if(!get_magic_quotes_gpc())
{
    $fileName = addslashes($fileName);
}
if($_FILES['userfile']['type']=="application/pdf") //uploads only pdf files
{
	$query = "UPDATE register_emp (cvname, cvsize, cvtype, cvcontent ) SET VALUES ('$fileName', '$fileSize', '$fileType', '$content') WHERE ID = '" . $_SESSION['ID'] . "'";
//$query = "INSERT INTO upload (name, size, type, content ) ".
//"VALUES ('$fileName', '$fileSize', '$fileType', '$content')";

mysqli_query($dbc,$query) or die('Error, query failed'); 
mysqli_close($dbc);

echo "<br>File $fileName uploaded<br>";
}
else
	{ echo ' Invalid file type! Only .pdf allowed';}
} 
?>