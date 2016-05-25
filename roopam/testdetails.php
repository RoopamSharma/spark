<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="text/javascript" src="jquery-1.7.2.js"></script>
<script type="text/javascript" src="thickbox.js"></script>
<link href='http://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="thickbox.css" type="text/css" media="screen" />
<link rel="stylesheet" href="../ims/bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="../ims/bootstrap/css/bootstrap.min.css">    
<script>
function func1(){
	 if (window.XMLHttpRequest) {
    xmlhttp = new XMLHttpRequest();
  } else {
    xmlhttp = new ActiveXObject('MicrosoftXMLHTTP');
  }
  var text=document.getElementById("cat").value;
  var target = "jlist.php";
  var parameter = "q=" + text+"&email="+document.getElementById("email").value;
  xmlhttp.open('POST', target, true);
  xmlhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
  xmlhttp.send(parameter);
  
  xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
    document.getElementById("content").innerHTML=xmlhttp.responseText;
        tb_reinit('a.thickbox, area.thickbox, input.thickbox');
   }
  }
}
var i=0;
function func2(){
	 if (window.XMLHttpRequest) {
    xmlhttp = new XMLHttpRequest();
  } else {
    xmlhttp = new ActiveXObject('MicrosoftXMLHTTP');
  }
  var target = "jlist1.php";
  var text=0;
  if(i==0){
    text=0;
    i=1;
    }
  else{
  text=1;  
  i=0;
  }
  var cat=document.getElementById('cat').value;
  var parameter = "q=" + text+"&p=" + cat+"&email="+document.getElementById("email").value;
  xmlhttp.open('POST', target, true);
  xmlhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
  xmlhttp.send(parameter);
  
  xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
document.getElementById("content").innerHTML=xmlhttp.responseText;
 tb_reinit('a.thickbox, area.thickbox, input.thickbox');
  }
  }
	}
    var j=0;
function func3(){
	 if (window.XMLHttpRequest) {
    xmlhttp = new XMLHttpRequest();
  } else {
    xmlhttp = new ActiveXObject('MicrosoftXMLHTTP');
  }
  var target = "jlist2.php";
  var text=0;
  if(j==0){
    text=0;
    j=1;
    }
  else{
  text=1;  
  j=0;
  }
    var cat=document.getElementById('cat').value;
  var parameter = "q=" + text+"&p=" + cat+"&email="+document.getElementById("email").value;
  xmlhttp.open('POST', target, true);
  xmlhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
  xmlhttp.send(parameter);
  
  xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
document.getElementById("content").innerHTML=xmlhttp.responseText;
 tb_reinit('a.thickbox, area.thickbox, input.thickbox');
}
  }
	}
</script>
    
</head>
<body style="font-family:'Comfortaa', cursive;background-image:url(images/Untitled1.jpg)">
<?php
session_start();

include 'include/connection.php';
include 'func.php';
    ?>
<div class="form-group" style="margin-bottom:100px;">
<label class="form-control" style="background-color:424242;color:white" >Tests List</label>
</div> 

<div class="form-group"  style="margin-left:23%;margin-right:10%;">
<label style="float:left;padding-top:10px">Sort By :&nbsp;&nbsp;</label>    
<div style="width:20%;float:left;margin-right:20px" >
<input type="button" width="100px" class="form-control"  style="float:left" onClick="func3()" value="&nbsp;Date&nbsp;&nbsp;"/>
    </div>
<div style="width:20%;float:left;" >
<input type="button" class="form-control" onClick="func2()" style="float:left"  value="&nbsp;&nbsp;&nbsp;Marks"/>
</div>
<div  style="float:left;padding-top:10px">
    <label style="float:left" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Show By:</label>
</div>
<div style="width:20%;float:left;">    
<select onChange="func1()" class="form-control"  id="cat" style="float:left;width:100%"><?php $a=new seeker(); 
    $a->slist();

$c=$_GET['id'];
    
echo '<input type="text" id="email" hidden="hidden" value="'.$c.'"/>';
    ?>
</select>    
</div>
    
</div>
<div class="form-group" align="center"  id="content">
<?php

$sql=mysql_query("select * from userresult where user_id='$c'");
if($re=mysql_fetch_assoc($sql)){
echo '<table class="table table-bordered table-hover" style="background-color:white;width:60%;margin-top:180px;font-size:14px;"  align="center">';
echo '<th>Test Id</th>';
echo '<th>Category</th>';
echo '<th>Test Date</th>';
echo '<th>Result</th>';
$i=0;
echo '<th>Full Details</th>';
while($re=mysql_fetch_assoc($sql)){
    $sq=mysql_query("select * from register_emp where email='$c'");
    $result=mysql_fetch_assoc($sq);
    echo '<tr><td>'.$re['test_id'].'</td>';
    echo '<td>'.$re['category'].'</td>';
    echo '<td>'.$re['date'].'</td>';
    echo '<td>'.$re['score'].'</td>';
    echo '<td><a href="full.php?q='.$re['test_id'].'">Details</a></td></tr>';
}
}else{
echo 'Not given test';
}
?>
</table>    
</div>
</body>
</html>