<?php
  session_start();

  // If the session vars aren't set, try to set them with a cookie
  if (!isset($_SESSION['ID'])) {
    if (isset($_COOKIE['ID']) && isset($_COOKIE['email'])) {
      $_SESSION['ID'] = $_COOKIE['ID'];
      $_SESSION['email'] = $_COOKIE['email'];
    }
  }

?>

<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Add Profile details</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">-->
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/cosmo/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
var counter = 0;
$(function(){
 $('p#add_field').click(function(){
 counter += 1;
 $('#container').append(
 '<strong>Job.' + counter + '</strong><br />'
 + '<input id="field_' + counter + '" name="dynfields[]' + '" type="text" /><br />' );

 });
});
var counter = 0;
$(function(){
 $('p#add_field1').click(function(){
 counter += 1;
 $('#container1').append(
 '<strong>Field.' + counter + '</strong><br />'
 + '<input id="field_' + counter + '" name="dynfields[]' + '" type="text" /><br />' );

 });
});

var counter = 0;
$(function(){
 $('p#add_field2').click(function(){
 counter += 1;
 $('#container2').append(
 '<strong>Certification.' + counter + '</strong><br />'
 + '<input id="field_' + counter + '" name="dynfields[]' + '" type="text" /><br />' );

 });
});
</script>
<script type="text/javascript">
var state_arr=new Array("Jammu and Kashmir","Delhi","Uttar Pradesh","Tamil nadu","Maharashtra","Karnataka","West Bengal","Punjab","Haryana");
var s_a = new Array();
s_a[0]="";
s_a[1]="Srinagar|Jammu";
s_a[2]="New Delhi";
s_a[3]="Lucknow|Kanpur|Ghaziabad|Noida|Varanasi";
s_a[4]="Chennai";
s_a[5]="Mumbai|Pune|Aurangabad|Thane";
s_a[6]="Bangalore|Mysore";
s_a[7]="Kolkata";
s_a[8]="Chandigarh|Mohali";
s_a[9]="Gurgaon|Chandigarh";
function print_state(state){
    //given the id of the <select> tag as function argument, it inserts <option> tags
    var option_str = document.getElementById(state);
    option_str.length=0;
    option_str.options[0] = new Option('Select State','');
    option_str.selectedIndex = 0;
    for (var i=0; i<state_arr.length; i++) {
    option_str.options[option_str.length] = new Option(state_arr[i],state_arr[i]);
    }
}
function print_city(city, selectedIndex){
    var option_str = document.getElementById(city);
    option_str.length=0;    
    option_str.options[0] = new Option('Select City','');
    option_str.selectedIndex = 0;
    var city_arr = s_a[selectedIndex].split("|");
    for (var i=0; i<city_arr.length; i++) {
    option_str.options[option_str.length] = new Option(city_arr[i],city_arr[i]);
    }
}
</script>

<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="finaluserprofile.php">Profile</a></li>
        <li class="active"><a href="viewuserprofile.php">Edit<span class="sr-only">(current)</span></a></li>
        <li><a href="#">Take Test</a></li>
       <!-- <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>-->
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
<?php
 require('connect.php'); 
 if (!isset($_SESSION['ID'])) {
    echo '<p class="login">Please <a href="index.html">log in</a> to access this page.</p>';
    exit();
  }
  else {
    echo('<p class="login">You are logged in as ' . $_SESSION['ID'] .'</p>');
  }

