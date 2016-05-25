<?php

session_start();
$arrayques=$_SESSION['arrayques'];
/*
$questionarraysize=$_SESSION['questionarraysize'];
$question_counter=$_SESSION['question_counter'];
*/

//all session variables received, call them directly.

//echo $_POST['answer'];
//echo $answer;


function shownext($arrayques)
{
  //echo '<pre>';
  //print_r($_SESSION['arrayques']);
   
  $_SESSION['question_counter']= $_SESSION['question_counter']+1;

  if($_SESSION['arraysizeminusone']==$_SESSION['question_counter'])
  {
    echo $_SESSION['question_counter']."\n";

  header("location:result.php");
 }

  else

  {
   
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
    <input'; 
      if ($a==1){echo 'checked="checked"';}
   echo ' type="radio" id="check1" name="answer" value= "1">
    <span class="outer"><span class="inner"></span></span>'.$arrayques[$_SESSION['question_counter']][1].'</label></td><td>';
  echo '
  <label class="radio" style="font-weight:normal;font-size:14px;width:100%;height:100%">
    <input'; 
      if ($a==2){echo ' checked="checked"';}
  echo ' type="radio" id="check1" name="answer" value= "2">
    <span class="outer"><span class="inner"></span></span>'.$arrayques[$_SESSION['question_counter']][2].'</label></td></tr><tr><td>';
  echo '
  <label class="radio" style="font-weight:normal;font-size:14px;width:100%;height:100%">
    <input'; 
      if ($a==3){echo ' checked="checked"';}
   echo ' type="radio" id="check1" name="answer" value= "3">
    <span class="outer"><span class="inner"></span></span>'.$arrayques[$_SESSION['question_counter']][3].'</label></td><td>';
  echo '
  <label class="radio" style="font-weight:normal;font-size:14px;width:100%;height:100%">
    <input'; 
      if ($a==4){echo ' checked="checked"';}
   echo ' type="radio" id="check1" name="answer" value= "4">
    <span class="outer"><span class="inner"></span></span>'.$arrayques[$_SESSION['question_counter']][4].'</label></td>';
   echo '</table>';
  //echo '</form>';
  echo '</div>';



  
  /*echo '<input type="submit" id="submitbutton" class="button" onClick= "nextques();" name="next1" value="NEXT QUESTION" />';
  echo '<input type="submit" class="button" onClick= "previousques();" name="previous1" value="PREVIOUS QUESTION" />';
  echo '<input type="submit" class="button" onClick= "skipquestion();" name="skip1" value="SKIP QUESTION" />';
  echo '<input type="submit" class="button" name="finish1" value="FINISH AND SEE RESULT" />';
*/
  
  //$_SESSION['question_counter']=$_SESSION['question_counter']+1;
  
 // echo "sessionquestioncounter"; echo $_SESSION['question_counter'];
}
}

shownext($arrayques);

?>


<!--<script type="text/javascript">
  var answers=[];

$('input[type=radio]').click(function()
{
    var id = ($(this).parent().attr('id'));
    id = id.slice(4);
    $('#nav'+id).css('color','red');
    answers.push($(this).val());
    alert(answers);

    //implemented, getting in array. putting in nextques.php 12:29S

   $.ajax({
   type: 'POST',
   data: {answers : answers},
   url: 'start_test.php',
   success: function(data) {alert('hi');},
   error: function() {alert('ho');}


});
});




</script>

-->
