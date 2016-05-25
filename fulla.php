<html>
<head>
    
<link href="../ims/bootstrap/css/bootstrap.css" type="text/css" rel="stylesheet" />
<link href="../ims/bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
</head>
<body style="font-family:'Comfortaa', cursive;background-image:url(images/Untitled1.jpg)">
<?php
session_start();
?>
<?php 
include "header1.php";
include 'include/connection.php';
 if(isset($_GET['q'])){
    
    ?>
<?php
$k=$_GET['q'];
$sql=mysql_query("select * from userresult where test_id='$k'");
echo '<table class="table table-bordered table-hover form-control" style="width:60%;margin-top:100px" align="center">';
echo '<th>Questions</th>';
echo '<th>Given Answers</th>';
echo '<th>Correct Answer</th>';
$re=mysql_fetch_assoc($sql);
$q=explode('|',$re['questions']);
$g=explode('|',$re['selectedanswers']);
$c=explode('|',$re['correctanswers']);
$x=sizeof($q);
for($i=0;$i<$x;$i++){
echo '<tr><td>'.$q[$i].'</td>';
    if(!isset($g[$i])){
echo '<td>Not Attempted</td>';
    }else{
    if($g[$i]==0){
echo '<td>Not Attempted</td>';
    
    }
    
        else{
echo '<td>'.$g[$i].'</td>';
        }}
echo '<td>'.$c[$i].'</td></tr>';

}
echo '<tr><td >Your Score (percentage):</td><td colspan=2>'.$re['score'].'</td></tr>';
 }
     else{

header("Location:finaluserprofile.php");
}
    ?>                      																																																																																						