
<link href="../ims/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
<style>
    @-webkit-keyframes 
cardEnter {  0%, 20%, 40%, 60%, 80%, 100% {
 -webkit-transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
 transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
}
 0% {
 opacity: 0;
 -webkit-transform: scale3d(0.3, 0.3, 0.3);
}
 20% {
 -webkit-transform: scale3d(1.1, 1.1, 1.1);
}
 40% {
 -webkit-transform: scale3d(0.9, 0.9, 0.9);
}
 60% {
 opacity: 1;
 -webkit-transform: scale3d(1.03, 1.03, 1.03);
}
 80% {
 -webkit-transform: scale3d(0.97, 0.97, 0.97);
}
 100% {
 opacity: 1;
 -webkit-transform: scale3d(1, 1, 1);
}
}
@keyframes 
cardEnter {  0%, 20%, 40%, 60%, 80%, 100% {
 -webkit-transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
 transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
}
 0% {
 opacity: 0;
 -webkit-transform: scale3d(0.3, 0.3, 0.3);
 transform: scale3d(0.3, 0.3, 0.3);
}
 20% {
 -webkit-transform: scale3d(1.1, 1.1, 1.1);
 transform: scale3d(1.1, 1.1, 1.1);
}
 40% {
 -webkit-transform: scale3d(0.9, 0.9, 0.9);
 transform: scale3d(0.9, 0.9, 0.9);
}
 60% {
 opacity: 1;
 -webkit-transform: scale3d(1.03, 1.03, 1.03);
 transform: scale3d(1.03, 1.03, 1.03);
}
 80% {
 -webkit-transform: scale3d(0.97, 0.97, 0.97);
 transform: scale3d(0.97, 0.97, 0.97);
}
 100% {
 opacity: 1;
 -webkit-transform: scale3d(1, 1, 1);
 transform: scale3d(1, 1, 1);
}
}

.card {
  -webkit-animation: cardEnter 0.75s ease-in-out 0.5s;
  animation: cardEnter 0.75s ease-in-out 0.5s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
  max-width: 50%;
  
  background-color: #fff;
  -webkit-box-shadow: 0 2px 5px rgba(0, 0, 0, 0.4);
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.4);
  margin: 10px auto;
  opacity: 0;
  height:10%;    
}
</style>
<?php
include("include/connection.php");
session_start();
include("header.php");
echo '<body style="font-family:\'Comfortaa\',cursive;background-image:url(images/Untitled1.jpg);margin-top:0px">';
if(isset($_SESSION['arrayans'])&&$_SESSION['questionarraysize']){
$a1=$_SESSION['arrayans'];
$a2=array();
$a3=$_SESSION['arrayquestions'];
if(isset($_SESSION['ans'])){$a2=($_SESSION['ans']);};
$v=$_SESSION['questionarraysize'];
echo '<table hidden="hidden" align="center" id="tab" class="card table table-bordered table-hover" style="text-align:center;width:70%;margin-top:70px">';
echo '<th style=" text-align:center;">Your Answer</th>';
echo '<th style=" text-align:center;">Correct Answer</th>';
echo '<th style=" text-align:center;">Result</th>';
$p=0;
for($i=0;$i<$v;$i++)
{
	echo'<tr align="center">';
	
if(isset($a2[$i])){
	if($a1[$i]==$a2[$i]){
	$c[$i]='Correct';
	$p++;
	}
	else{
        if($a2[$i]==0){
	$c[$i]='Not Attempted';
	}
    else{
    $c[$i]='Incorrect'; 
    }
}
}
else{
	$c[$i]='Not Attempted';
	}
	
if(isset($a2[$i])){
	if($a2[$i]==0){
	echo '<td>-</td>';
		}
		else{
	echo '<td>'.$a2[$i].'</td>';
		}}
	else{
	echo '<td>-</td>';
	}
	echo '<td>'.$a1[$i].'</td>';
echo'<td>'.$c[$i].'</td>';
	
echo'</tr>';

}
echo '</table>';
echo '</body>';
echo '<p align="center" style="margin-top:20px">You have '.$p.' correct answers</p>';
if($p<$v/2){
echo '<h3 align="center">You have failed</h3>';
echo '<div align="center"><img style="height:80px;width:80px" src="images/Emoticons Sad.png"/></div>';    

	}
	else if($p==$v){
	
		echo '<p align="center">Congratulations Brilliant Performance!!</p>';
echo '<div align="center"><img style="height:80px;width:80px" src="images/Smiley-11-icon.png"/></div>';    

	}
	else if($p<$v){
			echo '<p align="center">Congratulations you have performed well!!</p>';
echo '<div align="center"><img style="height:80px;width:80px;" src="images/Smiley-11-icon.png"/></div>';    

	}
echo '<br/><div align="center"><label><a id="hide" style="font-family:\'Comfortaa\',cursive;color:black;font-size:17px;margin-top:20px;" onclick="func1()">More Details</a></label></div>';

echo '<div align="center" style="margin-top:20px;margin-bottom:20px"><a href="test_display.php"><input type="button" class="btn" style="margin-right:10px;background-color:FF8A65;color:white" value="Take another test"/></a><a href="finaluserprofile.php"><input type="button" class="btn" style="background-color:FF8A65;color:white" value="Home"/></a></div>';    

$g=$p/$v*100;
    for($k=0;$k<$v;$k++){
    $sql=mysql_query("select * from question where question like '%".$a3[$k]."%'");
     $re=mysql_fetch_assoc($sql);
        if(isset($a2[$k])){
        if($a2[$k]!=0){
    $a7[$k]=$re['ans'.$a2[$k]];
        }
            else{
            $a7[$k]='Not Attempted';
    }
    }
        else{
            $a7[$k]='Not Attempted';
            }
    $a6[$k]=$re['ans'.$a1[$k]];
    
    }
    
$implodeda1= implode("| ", $a6);
$implodeda2= implode("| ", $a7);
$implodeda3= implode("| ", $a3);
    
    //$a2 selected
    //$a1 correct
$sql_push_answer_array= "INSERT INTO userresult (`questions`,`selectedanswers`,`correctanswers`,`user_id`,`date`,`category`,`score`) VALUES ('$implodeda3', '$implodeda2', '$implodeda1','$_SESSION[email]',now(),'$_SESSION[category]','$g')";
$re=mysql_query($sql_push_answer_array);

	
}
else{
unset($_SESSION['arrayques']);
			unset($_SESSION['targetime']);
       unset($_SESSION['arrayans']);
		header("Location:finaluserprofile.php");
		}

unset($_SESSION['arrayques']);
		unset($_SESSION['targetime']);
       unset($_SESSION['arrayans']);
	   unset($_SESSION['ans']);
	   unset($_SESSION['quesarraysize']);

?>
<script>
function func1(){
document.getElementById('tab').removeAttribute("hidden");
document.getElementById('hide').setAttribute("hidden","hidden");
}
</script>