if (isset($_POST['submit_val'])) {
if ($_POST['dynfields']) {
  $capture_field_vals ="";
foreach ( $_POST['dynfields'] as $key=>$value ) {
  $capture_field_vals .= $value .", ";
}}
$dbc = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die(mysql_error());
mysql_select_db(DB_NAME);
$query="UPDATE register_emp set prevjobs='$capture_field_vals' WHERE ID = '" . $_SESSION['ID'] . "'";
mysql_query($query,$dbc) or die(mysql_error());


 mysql_close();
}
if (isset($_POST['submit_val1'])) {
if ($_POST['dynfields']) {
$capture_field_vals ="";
foreach ( $_POST['dynfields'] as $key=>$value ) {
 $capture_field_vals .= $value .", ";                            //stores values in form of an array separated by , 
}}

$dbc = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die(mysql_error());
mysql_select_db(DB_NAME);

$query="UPDATE register_emp SET colg='$capture_field_vals' WHERE ID = '" . $_SESSION['ID'] . "'";
mysql_query($query,$dbc) or die('query failed');



 mysql_close();
}
if (isset($_POST['submit_val2'])) {
if ($_POST['dynfields']) {
$capture_field_vals ="";
foreach ( $_POST['dynfields'] as $key=>$value ) {
 $capture_field_vals .= $value .", ";
}}

$dbc = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die(mysql_error());
mysql_select_db(DB_NAME);

$query="UPDATE register_emp SET certification='$capture_field_vals' WHERE ID = '" . $_SESSION['ID'] . "'";
mysql_query($query,$dbc) or die('query failed');
mysql_close();
}
if(isset($_POST['submit_val3']))
{
  $city=$_POST['city'];
  $state=$_POST['state'];
 $dbc = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die(mysql_error());
 mysql_select_db(DB_NAME);
  $query="UPDATE register_emp SET state='$state',city='$city' WHERE ID = '" . $_SESSION['ID'] . "'";
  mysql_query($query,$dbc) or die('query failed');
  mysql_close();
}
if (isset($_POST['upload']) && $_FILES['userfile']['size'] > 0)
{
$dbc = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die(mysql_error());
mysql_select_db(DB_NAME);
$fileName = $_FILES['userfile']['name'];
$tmpName  = $_FILES['userfile']['tmp_name'];
$fileSize = $_FILES['userfile']['size'];
$fileType = $_FILES['userfile']['type'];

$fp      = fopen($tmpName, 'r');
$content = fread($fp, filesize($tmpName));
$content = addslashes($content);
fclose($fp);

if(!get_magic_quotes_gpc())
{
    $fileName = addslashes($fileName);
}
if($_FILES['userfile']['type']=="application/pdf") //uploads only pdf files
{
  $query = "UPDATE register_emp SET cvname='$fileName',cvsize='$fileSize',cvtype='$fileType',cvcontent='$content' WHERE ID = '" . $_SESSION['ID'] . "'";
//$query = "INSERT INTO upload (name, size, type, content ) ".
//"VALUES ('$fileName', '$fileSize', '$fileType', '$content')";

mysql_query($query,$dbc) or die(mysql_error()); 
mysql_close();

echo "<br>File $fileName uploaded<br>";
}
else
  { echo ' Invalid file type! Only .pdf allowed';}
} 
?>
<?php if (!isset($_POST['submit_val'])) { ?>
 <h1>Add your previous experience:</h1>
 <form method="post" action="">

 <div id="container">
 <p id="add_field"><a href="#"><span>Click To Add Job Experience</span></a></p>
 </div>

<input type="submit" name="submit_val" class="btn btn-default btn-xs" value="Submit" />
 </form>
 <?php } ?>
 <?php if (!isset($_POST['submit_val1'])) { ?>
 <form method="post" action="">

 <div id="container1">
 <p id="add_field1"><a href="#"><span>Click To Add Educational Qualification:</span></a></p>
 </div>
 <input type="submit" name="submit_val1" class="btn btn-default btn-xs"  value="Submit" />
 </form>
 <?php } ?>
 <?php if (!isset($_POST['submit_val2'])) { ?>
 <form method="post" action="">

 <div id="container2">
 <p id="add_field2"><a href="#"><span>Click To Add Certifications:</span></a></p>
 </div>
 <input type="submit" name="submit_val2" class="btn btn-default btn-xs"  value="Submit" />
 </form>
 <?php } ?>
<?php if (!isset($_POST['submit_val3'])) { ?>
<form method="post" action="">
<div>
Select the State:
<select onchange="print_city('city',this.selectedIndex);" id="state" name ="state"></select>
<br />
City:
<select name ="city" id ="city"></select>
<script language="javascript">print_state("state");</script><br/>
</div>
<input type="submit" name="submit_val3" class="btn btn-default btn-xs"  value="Submit" />
</form>
<?php } ?>
<?php if (!isset($_POST['upload'])) { ?>
<form method="post" enctype="multipart/form-data">
<table width="350" border="0" cellpadding="1" cellspacing="1" class="box">
<tr>
<td width="246">
<input type="hidden" name="MAX_FILE_SIZE" value="2000000">
Upload your CV :
<input name="userfile" type="file" id="userfile"
</td></tr>
<tr>
<td ><input name="upload" type="submit" class="btn btn-default btn-xs" id="upload" name="upload" value=" Upload "></td>
</tr>
</table>
</form>
<?php } ?>
</body>
</html>