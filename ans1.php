<?php
session_start();
echo $_SESSION['ans'][$_POST['index']];
?>