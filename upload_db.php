
<?php
$dbc=mysqli_connect('localhost','root','zxcv','jobseeker') or die('Database Connection error');
echo "enter";

if(isset($_POST['upload']) && $_FILES['userfile']['size'] > 0)
{
	echo "Still fine";
$fileName = $_FILES['userfile']['name'];
$tmpName  = $_FILES['userfile']['tmp_name'];
$fileSize = $_FILES['userfile']['size'];
$fileType = $_FILES['userfile']['type'];

$fp      = fopen($tmpName, 'r');
$content = fread($fp, filesize($tmpName));
$content = addslashes($content);
fclose($fp);
echo "Strong";
if(!get_magic_quotes_gpc())
{
    $fileName = addslashes($fileName);
}
if($_FILES['userfile']['type']=="application/pdf") //uploads only pdf files
{
	echo "Stronger";
$query = "INSERT INTO register_emp (cvname, cvsize, cvtype, cvcontent ) ".
"VALUES ('$fileName', '$fileSize', '$fileType', '$content')";
echo "stonger-er";
mysqli_query($dbc,$query) or die('Error, query failed'); 
mysqli_close($dbc);

echo "<br>File $fileName uploaded<br>";
}
else
{ echo ' Invalid file type! Only .pdf allowed';}
} 
echo "hil";
mysqli_close($dbc);

?>