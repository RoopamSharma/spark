<?php
$dbc=mysqli_connect('localhost','root','','spark') or die('Database Connection error');
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$password=crypt($_POST['password']);


$query="INSERT into register_emp(firstname,lastname,email,password) VALUES('$firstname','$lastname','$email','$password')";
mysqli_query($dbc,$query) or die(mysqli_error($dbc));

	echo 'Registration successful';

mysqli_close($dbc);
?>
