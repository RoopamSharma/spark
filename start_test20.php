<!-- Author @_@ codemonkey YO! -->
<?php 
session_start();
if(isset($_SESSION['email'])&&isset($_SESSION['arrayques'])){
?>

<link href='http://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
<head>
<title>Welcome <?php echo $_SESSION['email'];?></title>    
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.6.1.min.js"></script>
<link href="bootstrap.css" rel="stylesheet" type="text/css">

<style>
/* Variables
 ------------------------------------------------------------- */
/* Animation from Animate.css
 ------------------------------------------------------------- */
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

/* Foundation
 ------------------------------------------------------------- */

body {
  background-color: #0c70b4;
  color: #546775;
  font: normal 400 18px "PT Sans", sans-serif;
  -webkit-font-smoothing: antialiased;
}

/* Container
 ------------------------------------------------------------- */

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

/* Individual Controls
 ------------------------------------------------------------- */

.radio {
  display: inline-block;
  padding-right: 20px;
  font-size: 18px;
  line-height: 49px;
  cursor: pointer;
}

.radio:hover .inner {
  -webkit-transform: scale(0.5);
  -ms-transform: scale(0.5);
  transform: scale(0.5);
  opacity: .5;
}

.radio input {
  width: 1px;
  height: 1px;
  opacity: 0;
}

.radio input:checked + .outer .inner {
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
  opacity: 1;
}

.radio input:checked + .outer { border: 3px solid 4CAF50; }

.radio input:focus + .outer .inner {
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
  opacity: 1;
  background-color: 4CAF50;
}

.radio .outer {
  width: 20px;
  height: 20px;
  display: block;
  float: left;
  margin: 10px 9px 10px 10px;
  border: 3px solid #66BB6A;
  border-radius: 50%;
  background-color: #fff;
}

.radio .inner {
  -webkit-transition: all 0.25s ease-in-out;
  transition: all 0.25s ease-in-out;
  width: 17px;
  height: 16px;
  -webkit-transform: scale(0);
  -ms-transform: scale(0);
  transform: scale(0);
  display: block;
  margin:0px;
  padding:0px;
  position:relative;     
  top:-1px;
  left:-1px;
  right:0px;
  bottom:1px;
  border-radius: 50%;
  background-color: 4CAF50;
  opacity: 0;
}
</style>
<link href="http://www.cssscript.com/wp-includes/css/sticky.css" rel="stylesheet" type="text/css">
</head>    
    <link href="button/css/style.css" rel="stylesheet" type="text/css">
<body onLoad="setCountDown()" style="background-image: url(images/Untitled1.jpg);">
<?php
include("header.php");
?>
   <div id="remain" style="float:right;margin-top:10px; margin-right:40px;font-size:19px;font-family:'Comfortaa',cursive;" >
         <?php if(isset($remainingHour)&&isset($remainingMinutes)&&isset($remainingSeconds)){
?><label>Time Remaining:</label><?php echo "$remainingHour hours, $remainingMinutes minutes, $remainingSeconds seconds";}?>
   </div>

<?php
echo '<br/>';
$arrayques=$_SESSION['arrayques'];
$startarrayques=$_SESSION['arrayques'];
$question_counter=0;
$_SESSION['question_counter']=$question_counter;

$_SESSION['arraysizeminusone']=$_SESSION['questionarraysize'];

function shownext($arrayques)
{

  if($_SESSION['arraysizeminusone']==$_SESSION['question_counter'])
  {
  echo "Test finished";
  header("location:result.php");
  }
  else
  {
  echo '<div id = "question_no" class="quest" >';
  
   echo'<table class="card table table-bordered table-hover" style="font-family: \'Comfortaa\', cursive;width:60%;float:center; margin-top:70px;">';
  echo '<th colspan="2">Q';
  echo $_SESSION['question_counter']+1;      
  echo $arrayques[$_SESSION['question_counter']][0]; echo '</th><tr><td>';
  
$a=0;
  if(isset($_SESSION['ans'][$_SESSION['question_counter']])){
  $a=$_SESSION['ans'][$_SESSION['question_counter']];
  }
    echo '
  <label class="radio" style="font-weight:normal;font-size:15px;width:100%;height:100%">
    <input'; 
      if ($a==1){echo 'checked="checked"';}
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
      
  //echo '</form>';
  echo '</div>';
  
  
      echo '<div align="center" style="margin-bottom:40px;">';
  echo '<input type="submit" id="prev" class="ph-button ph-btn-blue" style="margin-right:5px;width:200px"  name="previous1" value="PREVIOUS" />';
  echo '<input style="margin-right:5px;width:200px" type="submit" id="submitbutton" class="ph-button ph-btn-blue" onClick= "nextques();" name="next1" value="NEXT" />';
echo '<input type="submit" id="fns" class="ph-button ph-btn-green" style="margin-right:5px;width:200px"  name="finish1" onclick="func();" value="FINISH" />';

  //$_SESSION['answerval']=$_GET['radioName'];
  //echo $_SESSION['answerval'];
  
  //echo $_SESSION['question_counter']= $_SESSION['question_counter']+1;

  //echo "sessionquestioncounter"; echo $_SESSION['question_counter'];
 echo "<input type='text' id='text1' hidden='hidden' value='0'/>";  //echo "sessionquestioncounter"; echo $_SESSION['question_counter'];
echo'</div>';
  }

}
shownext($arrayques);

?>
<?php
date_default_timezone_set('Asia/Kolkata');
if (isset($_SESSION['targetime'])) {
    // session variable_exists, use that
    $targetime = $_SESSION['targetime'];
   
} else {
    // No session variable, read from mysql
   
    $targetime = time()+($_SESSION['test_duration']*60);
  $_SESSION['targetime'] = $targetime;
}
//echo $targetime."\n"; 
$actualtime = time();
//echo $actualtime."\n";
$secondsDiff =$targetime-$actualtime;

if($secondsDiff<0){
  header("Location:finaluserprofile.php");
  }
$remainingDay     = floor($secondsDiff/60/60/24);
$remainingHour    = floor(($secondsDiff-($remainingDay*60*60*24))/60/60);
$remainingMinutes = floor(($secondsDiff-($remainingDay*60*60*24)-     ($remainingHour*60*60))/60);
$remainingSeconds = floor(($secondsDiff-($remainingDay*60*60*24)-    ($remainingHour*60*60))-($remainingMinutes*60));
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <title>Untitled Document</title>
   <script type="text/javascript"> 
      var hours = <?php echo $remainingHour; ?>  
      var minutes = <?php echo $remainingMinutes; ?>  
      var seconds = <?php echo $remainingSeconds; ?> 
      
    function setCountDown ()
      {
          seconds--;
          if (seconds < 0){
             minutes--;
             seconds = 59;
          }
          if (minutes < 0){
              hours--;
              minutes = 59;
          }
          if (hours < 0){
              hours = 23;
          }
          document.getElementById("remain").innerHTML = hours+ " hrs "+ minutes+ " mins "+seconds+" secs";
          var SD=window.setTimeout( "setCountDown()", 1000 );
          if (hours=='0'&&minutes == '00' && seconds == '00') { 
              seconds = "00"; window.clearTimeout(SD);
              window.location = "result.php";
          } 

       }
    </script>
 
<script type="text/javascript">
function func(){
  window.location.href="result.php";
}

$(document).ready(function(e) {
$("#prev").click(function() {
 document.getElementById("submitbutton").setAttribute("onclick","nextques()");
 
  if((document.getElementById("text1").value)==0){
    document.getElementById("prev").removeAttribute("onclick");
    }
if(document.getElementById("text1").value>0){
document.getElementById("text1").value=Number(document.getElementById("text1").value)-1;
}
});
});
$(document).ready(function(e) {
$("#submitbutton,#fns").click(function() {
document.getElementById("text1").value=Number(document.getElementById("text1").value)+1;
//i was here at 11:40 today
var o=Number(document.getElementById("text1").value)-1;
var radioVal=[];
//while()
var radioVal =$('input:radio[name=answer]:checked').val();
//radioVal.push($(this).val());
var x=typeof(radioVal);
if(x=='undefined'){
  a=0;
  
  //alert('Please Choose an Option');
  //document.getElementById("submitbutton").removeAttribute("onclick");
  }
  else{
a=radioVal;
}
  $.ajax({
    
        url: 'ans.php',
        type: 'POST',
    data: {'ans': a,'index':o},
    success: function(b){
        if((document.getElementById("text1").value)>= <?php echo $_SESSION['numberquesminusone'] ?>)
      {
    document.getElementById("submitbutton").removeAttribute("onclick");
    document.getElementById("submitbutton").setAttribute("onclick","func()");
    }
      //    alert(b); 
  //document.getElementById("submitbutton").setAttribute("onclick",'nextques()');
      }
    })
});
});

//implemented, getting in array. putting in nextques.php 12:29 + 1:19 yay. ^_^
// @_@ this is codemonkey. YO!
// i did this on 11:58 today     

</script>

<script type="text/javascript">

function getXMLHTTP() { //fuction to return the xml http object
  var xmlhttp=false; 
  try{
   xmlhttp=new XMLHttpRequest();
  }
  catch(e) {  
   try{   
    xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
   }
   catch(e){
    try{
    xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
    }
    catch(e1){
     xmlhttp=false;
    }
   }
  }

  return xmlhttp;
  }

function nextques() 
{  
 document.getElementById("prev").setAttribute("onclick","previousques()");
 var strURL="shownext.php";
  
  var req = getXMLHTTP(strURL);

  if (req) {
  //alert(req);
  
    req.onreadystatechange = function() {
    
    if (req.readyState == 4) {
     
     if (req.status == 200) {   

      //alert(req.responseText);
      document.getElementById('question_no').innerHTML=req.responseText;  
} else {
      alert("There was a problem while using XMLHTTP:\n" + req.statusText);
     }
    }    
   }   
req.open("GET", strURL, true);
   req.send(null);   
  }  
 }

</script>

<script>
function previousques() 
{  
  document.getElementById("submitbutton").setAttribute("onclick","nextques()");

  var strURL="showprevious.php";
  var req = getXMLHTTP(strURL);

  if (req) {
  //alert(req);
  
    req.onreadystatechange = function() {
    
    if (req.readyState == 4) {
     
     if (req.status == 200) {   

      //alert(req.responseText);
      document.getElementById('question_no').innerHTML=req.responseText;  

         
     } else {
      alert("There was a problem while using XMLHTTP:\n" + req.statusText);
     }
    }    
   }   
req.open("GET", strURL, true);
   req.send(null);   
  }  
 }

</script>


<!--

      echo "<table>";
     echo "<td>Name</td>";
     echo "<td>".$name."</td>";


     echo '<div class="custom-thumb">'; 
echo '<a href="'; the_permalink(); echo '" title="'; the_title(); echo '">';
$thumb = get_post_thumbnail_id(); 
$img_url = wp_get_attachment_url( $thumb,'full' ); 
$image = aq_resize( $img_url, 500, 175, true ); 
echo '<img src="'.$image.'" width="500" height="175" alt="'; the_title(); echo '"/>';
echo '</a>';
echo '</div>';

-->
</body>
</html>
<?php
                             }
else{
header("Location:finaluserprofile.php");
}
?>