<?php
  session_start();

  // If the session vars aren't set, try to set them with a cookie
  if (!isset($_SESSION['employerid'])) {
    if (isset($_COOKIE['employerid']) && isset($_COOKIE['employerid'])) {
      $_SESSION['employerid'] = $_COOKIE['employerid'];
      $_SESSION['co_email'] = $_COOKIE['co_email'];
    }
  }
require_once('uploadvars.php');
  require_once('connect.php');
   // Make sure the user is logged in before going any further.
  if (!isset($_SESSION['employerid'])) {
    echo '<p class="login">Please <a href="index.html">log in</a> to access this page.</p>';
    exit();
  }
  else {
    echo('<p class="login">You are logged in as ' . $_SESSION['employerid'] . '. <a href="logoutemployer.php">Log out</a>.</p>');
  }
$dbc = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die(mysql_error());
  echo "ok";
  mysql_select_db(DB_NAME);
echo "good";
  if (isset($_POST['submit'])) 
  {
    echo "v good";
    // Grab the profile data from the POST
    $coname=mysql_real_escape_string(trim($_POST['coname']),$dbc);
    $cotype=mysql_real_escape_string(trim($_POST['cotype']),$dbc);
    $about=mysql_real_escape_string(trim($_POST['about']),$dbc);
    $error = false;
    //update profile data in database
    if (!$error) {
      $query="UPDATE employer SET co_name='$coname',co_type='$cotype',co_about='$about' WHERE employerid='" . $_SESSION['employerid'] . "'";
      // else echo 'FIll all fields';
       
        mysql_query($query,$dbc) or die(mysql_error());

        // Confirm success with the user
        echo '<p>Your profile has been successfully updated.<a href="employerprofile.php">view your profile</a></p>';

        mysql_close();
        exit();
      }
      else {
        echo '<p class="error">You must enter all of the profile data (the picture is optional).</p>';
      }

  } // End of check for form submission
else {
  $query="SELECT * from employer WHERE employerid='" . $_SESSION['employerid'] . "'";
   $data = mysql_query($query,$dbc) or die('Error querying');
    $row = mysql_fetch_array($data);

    if ($row != NULL) {
      $coname=$row['co_name'];
      $cotype=$row['co_type'];
      $about=$row['co_about'];
     }
     else
      {
      echo '<p class="error">There was a problem accessing your profile.</p>';
    }
  }

  mysql_close();
?> 