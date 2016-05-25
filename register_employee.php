<?php
require_once('connect.php');
$dbc = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die(mysql_error());
mysql_select_db(DB_NAME);

$firstname=mysql_real_escape_string(trim($_POST['firstname']),$dbc);
$lastname=mysql_real_escape_string($_POST['lastname'],$dbc);
$email=mysql_real_escape_string($_POST['email'],$dbc);
$password=mysql_real_escape_string($_POST['password'],$dbc);
$pass=md5($password);
$query = "SELECT * FROM register_emp WHERE email = '$email'";
$data = mysql_query($query,$dbc) or die(mysql_error());
if (mysql_num_rows($data) == 0) 
{
//if unique username,then register
$query1="INSERT into register_emp(firstname,lastname,email,password) VALUES('$firstname','$lastname','$email','$pass')";
mysql_query($query1,$dbc) or die(mysql_error());
    header('Location: index2.html');
	//echo 'Successful registration!';
}
else
{ 
// An account already exists for this username, so display an error message
        //echo '<p class="error">An account already exists for this username. Please use a different address.</p>';
    echo '<script type="text/javascript">'
   , 'setTimeout();'
   , '</script>';
}
mysql_close();
?>
<script type="text/javascript">
setTimeout(function () {

	alert('An account already exists for this user name!Please use another id');
   window.location.href= 'index.html'; // the redirect goes here

},2000); // 5 seconds


</script>