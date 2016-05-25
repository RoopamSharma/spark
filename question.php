<?php
session_start();
$a=$_POST['ques'];
$_SESSION['question_counter']=$a-1;
echo $_SESSION['question_counter'];
?>