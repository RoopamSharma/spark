<?php
$eduid=$_GET['id'];
include_once("connect.php");
$dbc = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die(mysql_error());
mysql_select_db(DB_NAME);
$q1=mysql_query("select * from education where edu_id='$eduid'");
$fetch=mysql_fetch_assoc($q1);
$r=$fetch;
echo json_encode($r);
?>
