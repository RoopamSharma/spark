<?php
  session_start();

  // If the session vars aren't set, try to set them with a cookie
  if (!isset($_SESSION['ID'])) {
    if (isset($_COOKIE['ID']) && isset($_COOKIE['email'])) {
     // $_SESSION['user_id'] = $_COOKIE['user_id'];
      //$_SESSION['username'] = $_COOKIE['username'];
    }
  }
?>
<html>
<head>
<title>View Profile</title>
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
        <li class="active"><a href="#">Profile<span class="sr-only">(current)</span></a></li>
        <li><a href="userprofile3.html">Edit</a></li>
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
  require_once('uploadvars.php');
  require_once('connect.php');
  
    // Make sure the user is logged in before going any further.
  if (!isset($_SESSION['ID'])) {
    echo '<p class="login">Please <a href="index.html">log in</a> to access this page.</p>';
    exit();
  }
  else {
    echo('<p class="login">You are logged in as ' . $_SESSION['email'] . '</p>');
  }
  $dbc = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die(mysql_error());
mysql_select_db(DB_NAME);
  // Grab the profile data from the database
  if (!isset($_GET['ID'])) {
    $query = "SELECT * FROM register_emp WHERE ID = '" . $_SESSION['ID'] . "'";
  }
  else {
    $query = "SELECT * FROM register_emp WHERE ID = '" . $_GET['ID'] . "'";
  }
  $data = mysql_query($query,$dbc);
 if (mysql_num_rows($data) == 1) {
    // The user row was found so display the user data
    $row = mysql_fetch_array($data);
 ?>
<div class="container" style="padding-top: 60px;">
  <h1 class="page-header">Your Profile</h1>
  <div class="row">
    <!-- left column -->
    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="text-center">
        <?php
         //echo '<img src="' . MM_UPLOADPATH . $row['picture'] .
        //'" alt="Profile Picture" class="avatar img-circle img-thumbnail" alt="avatar" />';
        echo '<img src="uploads/' . $row['picture'] . '"width="160" height="160"alt="Profile Picture" class="avatar img-circle img-thumbnail" alt="avatar" />';
        ?>
      </div>
    </form>
    </div>
   
    <!-- form column -->
    <div class="col-md-8 col-sm-6 col-xs-12 personal-info">
      <h3>Personal info</h3>
      <form class="form-horizontal" role="form">
       
        <div class="form-group">
          <label class="col-lg-3 control-label">First name:</label>
          <div class="col-lg-8">
            <input class="form-control" value="<?php echo $row['firstname']?>">
          </div>
        </div>
       
        <div class="form-group">
          <label class="col-lg-3 control-label">Last name:</label>
          <div class="col-lg-8">
            <input class="form-control" value="<?php echo $row['lastname'] ?>">
          </div>
        </div>

        <div class="form-group">
          <label class="col-lg-3 control-label">Gender:</label>
          <div class="col-lg-8">
           <?php
            if ($row['gender'] == 'Male') { ?>
         <input class="form-control" value="<?php echo 'Male' ?>">
     <?php } 
      else if ($row['gender'] == 'Female') { ?>
         <input class="form-control" value="<?php echo 'Female' ?>">
     <?php }
      else { ?>
       <input class="form-control" value="<?php echo '?' ?>">
    <?php  }
      ?>
         </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Experience:</label>
          <div class="col-lg-8">
            <?php
            if ($row['userlevel'] == 'Fresher') { ?>
        <input class="form-control" value="<?php echo 'Fresher' ?>">
     <?php } 
      else if ($row['userlevel'] == 'Experienced(1-2 yr)') { ?>
        <input class="form-control" value="<?php echo 'Experienced(1-2 yr)' ?>">
     <?php }
      else if ($row['userlevel'] == 'Experienced(2+ yr)'){ ?>
      	 <input class="form-control" value="<?php echo 'Experienced(2+ yr)' ?>">
     <?php } 
      else { ?>
         <input class="form-control" value="<?php echo '?' ?>">
      <?php }
       ?> 
       </div>
          </div>

        <div class="form-group">
          <label class="col-md-3 control-label">Date of Birth:</label>
          <div class="col-md-8">
          	 
            <input class="form-control" value="<?php echo $row['birthdate'] ?>">
          </div>
        </div>
        <?php } ?>
        <div class="form-group">
          <label class="col-md-3 control-label">Current Location:</label>
          <div class="col-md-8">
             
            <input class="form-control" value="<?php echo $row['city'] ?>">
          </div>
        </div>
        
        <!--<div class="form-group">
          <label class="col-md-3 control-label">State:</label>
          <div class="col-md-8">
             
            <input class="form-control" value="<?php echo $row['state'] ?>">
          </div>
        </div>-->
        <div class="form-group">
          <label class="col-md-3 control-label">Educational Qualifications:</label>
          <div class="col-md-8">
             
            <input class="form-control" value="<?php echo $row['colg'] ?>">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label">Previous Experience(Job/Internship):</label>
          <div class="col-md-8">
             
             <input class="form-control" value="<?php echo $row['prevjobs'] ?>">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label">Certifications:</label>
          <div class="col-md-8">
             
            <input class="form-control" value="<?php echo $row['certification'] ?>">
          </div>
        </div>

                <div class="form-group">
          <label class="col-md-3 control-label"></label>
          <div class="col-md-8">
            <input class="btn btn-primary" value="Add more" type="button" name="button" onClick="window.location.href='userprofile3.html'">
            <span></span>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>