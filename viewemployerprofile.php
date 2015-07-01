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

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title> Dear Employer,View Profile</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
  <h3>View Profile</h3>
<?php
require_once('connect.php');
if (!isset($_SESSION['employerid'])) {
    echo '<p class="login">Please <a href="employerstart.html">log in</a> to access this page.</p>';
    exit();
  }
  else {
    echo('<p class="login">You are logged in as ' . $_SESSION['employerid'] . '. <a href="logoutemployer.php">Log out</a>.</p>');
  }
  // Connect to the database
 $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

  // Grab the profile data from the database
  if (!isset($_GET['employerid'])) {
    $query = "SELECT name, co_name,co_email,co_type,co_about FROM employer WHERE employerid = '" . $_SESSION['employerid'] . "'";
  }
  else {
    $query = "SELECT name, co_name,co_email,co_type,co_about FROM employer WHERE employerid = '" . $_GET['employerid'] . "'";
  }
$data = mysqli_query($dbc, $query);

  if (mysqli_num_rows($data) == 1) {
    // The user row was found so display the user data
    $row = mysqli_fetch_array($data);
    echo '<table>';
    if (!empty($row['name'])) {
      echo '<tr><td class="label">Username:</td><td>' . $row['name'] . '</td></tr>';
    }
    if (!empty($row['co_name'])) {
      echo '<tr><td class="label">Company Name:</td><td>' . $row['co_name'] . '</td></tr>';
    }
    if (!empty($row['co_email'])) {
      echo '<tr><td class="label">Email:</td><td>' . $row['co_email'] . '</td></tr>';
    }
    if (!empty($row['co_type'])) {
      echo '<tr><td class="label">Company Type:</td><td>' . $row['co_type'] . '</td></tr>';
    }
    if (!empty($row['co_about'])) {
      echo '<tr><td class="label">About:</td><td>' . $row['co_about'] . '</td></tr>';
    }
}

?>  
</body>
</html>
