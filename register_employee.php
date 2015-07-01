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

	echo 'Successful registration!';
}
else
{ 
// An account already exists for this username, so display an error message
        echo '<p class="error">An account already exists for this username. Please use a different address.</p>';
        
}
mysql_close();
?>
