<html>
<head>

<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.6.1.min.js"></script>
<link href="../ims/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
</head>

<?php

session_start();

$arrayques=$_SESSION['arrayques'];
$_SESSION['arraysizeminustwo']=$_SESSION['arraysizeminusone']-1;

function skipquestion($arrayques)
{

  //echo '<pre>';
  //print_r($_SESSION['arrayques']);
  

  if($_SESSION['arraysizeminustwo'] == $_SESSION['question_counter']) //size is four corresponding index is 3
  {

  echo '<div id = "question_no" class=" form-group" class = "quest">';
  
  //echo '<form id=myForm>';
    echo'<table class=" table table-bordered table-hover" style="width:60%; float:center; margin-top:100px;" align="center">';
  echo '<th colspan="2">'; echo $arrayques[$_SESSION['arraysizeminustwo']][0]; echo '</th><tr><td>';
  
  echo $arrayques[$_SESSION['arraysizeminustwo']][1];
  echo '<input style=" float:left" class="radio" type="radio" id= "check1" name="answer" value= "1"/></td><td>'; 
  echo $arrayques[$_SESSION['arraysizeminustwo']][2];
  echo '<input style=" float:left"  class="radio" type="radio" id= "check2" name="answer" value= "2"/></td></tr><tr><td>'; 
  echo $arrayques[$_SESSION['arraysizeminustwo']][3];
  echo '<input style=" float:left"  class="radio" type="radio" id= "check3" name="answer" value= "3"/></td><td>'; 
  echo $arrayques[$_SESSION['arraysizeminustwo']][4];
  echo '<input style=" float:left"  class="radio" type="radio" id= "check4" name="answer" value= "4"/></td></tr>'; 
 
   echo '</table>';
}

  else

  {

  $_SESSION['question_counter']=$_SESSION['question_counter']+1;
  echo '<div id = "question_no" class=" form-group" class = "quest">';
  
  //echo '<form id=myForm>';
  echo'<table class=" table table-bordered table-hover" style="width:60%; float:center; margin-top:100px;" align="center">';
  echo '<th colspan="2">'; echo $arrayques[$_SESSION['question_counter']][0]; echo '</th><tr><td>';
  
  echo $arrayques[$_SESSION['question_counter']][1];
  echo '<input style=" float:left" class="radio" type="radio" id= "check1" name="answer" value= "1"/></td><td>'; 
  echo $arrayques[$_SESSION['question_counter']][2];
  echo '<input style=" float:left"  class="radio" type="radio" id= "check2" name="answer" value= "2"/></td></tr><tr><td>'; 
  echo $arrayques[$_SESSION['question_counter']][3];
  echo '<input style=" float:left"  class="radio" type="radio" id= "check3" name="answer" value= "3"/></td><td>'; 
  echo $arrayques[$_SESSION['question_counter']][4];
  echo '<input style=" float:left"  class="radio" type="radio" id= "check4" name="answer" value= "4"/></td></tr>'; 
 
   echo '</table>';


}
}


skipquestion($arrayques);


