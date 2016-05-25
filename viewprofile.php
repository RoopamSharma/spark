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

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title> Dear Student ,View Profile</title>
  <link rel="stylesheet" type="text/css" href="style.css" />

</head>
<body>

  <h3>View Profile</h3>

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

  // Connect to the database
$dbc = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die(mysql_error());
mysql_select_db(DB_NAME);
  // Grab the profile data from the database
  if (!isset($_GET['ID'])) {
    $query = "SELECT  firstname, lastname, gender, birthdate, city, state, picture,email,userlevel,cvname FROM register_emp WHERE ID = '" . $_SESSION['ID'] . "'";
  }
  else {
    $query = "SELECT  firstname, lastname, gender, birthdate, city, state, picture,email,userlevel,cvname FROM register_emp WHERE ID = '" . $_GET['ID'] . "'";
  }
  $data = mysql_query($query,$dbc);

  if (mysql_num_rows($data) == 1) {
    // The user row was found so display the user data   
    $row = mysql_fetch_array($data);
    echo '<table>';
 if (!empty($row['email'])) {
      echo '<tr><td class="label">Username:</td><td>' . $row['email'] . '</td></tr>';
    }
    if (!empty($row['firstname'])) {
      echo '<tr><td class="label">First name:</td><td>' . $row['firstname'] . '</td></tr>';
    }
    if (!empty($row['lastname'])) {
      echo '<tr><td class="label">Last name:</td><td>' . $row['lastname'] . '</td></tr>';
    }
    if (!empty($row['gender'])) {
      echo '<tr><td class="label">Gender:</td><td>';
      if ($row['gender'] == 'M') {
        echo 'Male';
      }
      else if ($row['gender'] == 'F') {
        echo 'Female';
      }
      else {
        echo '?';
      }
      echo '</td></tr>';
    }
    if (!empty($row['birthdate'])) {
      if (!isset($_GET['ID']) || ($_SESSION['ID'] == $_GET['ID'])) {
        // Show the user their own birthdate
        echo '<tr><td class="label">Birthdate:</td><td>' . $row['birthdate'] . '</td></tr>';
      }
      else {
        // Show only the birth year for everyone else
        list($year, $month, $day) = explode('-', $row['birthdate']);
        echo '<tr><td class="label">Year born:</td><td>' . $year . '</td></tr>';
      }
    }
    if(!empty($row['userlevel']))
     {
        echo '<tr><td class="label">Experience Level:</td><td>';
      if ($row['userlevel'] == 'Fresher') {
        echo 'Fresher';
      }
      else if ($row['userlevel'] == 'Experienced(1-2 yr)') {
        echo 'Experienced(1-2 yr)';
      }
      else if ($row['userlevel'] == 'Experienced(2+ yr)') {
        echo 'Experienced(2+ yr)';
      }
      else {
        echo '?';
      }
      echo '</td></tr>';
     } 
    if (!empty($row['city']) || !empty($row['state'])) {
      echo '<tr><td class="label">Location:</td><td>' . $row['city'] . ', ' . $row['state'] . '</td></tr>';
    }
    if (!empty($row['picture'])) {

      echo '<tr><td class="label">Picture:</td><td><img src="' . MM_UPLOADPATH . $row['picture'] .
        '" alt="Profile Picture" /></td></tr>';
    }
    if (!empty($row['cvname'])) {
      echo '<tr><td class="label">CV:</td><td></td></tr>';
    }
    echo '</table>';
    if (!isset($_GET['ID']) || ($_SESSION['ID'] == $_GET['ID'])) {
      echo '<p>Would you like to <a href="editprofile.php">edit your profile</a>?</p>';
    }
  } // End of check for a single row of user results
  else {
    echo '<p class="error">There was a problem accessing your profile.</p>';
  }

  mysql_close();
?>
</body>
</html>
