<?php
session_start();
// If the session vars aren't set, try to set them with a cookie
  if (!isset($_SESSION['ID'])) {
    if (isset($_COOKIE['ID']) && isset($_COOKIE['email'])) {
     // $_SESSION['user_id'] = $_COOKIE['user_id'];
      //$_SESSION['username'] = $_COOKIE['username'];
    }
  }
  if (!isset($_SESSION['ID'])) {
    echo '<p class="login">Please <a href="index.html">log in</a> to access this page.</p>';
    exit();
  }
  else {
    echo('<p class="login">You are logged in as ' . $_SESSION['email'] . '</p>');
  }
  require_once('uploadvars.php');
  require_once('connect.php');

if(isset($_POST['btn-upload']))
{    
     echo "hi";
 $file = rand(1000,100000)."-".$_FILES['file']['name'];                                                      //rand(1000,100000)."-".$_FILES['file']['name'];
$file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $temp = explode(".",$_FILES['file']['name']);
$newfilename = rand(1,99999) . '.' .end($temp);
echo $newfilename;
 $folder="cv/";
 if($file_type=="application/pdf" || $file_type=="application/docx" && $file_size>=0 && $file_size<=9485760)
 {
  echo "bye";
  move_uploaded_file($_FILES['file']['tmp_name'],$folder . $newfilename);
 //move_uploaded_file($file_loc,$folder.$file);
 //$sql="UPDATE register_emp(picture,p_type,p_size) VALUES('$newfilename','$file_type','$file_size') WHERE ID='" . $_SESSION['ID'] . "'";
  $dbc = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die(mysql_error());
mysql_select_db(DB_NAME);
 $sql="UPDATE register_emp SET cvname='$newfilename',cvtype='$file_type',cvsize='$file_size' WHERE ID='" . $_SESSION['ID'] . "'";
 mysql_query($sql) or die(mysql_error()); 
 echo "File successfully uploaded";
 mysql_close();
}
else
{
 echo "Error occured";
}
}
?>