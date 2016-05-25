<?php

session_start();

$arrayques=$_SESSION['arrayques'];
function showprevious($arrayques)
{
  if($_SESSION['question_counter']>0 && $_SESSION['question_counter']<=$_SESSION['questionarraysize'])

{
  $_SESSION['question_counter']=$_SESSION['question_counter']-1;
  
  echo '<div id = "question_no" class=" form-group" class = "quest">';
  //echo '<form id=myForm>';
  echo'<table class="card table table-bordered table-hover" style="width:60%; float:center; margin-top:70px;" align="center">';
  echo '<th colspan="2">Q';
  echo $_SESSION['question_counter']+1;      
   echo $arrayques[$_SESSION['question_counter']][0]; echo '</th><tr><td>';
  $a=0;
  if(isset($_SESSION['ans'][$_SESSION['question_counter']])){
  $a=$_SESSION['ans'][$_SESSION['question_counter']];
  }
  
  echo '
  <label class="radio" style="font-weight:normal;font-size:14px;width:100%;height:100%">
    <input '; 
      if ($a==1){echo ' checked="checked"';}
   echo ' type="radio" id="check1" name="answer" value= "1">
    <span class="outer"><span class="inner"></span></span>'.$arrayques[$_SESSION['question_counter']][1].'</label></td><td>';
  echo '
  <label class="radio" style="font-weight:normal;font-size:14px;width:100%;height:100%">
    <input'; 
      if ($a==2){echo ' checked="checked"';}
  echo ' type="radio" id="check2" name="answer" value= "2">
    <span class="outer"><span class="inner"></span></span>'.$arrayques[$_SESSION['question_counter']][2].'</label></td></tr><tr><td>';
  echo '
  <label class="radio" style="font-weight:normal;font-size:14px;width:100%;height:100%">
    <input'; 
      if ($a==3){echo ' checked="checked"';}
   echo ' type="radio" id="check3" name="answer" value= "3">
    <span class="outer"><span class="inner"></span></span>'.$arrayques[$_SESSION['question_counter']][3].'</label></td><td>';
  echo '
  <label class="radio" style="font-weight:normal;font-size:14px;width:100%;height:100%">
    <input'; 
      if ($a==4){echo ' checked="checked"';}
   echo ' type="radio" id="check4" name="answer" value= "4">
    <span class="outer"><span class="inner"></span></span>'.$arrayques[$_SESSION['question_counter']][4].'</label></td>';
   echo '</table>';
  echo '</div>';



  
  //echo "sessionquestioncounter"; echo $_SESSION['question_counter'];
}

  else 
  {
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

  echo '</div>';

}
}

showprevious($arrayques);

?>