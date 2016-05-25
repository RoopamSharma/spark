<?php

session_start();

$arrayques=$_SESSION['arrayques'];
/*
$questionarraysize=$_SESSION['questionarraysize'];
$question_counter=$_SESSION['question_counter'];
*/


//all session variables received, call them directly.


function shownext($arrayques)
{
  //echo '<pre>';
  //print_r($_SESSION['arrayques']);

  if($_SESSION['questionarraysize']==$_SESSION['question_counter'])
  {
  echo "Test finished";
  }

  else

  {

  echo '<div id = "question_no" class = "quest">';

  echo '<h3>'; echo $arrayques[$_SESSION['question_counter']][0]; echo '</h3>';
  
  echo $arrayques[$_SESSION['question_counter']][1]; 
  echo '<input class="radio" type="radio" name="A" value= "'; echo $arrayques[$_SESSION['question_counter']][1]; echo '"/>'; 
  echo $arrayques[$_SESSION['question_counter']][2];
  echo '<input class="radio" type="radio" name="B" value= "'; echo $arrayques[$_SESSION['question_counter']][2]; echo '"/>'; 
  echo $arrayques[$_SESSION['question_counter']][3];
  echo '<input class="radio" type="radio" name="C" value= "'; echo $arrayques[$_SESSION['question_counter']][3]; echo '"/>'; 
  echo $arrayques[$_SESSION['question_counter']][4];
  echo '<input class="radio" type="radio" name="D" value= "'; echo $arrayques[$_SESSION['question_counter']][4]; echo '"/>'; 

  echo '</div>';
  echo '<br>';
  $_SESSION['question_counter']=$_SESSION['question_counter']+1;
  echo $_SESSION['question_counter'];


}
}


function showprevious($arrayques)
{
if($_SESSION['question_counter']>=0 || $_SESSION['question_counter']<=4)
{

  echo '<div id = "question_no" class = "quest">';

  echo '<h3>'; echo $arrayques[$_SESSION['question_counter']][0]; echo '</h3>';
  
  echo $arrayques[$_SESSION['question_counter']][1]; 
  echo '<input class="radio" type="radio" name="A" value= "'; echo $arrayques[$_SESSION['question_counter']][1]; echo '"/>'; 
  echo $arrayques[$_SESSION['question_counter']][2];
  echo '<input class="radio" type="radio" name="B" value= "'; echo $arrayques[$_SESSION['question_counter']][2]; echo '"/>'; 
  echo $arrayques[$_SESSION['question_counter']][3];
  echo '<input class="radio" type="radio" name="C" value= "'; echo $arrayques[$_SESSION['question_counter']][3]; echo '"/>'; 
  echo $arrayques[$_SESSION['question_counter']][4];
  echo '<input class="radio" type="radio" name="D" value= "'; echo $arrayques[$_SESSION['question_counter']][4]; echo '"/>'; 

  echo '</div>';
  echo '<br>';
  $_SESSION['question_counter']=$_SESSION['question_counter']-1;
  echo $_SESSION['question_counter'];
}

}

shownext($arrayques);
showprevious($arrayques);




?>