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

$(function(){
  var counter = 0;
 $('p#add_field').click(function(){
 counter += 1;
 $('#container').append(
 '<strong>Job'+ counter +'</strong><br />'
 + '<input id="field_' + counter + '" name="dynfields1[]' + '" type="text" /><br />' 
 +'<strong>From</strong><br/>'
 +'<input field=field_'+counter+'" name="dynfields1_from[]'+'"type="text"/><br/>'
 +'<strong>To</strong><br/>'
 +'<input field=field_'+counter+'" name="dynfields1_to[]'+'"type="text"/><br/>');
 
 });
});

$(function(){
  var counter = 0;
 $('p#add_field1').click(function(){
 counter += 1;
 $('#container1').append(
 '<strong>Institution.' + counter + '</strong><br />'
 + '<input id="field_' + counter + '" name="dynfields2[]' + '" type="text" /><br />'
 +'<strong>Degree</strong></br>'
 + '<input id="field_' + counter + '" name="dynfields2_degree[]' + '" type="text" /><br />'
 + '<strong>From</strong><br/>'
 +'<input field=field_'+counter+'" name="dynfields2_from[]'+'"type="text"/><br/>'
 +'<strong>To</strong><br/>'
 +'<input field=field_'+counter+'" name="dynfields2_to[]'+'"type="text"/><br/>');

 });
});


$(function(){
  var counter = 0;
 $('p#add_field2').click(function(){
 counter += 1;
 $('#container2').append(
 '<strong>Certification.' + counter + '</strong><br />'
 + '<input id="field_' + counter + '" name="dynfields3[]' + '" type="text" /><br />' );

 });
});
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

if (isset($_POST['submit_val'])) 
{
if ($_POST['dynfields1']) {
  $capture_field_vals ="";
foreach ( $_POST['dynfields1'] as $key=>$value ) {
  $capture_field_vals .= $value .", ";
}}
$dbc = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die(mysql_error());
mysql_select_db(DB_NAME);
$query="UPDATE register_emp set prevjobs='$capture_field_vals' WHERE ID = '" . $_SESSION['ID'] . "'"; //sets job description
mysql_query($query,$dbc) or die(mysql_error());


 mysql_close();
 if($_POST['dynfields1_from']){
  $capture_field_vals ="";
  foreach ( $_POST['dynfields1_from'] as $key=>$value ) {
  $capture_field_vals .= $value .", ";
}}
$dbc = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die(mysql_error());
mysql_select_db(DB_NAME);
$query="UPDATE register_emp set from_job='$capture_field_vals' WHERE ID = '" . $_SESSION['ID'] . "'";   //sets job starting date
mysql_query($query,$dbc) or die(mysql_error());
mysql_close();


if($_POST['dynfields1_to']){
  $capture_field_vals ="";
  foreach ( $_POST['dynfields1_to'] as $key=>$value ) {
  $capture_field_vals .= $value .", ";
}}
$dbc = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die(mysql_error());
mysql_select_db(DB_NAME);
$query="UPDATE register_emp set to_job='$capture_field_vals' WHERE ID = '" . $_SESSION['ID'] . "'";   //sets job starting date
mysql_query($query,$dbc) or die(mysql_error());
mysql_close();


if ($_POST['dynfields2']) {
$capture_field_vals ="";
foreach ( $_POST['dynfields2'] as $key=>$value ) {
 $capture_field_vals .= $value .", ";                            //stores values in form of an array separated by , 
}}

$dbc = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die(mysql_error());
mysql_select_db(DB_NAME);

$query="UPDATE register_emp SET colg='$capture_field_vals' WHERE ID = '" . $_SESSION['ID'] . "'"; //sets educational institution
mysql_query($query,$dbc) or die('query failed');
 mysql_close();

 if ($_POST['dynfields2_degree']) {    //stores degree dynamically in SQL
$capture_field_vals ="";
foreach ( $_POST['dynfields2_degree'] as $key=>$value ) {
 $capture_field_vals .= $value .", ";                            //stores values in form of an array separated by , 
}}

$dbc = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die(mysql_error());
mysql_select_db(DB_NAME);

$query="UPDATE register_emp SET degree='$capture_field_vals' WHERE ID = '" . $_SESSION['ID'] . "'";
mysql_query($query,$dbc) or die('query failed');
 mysql_close();

if ($_POST['dynfields2_from']) {
$capture_field_vals ="";
foreach ( $_POST['dynfields2_from'] as $key=>$value ) {
 $capture_field_vals .= $value .", ";                            //stores values in form of an array separated by , 
}}

$dbc = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die(mysql_error());
mysql_select_db(DB_NAME);

$query="UPDATE register_emp SET from_colg='$capture_field_vals' WHERE ID = '" . $_SESSION['ID'] . "'";
mysql_query($query,$dbc) or die('query failed');
 mysql_close();

if ($_POST['dynfields2_to']) {
$capture_field_vals ="";
foreach ( $_POST['dynfields2_to'] as $key=>$value ) {
 $capture_field_vals .= $value .", ";                            //stores values in form of an array separated by , 
}}

$dbc = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die(mysql_error());
mysql_select_db(DB_NAME);

$query="UPDATE register_emp SET to_colg='$capture_field_vals' WHERE ID = '" . $_SESSION['ID'] . "'";
mysql_query($query,$dbc) or die('query failed');
 mysql_close();


if ($_POST['dynfields3']) {
$capture_field_vals ="";
foreach ( $_POST['dynfields3'] as $key=>$value ) {
 $capture_field_vals .= $value .", ";
}}

$dbc = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die(mysql_error());
mysql_select_db(DB_NAME);

$query="UPDATE register_emp SET certification='$capture_field_vals' WHERE ID = '" . $_SESSION['ID'] . "'";
mysql_query($query,$dbc) or die('query failed');
mysql_close();
}
?>
<?php if (!isset($_POST['submit_val'])) { ?>
 <h1>Add your previous experience:</h1>
 <form id='f' method="post" action="">

 <div id="container">
 <p id="add_field"><a href="#"><span>Click To Add Job Experience</span></a></p>
 </div>
<div id="container1">
 <p id="add_field1"><a href="#"><span>Click To Add Educational Qualification:</span></a></p>
 </div>
 <div id="container2">
 <p id="add_field2"><a href="#"><span>Click To Add Certifications:</span></a></p>
 </div>
<input type="submit" name="submit_val" class="btn btn-default btn-xs" value="Submit" onclick="close_win();" />
 </form>
 <?php } ?>
 
<script type='text/javascript'>
function close_win()
{
  f.submit();
window.close();
}
</script>
 <!--
 <input type="submit" name="submit_val1" class="btn btn-default btn-xs"  value="Submit" />-->
 


</body>
</html>