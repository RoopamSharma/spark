<link href="bootstrap.css" rel="stylesheet" type="text/css" />
<?php

session_start();
include("include/connection.php");
include("function/dbMySql.php"); 

if(isset($_REQUEST['test_id']))
{
$test_id= $_REQUEST['test_id'];
$_SESSION['test_id']=$test_id;
}

echo '</table>';

$fetchresultofuser=mysql_query("SELECT `questions`, `selectedanswers`,`correctanswers`  FROM `userresult` WHERE test_id = '$test_id'");
$rowcounter=0;
while($row=mysql_fetch_row($fetchresultofuser)) 
{ 
  $arrayresult[$rowcounter]=$row;
  $rowcounter++;
}
$ques=explode('|',$arrayresult[0][0]);
$ans=explode('|',$arrayresult[0][1]);
$cans=explode('|',$arrayresult[0][2]);
$n=count($ques);

echo '<table class="table table-bordered table-hover" style="margin-top:60px" >';
echo '<th>Question</th>';
echo '<th>Given Answer</th>';
echo '<th>Correct Answer</th>';
for($i=0;$i<$n;$i++){
	echo '<tr><td>'.$ques[$i].'</td><td>'.$ans[$i].'</td><td>'.$cans[$i].'</td></tr>';
	}
echo '</table>'
?>