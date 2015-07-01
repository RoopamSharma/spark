<?php
// Start the session
  session_start();
 require_once('connect.php');
  // Clear the error message
  $error_msg = "";
//echo "g";
if (!isset($_SESSION['employerid'])) {
//echo "ok";

$dbc = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die(mysql_error());
mysql_select_db(DB_NAME);
//echo "test";
$emailco=mysql_real_escape_string(trim($_POST['username']),$dbc);
$passwordco = mysql_real_escape_string(trim($_POST['password']),$dbc);
$passco=md5($passwordco);

if(isset($emailco) && isset($passco))
{
//echo "m";
$query="SELECT * from employer where co_email='$emailco' and co_passwd='$passco'";
$result=mysql_query($query,$dbc) or die(mysql_error());

//echo "po";
if(mysql_num_rows($result)==1 )
{
$row=mysql_fetch_array($result);
$_SESSION['employerid'] = $row['employerid'];
$_SESSION['email']=$row['co_email']; 
setcookie('employerid', $row['employerid'], time() + (60 * 60 * 24 * 30));    // expires in 30 days
setcookie('emailco', $row['co_email'], time() + (60 * 60 * 24 * 30));  // expires in 30 days
header('location: employerdash.php');
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
header('location:employerprofile.php');
echo"got it,already logged in";

}
?>