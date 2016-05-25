<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<!--<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">-->
<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/cosmo/bootstrap.min.css" rel="stylesheet">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>


<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="employerdash.php">InsuranceJobs4U</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="employerprofile.php">View Profile</a></li>
        <li><a href="editemployerprofile.php">Edit Profile</a></li>
        <li><a href="employerdash.php">Dashboard</a></li>
        <li><a href="postjob.php">Post Jobs</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <?php 
require_once('connect.php');
$dbc = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die(mysql_error());
mysql_select_db(DB_NAME);
if (!isset($_GET['employerid'])) {
$query = "SELECT name, co_name,co_email,co_type,co_about,emp_picture FROM employer WHERE employerid = '" . $_SESSION['employerid'] . "'";
}
$data = mysql_query($query,$dbc) or die(mysql_error());
if (mysql_num_rows($data) == 1) {
// The user row was found so display the user data
$row = mysql_fetch_array($data); ?>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><img src="uploads/<?php echo $row['emp_picture'];?>" width="30" height="50" alt="Profile Picture" class="avatar img-square img-thumbnail" alt="avatar" /><span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="logoutemployer.php">Logout</a></li>
          </ul>
        </li>
        <?php } ?>
      </ul>
    </div>
  </div>
</nav>