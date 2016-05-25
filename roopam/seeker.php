<link href='http://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
<link href="bootstrap.css" rel="stylesheet" type="text/css">

<?php
include 'include/connection.php';
include 'func.php';
$b=$_GET['q'];
$a=new seeker();
$a->profile($b); 
?>