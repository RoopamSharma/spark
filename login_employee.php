<?php
// Start the session
  session_start();
 require_once('connect.php');
  // Clear the error message
  $error_msg = "";
//echo "g";
if (!isset($_SESSION['ID'])) {
 //echo "ok";

$dbc = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die(mysql_error());
mysql_select_db(DB_NAME);
echo "test";
$email1=mysql_real_escape_string(trim($_POST['email']),$dbc);
$password1 = mysql_real_escape_string(trim($_POST['password']),$dbc);
$pass1=md5($password1);

if(isset($email1) && isset($pass1))
{
//echo "m";
$query="SELECT * from register_emp where email='$email1' and password='$pass1'";
$result=mysql_query($query,$dbc);
//echo "po";
if(mysql_num_rows($result)==1 )
{
$row=mysql_fetch_array($result);
$_SESSION['ID'] = $row['ID'];
$_SESSION['email']=$row['email']; 
$_SESSION['difficulty_level']='1';
    $_SESSION['category']="LINUX DEBUGGING";
$_SESSION['subcategory']="RED HAT";
$_SESSION['subsubcategory']="open source";
setcookie('user_id', $row['ID'], time() + (60 * 60 * 24 * 30));    // expires in 30 days
setcookie('email', $row['email'], time() + (60 * 60 * 24 * 30));  // expires in 30 days
/*setcookie('category',$row['category'],time() + (60 * 60 * 24 * 30));
setcookie('subcategory',$row['subcategory'],time() + (60 * 60 * 24 * 30));
setcookie('subsubcategory',$row['subsubcategory'],time() + (60 * 60 * 24 * 30));*/

header('location: finaluserprofile.php');
}
else
{
echo 'Username or password is wrong';
}
}

mysql_close();

}
else
{
//echo"got it,already logged in";
header('location: finaluserprofile.php');
}
?>