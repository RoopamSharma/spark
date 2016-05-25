<?php 
session_start();
include_once ("connect.php");
$dbc = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die(mysql_error());
 mysql_select_db(DB_NAME);
 /*echo "<pre>";
 print_r($_SESSION);
 echo "<br/>";
 print_r($_POST);
 die();
 */
 //echo 'Hi';
 if(isset($_POST['submit']))
 	{
	//echo "hr";
$f=mysql_real_escape_string($_POST['fn']);
$l=mysql_real_escape_string($_POST['ln']);
$g=mysql_real_escape_string($_POST['g']);
$d=mysql_real_escape_string($_POST['d']);
$city=mysql_real_escape_string($_POST['city']);
$query="UPDATE register_emp set firstname='$f',lastname='$l',gender='$g',birthdate='$d',city='$city' WHERE ID = '" . $_SESSION['ID'] . "'";
$data=mysql_query($query,$dbc) or die(mysql_error());
//echo "Updated";
}
//echo 'bye';
header('Location:finaluserprofile.php');
?>