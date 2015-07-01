<?php
  session_start();

  // If the session vars aren't set, try to set them with a cookie
  if (!isset($_SESSION['ID'])) {
    if (isset($_COOKIE['ID']) && isset($_COOKIE['email'])) {
      $_SESSION['ID'] = $_COOKIE['ID'];
      $_SESSION['email'] = $_COOKIE['email'];
    }
  }
require_once('uploadvars.php');
  require_once('connect.php');
   // Make sure the user is logged in before going any further.
  if (!isset($_SESSION['ID'])) {
    echo '<p class="login">Please <a href="index.html">log in</a> to access this page.</p>';
    exit();
  }
  else {
    echo('<p class="login">You are logged in as ' . $_SESSION['ID'] . '. <a href="logout.php">Log out</a>.</p>');
  }

  // Connect to the database
  $dbc = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die(mysql_error());
  echo "ok";
  mysql_select_db(DB_NAME);
echo "good";
  if (isset($_POST['submit'])) 
  {
  	echo "v good";
  	// Grab the profile data from the POST
    $first_name = mysql_real_escape_string(trim($_POST['firstname']),$dbc);
    $last_name = mysql_real_escape_string(trim($_POST['lastname']),$dbc);
    $gender = mysql_real_escape_string(trim($_POST['gender']),$dbc);
    $birthdate = mysql_real_escape_string(trim($_POST['dob']),$dbc);
    $level= mysql_real_escape_string(trim($_POST['experience']),$dbc);
    //$city = mysql_real_escape_string(trim($_POST['city']),$dbc);
    //$state = mysql_real_escape_string(trim($_POST['state']),$dbc);
   // $old_picture = mysql_real_escape_string(trim($_POST['old_picture']),$dbc);
    //$new_picture = mysql_real_escape_string(trim($_FILES['new_picture']['name']),$dbc);
   // $new_picture_type = $_FILES['new_picture']['type'];
    //$new_picture_size = $_FILES['new_picture']['size'];
    
    $error = false;
    //update profile data in database
    if (!$error) {
     // if (!empty($first_name) && !empty($last_name) && !empty($gender) && !empty($birthdate) && !empty($level)) {
        
          $query = "UPDATE register_emp SET firstname = '$first_name', lastname = '$last_name', gender = '$gender', " .
            " birthdate = '$birthdate',userlevel='$level' WHERE ID = '" . $_SESSION['ID'] . "'";
        
       // else echo 'FIll all fields';
       
        mysql_query($query,$dbc) or die(mysql_error());

        // Confirm success with the user
        echo '<p>Your profile has been successfully updated.<a href="viewprofile.php">view your profile</a> or <a href="addedu.php">add educational details</a></p>';

        mysql_close();
        exit();
      }
      else {
        echo '<p class="error">You must enter all of the profile data (the picture is optional).</p>';
      }

  } // End of check for form submission
else {
    // Grab the profile data from the database
    $query = "SELECT firstname, lastname, gender, birthdate,userlevel FROM register_emp WHERE ID = '" . $_SESSION['ID'] . "'";
    $data = mysql_query($query,$dbc) or die('Error querying');
    $row = mysql_fetch_array($data);

    if ($row != NULL) {
      $first_name = $row['firstname'];
      $last_name = $row['lastname'];
      $gender = $row['gender'];
      $birthdate = $row['birthdate'];
      //$city = $row['city'];
      //$state = $row['state'];
      //$old_picture = $row['picture'];
      $level=$row['userlevel'];
    }
    else {
      echo '<p class="error">There was a problem accessing your profile.</p>';
    }
  }

  mysql_close();
?>


