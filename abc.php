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
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
</head>
<body>
<?php
  require_once('uploadvars.php');
  require_once('connect.php');
  
    // Make sure the user is logged in before going any further.
  if (!isset($_SESSION['ID'])) {
    echo '<p class="login">Please <a href="index.html">log in</a> to access this page.</p>';
    exit();
  }
  else {
    echo('<p class="login">You are logged in as ' . $_SESSION['email'] . '. <a href="logout.php">Log out</a>.</p>');
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
        echo '<img src="data:image/png;base64,' . base64_encode($row['picture']) . '"width="160" height="160"alt="Profile Picture" class="avatar img-circle img-thumbnail" alt="avatar" />';
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
          
           <?php echo $row['firstname']?>
         
        </div>
       
        <div class="form-group">
          <label class="col-lg-3 control-label">Last name:</label>
          
            <?php echo $row['lastname'] ?>
          
        </div>

        <div class="form-group">
          <label class="col-lg-3 control-label">Gender:</label>
          
           <?php
            if ($row['gender'] == 'Male') {
        echo 'Male';
      }
      else if ($row['gender'] == 'Female') {
        echo 'Female';
      }
      else {
        echo '?';
      }
      ?>
       
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Experience:</label>
          
            <?php
            if ($row['userlevel'] == 'Fresher') {
        echo 'Fresher';
      }
      else if ($row['userlevel'] == 'Experienced(1-2 yr)') {
        echo 'Experienced(1-2 yr)';
      }
      else if ($row['userlevel'] == 'Experienced(2+ yr)'){
        echo 'Experienced(2+ yr)';
      }
      else {
        echo '?';
      }
       ?> 
       
          </div>

        <div class="form-group">
          <label class="col-md-3 control-label">Date of Birth:</label>
          
             
            <?php echo $row['birthdate']?>
          
        </div>
        <?php } ?>
        <div class="form-group">
          <label class="col-md-3 control-label">City:</label>
          
             
            <?php echo $row['city']?>
          
        </div>
        
        <div class="form-group">
          <label class="col-md-3 control-label">State:</label>
          
            <?php echo $row['state']?>
          
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label">Educational Qualifications:</label>
          
             
            <?php echo $row['colg']?>
         
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label">Previous Experience(Job/Internship):</label>
         
             
            <?php echo $row['prevjobs']?>
          
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label">Certifications:</label>
          
             
            <?php echo $row['certification']?>
          
        </div>

                <div class="form-group">
          <label class="col-md-3 control-label"></label>
          
            <input class="btn btn-primary" value="Add more" type="button" name="button" onClick="window.location.href='addedu.php'">
            <span></span>
          
        </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>