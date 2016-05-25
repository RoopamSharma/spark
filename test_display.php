<!--codemonkey last updated: 15-07-2015  o_x -->

<?php
session_start();
include("include/connection.php");
include("function/dbMySql.php"); 

/*if(isset($_REQUEST['category']))
{
//$category= $_REQUEST['category'];
//$_SESSION['category']=$category;
//$subcategory =$_REQUEST['subcategory'];
///$subsubcategory =$_REQUEST['subsubcategory'];
//$_SESSION['subsubcategory']=$subsubcategory;
//$difficulty_level=$_REQUEST['difficulty_level'];
//$_SESSION['difficulty_level']=$difficulty_level;
}
*/
if(isset($_SESSION['category'])&&isset($_SESSION['subcategory'])&&isset($_SESSION['subsubcategory'])&&isset($_SESSION['difficulty_level'])&&isset($_SESSION['email'])){
  $category=$_SESSION['category'];
  $subcategory=$_SESSION['subcategory'];
  $subsubcategory=$_SESSION['subsubcategory'];
  $difficulty_level=$_SESSION['difficulty_level'];



if($difficulty_level==1)
{
  $query1 =  mysql_query(" SELECT `numberques1` FROM `testcredentials`");  
  $query2 = mysql_query(" SELECT `test_duration1` FROM `testcredentials`");
  $numberques1 = mysql_fetch_assoc($query1); 
  $numberques=$numberques1['numberques1'];
  $test_duration1= mysql_fetch_assoc($query2);
  $test_duration=$test_duration1['test_duration1'];

}
else if($difficulty_level==2)
{
  $query1 =  mysql_query(" SELECT `numberques2` FROM `testcredentials`");  
  $query2 = mysql_query(" SELECT `test_duration2` FROM `testcredentials`");
  $numberques1 = mysql_fetch_assoc($query1); 
  $numberques=$numberques1['numberques1'];
  $test_duration1= mysql_fetch_assoc($query2);
  $test_duration=$test_duration1['test_duration1'];


}
else if($difficulty_level==3)
{
  $query1 =  mysql_query(" SELECT `numberques3` FROM `testcredentials`");  
  $query2 = mysql_query(" SELECT `test_duration3` FROM `testcredentials`");
  $numberques1 = mysql_fetch_assoc($query1); 
  $numberques=$numberques1['numberques1'];
  $test_duration1= mysql_fetch_assoc($query2);
  $test_duration=$test_duration1['test_duration1'];


}
$numberquesminusone = $numberques-1;
$numberquesplusone = $numberques+1;
$_SESSION['numberques']=$numberques;
$_SESSION['numberquesminusone']=$numberquesminusone;
$_SESSION['test_duration']=$test_duration;



//echo $_SESSION['test_duration'];
//echo $_SESSION['numberques'];
//generates random
$offset_result = mysql_query(" SELECT FLOOR(RAND() * COUNT(*)) AS `offset` FROM `question` 
 
    WHERE cat_id LIKE '%$category%'
    AND difficulty_level LIKE '%$difficulty_level%'
    AND subcat_id LIKE '%$subcategory%'
    AND subsubcat_name LIKE '%$subsubcategory%'
    AND set_stat= 'Available'");
//echo '<pre>';
//print_r($offset_result);   //RESOURCE ID 6

$offset_row = mysql_fetch_object($offset_result); 

//print_r($offset_row);      //stdClass Object ( [offset] => 2 )
$offset = $offset_row->offset;
$offset_row->offset; //2


$result = mysql_query(" SELECT `question` , `ans1` , `ans2` , `ans3`, `ans4`,`correct_ans` FROM `question` 
 
    WHERE cat_id LIKE '%$category%'
    AND difficulty_level LIKE '%$difficulty_level%'
    AND subcat_id LIKE '%$subcategory%'
    AND subsubcat_name LIKE '%$subsubcategory%' AND set_stat= 'Available'");
/*echo (" SELECT `question` , `ans1` , `ans2` , `ans3`, `ans4`,`correct_ans` FROM `question` 
 
    WHERE cat_id LIKE '%$category%'
    AND difficulty_level LIKE '%$difficulty_level%'
    AND subcat_id LIKE '%$subcategory%'
    AND subsubcat_name LIKE '%$subsubcategory%' AND set_stat= 'Available'");

*/
$num_rows = mysql_num_rows($result); 

$halfofnumrows= $num_rows/2;

if($offset>=$halfofnumrows)
{
//echo $num_rows;
  
  $lacking= $numberques-($num_rows-$offset);
  $offset= $offset-$lacking;
  $offset=$offset-1;
}
//echo $offset;
//fetch row block
$result1 = mysql_query(" SELECT `question` , `ans1` , `ans2` , `ans3`, `ans4`,`correct_ans` FROM `question` 
 
    WHERE cat_id LIKE '%$category%'
    AND difficulty_level LIKE '%$difficulty_level%'
    AND subcat_id LIKE '%$subcategory%'
    AND subsubcat_name LIKE '%$subsubcategory%' 
    AND set_stat= 'Available'LIMIT $offset, $numberquesplusone");//i guess it doesn't take the upper limit 


$fetchcorrectanswers= mysql_query(" SELECT `question` , `ans1` , `ans2` , `ans3`, `ans4`,`correct_ans` FROM `question` 
 
    WHERE cat_id LIKE '%$category%'
    AND difficulty_level LIKE '%$difficulty_level%'
    AND subcat_id LIKE '%$subcategory%'
    AND subsubcat_name LIKE '%$subsubcategory%'
    AND set_stat= 'Available' LIMIT $offset, $numberquesplusone");
  
 $fetchquestions= mysql_query(" SELECT `question` , `ans1` , `ans2` , `ans3`, `ans4`,`correct_ans` FROM `question` 
 
    WHERE cat_id LIKE '%$category%'
    AND difficulty_level LIKE '%$difficulty_level%'
    AND subcat_id LIKE '%$subcategory%'
    AND subsubcat_name LIKE '%$subsubcategory%'
    AND set_stat= 'Available' LIMIT $offset, $numberquesplusone");


$row = mysql_fetch_row($result1);
$row1 = mysql_fetch_row($fetchcorrectanswers);
$row2 = mysql_fetch_assoc($fetchquestions);

$totalquestion=sizeof($row);

//echo $totalquestion;

//the while experiment to fill a 2D array with ques and answers
$m=0;

$GLOBALS['flag']=0;

while(($row=mysql_fetch_row($result1))&& ($GLOBALS['flag']==0)) 
{ 
  $arrayques [$m]=$row;
  $m++;
}

$_SESSION['arrayques']=$arrayques;
//echo '<pre>';
//print_r($_SESSION['arrayques']);
$questionarraysize = sizeof($arrayques);
$_SESSION['questionarraysize']=$questionarraysize;
//echo $_SESSION['questionarraysize'];


$n=0;

while($row1 = mysql_fetch_assoc($fetchcorrectanswers))
{
  $arrayans[$n]=$row1['correct_ans'];
  $n++;
}
$_SESSION['arrayans']=$arrayans;
//echo '<pre>';
//print_r($_SESSION['arrayans']);

//echo htmlentities (print_r (json_decode ($json), true));

$q=0;

while($row2 = mysql_fetch_assoc($fetchquestions))
{
  $arrayquestions[$q]=$row2['question'];
  $q++;
}
$_SESSION['arrayquestions']=$arrayquestions;



?>




<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Take a new test</title>
    
    
    
    
<style> 
@import url(http://fonts.googleapis.com/css?family=Nunito:300);

body { background-color:#B3E5FC,font-family: "Nunito", sans-serif; font-size: 24px; }
a    { text-decoration: none; }
p    { text-align: center; }
sup  { font-size: 36px; font-weight: 100; line-height: 55px; }

.button
{
  text-transform: uppercase;
  letter-spacing: 2px;
  text-align: center;
  color: #4DB6AC;

  font-size: 24px;
  font-family: "Nunito", sans-serif;
  font-weight: 300;
  
  margin: 8em auto;
  
  position: absolute; 
  top:0; right:0; bottom:0; left:0;
  padding: 20px 0;
  width: 220px;
  height:30px;

  background: #4DB6AC;
  border: 1px solid #4DB6AC;
  color: #FFF;
  overflow: hidden;
  
  transition: all 0.5s;
}

.button:hover, .button:active 
{
  text-decoration: none;
  color: #4DB6AC;
  border-color: #4DB6AC;
  background: #FFF;
}

.button span 
{
  display: inline-block;
  position: relative;
  padding-right: 0;
  
  transition: padding-right 0.5s;
}

.button span:after 
{
  content: ' ';  
  position: absolute;
  top: 0;
  right: -18px;
  opacity: 0;
  width: 10px;
  height: 10px;
  margin-top: -10px;

  background: rgba(0, 0, 0, 0);
  border: 3px solid #FFF;
  border-top: none;
  border-right: none;

  transition: opacity 0.5s, top 0.5s, right 0.5s;
  transform: rotate(-45deg);
}

.button:hover span, .button:active span 
{
  padding-right: 30px;
}

.button:hover span:after, .button:active span:after 
{
  transition: opacity 0.5s, top 0.5s, right 0.5s;
  opacity: 1;
  border-color:#4DB6AC;
  right: 0;
  top: 50%;
}
    .button1
{
  text-transform: uppercase;
  letter-spacing: 2px;
  text-align: center;
  color: #ef9a9a;

  font-size: 24px;
  font-family: "Nunito", sans-serif;
  font-weight: 300;
  
  margin: 8em auto;
  
  position: absolute; 
  top:0; right:0; bottom:0; left:0;
  padding: 20px 0;
  width: 220px;
  height:30px;

  background: #ef9a9a;
  border: 1px solid #ef9a9a;
  color: #FFF;
  overflow: hidden;
  
  transition: all 0.5s;
}

.button1:hover, .button1:active 
{
  text-decoration: none;
  color: #ef9a9a;
  border-color: #ef9a9a;
  background: #FFF;
}

.button1 span 
{
  display: inline-block;
  position: relative;
  padding-right: 0;
  
  transition: padding-right 0.5s;
}

.button1 span:after 
{
  content: ' ';  
  position: absolute;
  top: 0;
  right: -18px;
  opacity: 0;
  width: 10px;
  height: 10px;
  margin-top: -10px;

  background: rgba(0, 0, 0, 0);
  border: 3px solid #FFF;
  border-top: none;
  border-right: none;

  transition: opacity 0.5s, top 0.5s, right 0.5s;
  transform: rotate(-45deg);
}

.button1:hover span, .button1:active span 
{
  padding-right: 30px;
}

.button1:hover span:after, .button1:active span:after 
{
  transition: opacity 0.5s, top 0.5s, right 0.5s;
  opacity: 1;
  border-color: #ef9a9a;
  right: 0;
  top: 50%;
}
    </style>

    
        <script src="ab/js/prefixfree.min.js"></script>

    
  </head>

  <body style="background-image:url(images/Untitled1.jpg)">
<div class="form-group">
    <a href="start_test.php"  class="button">
  <span>Start Test</span>
</a>
</div>
<div class="form-group" style="position:relative;top:170px;">
<a href="finaluserprofile.php" class="button1">
  <span>Exit</span>
</a>
</div>

      <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  </body>
</html>
<?php }
else{
header("Location:finaluserprofile.php");
}
?>
