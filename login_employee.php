<?php
$dbc=mysqli_connect('localhost','root','','spark') or die('Database Connection error');
$email1=$_POST['email'];
$password1=crypt($_POST['password']);
if(isset($email1) && isset($password1))
{
session_start();


$_SESSION['login_user']=$email1;
$query="SELECT * from register_emp where email='$email1' and password='$password1' ";
$result=mysqli_query($dbc,$query) or die('Error in querying');
if(mysqli_num_rows($result)!=1)
{
echo 'Username and password is wrong';

}
else
{
echo 'Successful Login';
$_SESSION['login_user']=$email1; 
header("location: profile.php");
}
}
mysqli_close($dbc);

?>