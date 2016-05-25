<?php
require_once('connect.php');
$dbc = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die(mysql_error());
mysql_select_db(DB_NAME);

$name=mysql_real_escape_string(trim($_POST['name']),$dbc);
$coname=mysql_real_escape_string(trim($_POST['coname']),$dbc);
$coemail=mysql_real_escape_string(trim($_POST['coemail']),$dbc);
$cotype=mysql_real_escape_string(trim($_POST['cotype']),$dbc);
$about=mysql_real_escape_string(trim($_POST['about']),$dbc);
$password=mysql_real_escape_string(trim($_POST['copassword']),$dbc);
$pass=md5($password);
$query = "SELECT * FROM employer WHERE co_email = '$coemail'";
$data = mysql_query($query,$dbc);
if (mysql_num_rows($data) == 0) 
{
//if unique username,then register
$query1="INSERT into employer(name,co_name,co_email,co_type,co_about,co_passwd) VALUES('$name','$coname','$coemail','$cotype','$about','$pass')";
mysql_query($query1,$dbc) or die(mysql_error());
 //echo 'Successful registration!';

header('Location:employerstart.html');

echo  '<script type="text/javascript">'
   , 'show();'
   , '</script>';
        
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
   window.location.href= 'employerstart.html'; // the redirect goes here

},2000); // 5 seconds

</script>
<script type="text/javascript">
function()
{
	alert('Successful Registration! Now login !');
}
</script>