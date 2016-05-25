<?php
session_start();
$_SESSION['ans'][$_POST['index']]=$_POST['ans'];
echo $_SESSION['ans'][$_POST['index']];
?>