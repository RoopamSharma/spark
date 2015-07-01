<?php
  session_start();

  // If the session vars aren't set, try to set them with a cookie
  if (!isset($_SESSION['employerid'])) {
    if (isset($_COOKIE['employerid']) && isset($_COOKIE['co_email'])) {
     // $_SESSION['user_id'] = $_COOKIE['user_id'];
      //$_SESSION['username'] = $_COOKIE['username'];
    }
  }
?>
<html>
<head>
<title>View Profile-Employer</title>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<!--<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">-->
<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/cosmo/bootstrap.min.css" rel="stylesheet">
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
</head>
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
        <li class="active"><a href="employerprofile.php">Profile<span class="sr-only">(current)</span></a></li>
        <li><a href="editemployerprofile.php">Edit</a></li>
        <li><a href="postjob.php">Post Job</a></li>
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
  require_once('uploadvars.php');
  require_once('connect.php');
  
    // Make sure the user is logged in before going any further.
  if (!isset($_SESSION['employerid'])) {
    echo '<p class="login">Please <a href="employerstart.html">log in</a> to access this page.</p>';
    exit();
  }
  else {
    echo('<p class="login">You are logged in as ' . $_SESSION['employerid'] . '. <a href="logoutemployer.php">Log out</a>.</p>');
  }
  $dbc = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die(mysql_error());
mysql_select_db(DB_NAME);
  // Grab the profile data from the database
  if (!isset($_GET['employerid'])) {
    $query = "SELECT name, co_name,co_email,co_type,co_about,logo FROM employer WHERE employerid = '" . $_SESSION['employerid'] . "'";
  }
  else {
    $query = "SELECT name, co_name,co_email,co_type,co_about,logo FROM employer WHERE employerid = '" . $_GET['employerid'] . "'";
  }
  $data = mysql_query($query,$dbc) or die(mysql_error());
 if (mysql_num_rows($data) == 1) {
    // The user row was found so display the user data
    $row = mysql_fetch_array($data);
 ?>
<div class="container" style="padding-top: 60px;">
  <h1 class="page-header">Your Company Profile</h1>
  <div class="row">
    <!-- left column -->
    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="text-center">
        <?php
         //echo '<img src="' . MM_UPLOADPATH . $row['picture'] .
        //'" alt="Profile Picture" class="avatar img-circle img-thumbnail" alt="avatar" />';
        echo '<img src="data:image/png;base64,' . base64_encode($row['logo']) . '"width="160" height="160"alt="Profile Picture" class="avatar img-circle img-thumbnail" alt="avatar" />';
        ?>
      </div>
    </form>
    </div>
   
    <!-- form column -->
    <div class="col-md-8 col-sm-6 col-xs-12 personal-info">
      <h3>Personal info</h3>
      <form class="form-horizontal" role="form">
       
        <div class="form-group">
          <label class="col-lg-3 control-label">Company name:</label>
          <div class="col-lg-8">
           <?php echo $row['co_name']?>
          </div>
        </div>
       
        <div class="form-group">
          <label class="col-lg-3 control-label">About us:</label>
          <div class="col-lg-8">
            <?php echo $row['co_about'] ?>
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Company Type:</label>
          <div class="col-lg-8">
            <?php
            if ($row['co_type'] == 'MNC') {
        echo 'MNC';
      }
      else if ($row['co_type'] == 'StartUp') {
        echo 'StartUp';
      }
      else if ($row['co_type'] == 'Government'){
        echo 'Government';
      }
      else if ($row['co_type'] == 'Own Business'){
        echo 'Own Business';
      }
      else {
        echo '?';
      }
       ?> 
       </div>
          </div>

       
        <?php } ?>
          <div class="form-group">
          <label class="col-md-3 control-label"></label>
          <div class="col-md-8">
            <!--<input class="btn btn-primary" value="Add more" type="button" name="button" onClick="window.location.href='addedu.php'">-->
            <span></span>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>