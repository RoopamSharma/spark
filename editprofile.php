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

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>User- Edit Profile</title>
   <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="style.css" />
  
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <!-- Load jQuery UI Main JS  -->
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    
    <!-- Load SCRIPT.JS which will create datepicker for input field  -->
    <script src="js/script.js"></script>
    <script src="js/select.js"></script>
    <link rel="stylesheet" type="text/css" href="runnable.css" />
</head>
<body>
  <h3>Edit Profile</h3>

<?php
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
  mysql_select_db(DB_NAME);

  if (isset($_POST['submit'])) 
  {
    // Grab the profile data from the POST
    $first_name = mysql_real_escape_string(trim($_POST['firstname']),$dbc);
    $last_name = mysql_real_escape_string(trim($_POST['lastname']),$dbc);
    $gender = mysql_real_escape_string(trim($_POST['gender']),$dbc);
    $birthdate = mysql_real_escape_string(trim($_POST['birthdate']),$dbc);
    $level= mysql_real_escape_string(trim($_POST['level']),$dbc);
    $city = mysql_real_escape_string(trim($_POST['city']),$dbc);
    $state = mysql_real_escape_string(trim($_POST['state']),$dbc);
    $old_picture = mysql_real_escape_string(trim($_POST['old_picture']),$dbc);
    $new_picture = mysql_real_escape_string(trim($_FILES['new_picture']['name']),$dbc);
    $new_picture_type = $_FILES['new_picture']['type'];
    $new_picture_size = $_FILES['new_picture']['size'];
    
    $error = false;

    // Validate and move the uploaded picture file, if necessary
    if (!empty($new_picture)) {
      if ((($new_picture_type == 'image/gif') || ($new_picture_type == 'image/jpeg') || ($new_picture_type == 'image/pjpeg') ||
        ($new_picture_type == 'image/png'))) {
        if ($_FILES['file']['error'] == 0) {
          // Move the file to the target upload folder
          $target = MM_UPLOADPATH . basename($new_picture);
          if (move_uploaded_file($_FILES['new_picture']['tmp_name'], $target)) {
            // The new picture file move was successful, now make sure any old picture is deleted
            if (!empty($old_picture) && ($old_picture != $new_picture)) {
              @unlink(MM_UPLOADPATH . $old_picture);
            }
          }
          else {
            // The new picture file move failed, so delete the temporary file and set the error flag
            @unlink($_FILES['new_picture']['tmp_name']);
            $error = true;
            echo '<p class="error">Sorry, there was a problem uploading your picture.</p>';
          }
        }
      }
      else {
        // The new picture file is not valid, so delete the temporary file and set the error flag
        @unlink($_FILES['new_picture']['tmp_name']);
        $error = true;
        echo '<p class="error">Your picture must be a GIF, JPEG, or PNG image file </p>';
      }
    }
    


    // Update the profile data in the database
    if (!$error) {
      if (!empty($first_name) && !empty($last_name) && !empty($gender) && !empty($birthdate) && !empty($city) && !empty($state) && !empty($level)) {
        // Only set the picture column if there is a new picture
        if (!empty($new_picture)) {
          $query = "UPDATE register_emp SET firstname = '$first_name', lastname = '$last_name', gender = '$gender', " .
            " birthdate = '$birthdate', city = '$city', state = '$state', picture = '$new_picture',userlevel='$userlevel' WHERE ID = '" . $_SESSION['ID'] . "'";
        }
        else {
          $query = "UPDATE register_emp SET firstname = '$first_name', lastname = '$last_name', gender = '$gender', " .
            " birthdate = '$birthdate', city = '$city', state = '$state',userlevel='$level' WHERE ID = '" . $_SESSION['ID'] . "'";
        }
        mysql_query($query,$dbc);

        // Confirm success with the user
        echo '<p>Your profile has been successfully updated.<a href="viewprofile.php">view your profile</a> or <a href="addedu.php">add educational details</a></p>';

        mysql_close();
        exit();
      }
      else {
        echo '<p class="error">You must enter all of the profile data (the picture is optional).</p>';
      }
    }
  } // End of check for form submission
  else {
    // Grab the profile data from the database
    $query = "SELECT firstname, lastname, gender, birthdate, city, state, picture,userlevel FROM register_emp WHERE ID = '" . $_SESSION['ID'] . "'";
    $data = mysql_query($query,$dbc) or die('Error querying');
    $row = mysql_fetch_array($data);

    if ($row != NULL) {
      $first_name = $row['firstname'];
      $last_name = $row['lastname'];
      $gender = $row['gender'];
      $birthdate = $row['birthdate'];
      $city = $row['city'];
      $state = $row['state'];
      $old_picture = $row['picture'];
      $level=$row['userlevel'];
    }
    else {
      echo '<p class="error">There was a problem accessing your profile.</p>';
    }
  }

  mysql_close();
?>

  <form enctype="multipart/form-data" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo MM_MAXFILESIZE; ?>" />
    <fieldset>
      <legend>Personal Information</legend>
      <label for="firstname">First name:</label>
      <input type="text" id="firstname" name="firstname" value="<?php if (!empty($first_name)) echo $first_name; ?>" /><br />
      <label for="lastname">Last name:</label>
      <input type="text" id="lastname" name="lastname" value="<?php if (!empty($last_name)) echo $last_name; ?>" /><br />
      <label for="gender">Gender:</label>
      <select id="gender" name="gender">
        <option value="M" <?php if (!empty($gender) && $gender == 'M') echo 'selected = "selected"'; ?>>Male</option>
        <option value="F" <?php if (!empty($gender) && $gender == 'F') echo 'selected = "selected"'; ?>>Female</option>
      </select><br />
      <label for="birthdate">Birthdate:</label>
      <input type="text"  id="datepicker" name="birthdate" value="<?php if (!empty($birthdate)) echo $birthdate; else echo 'YYYY-MM-DD'; ?>" /><br />
      <label for="state">State:</label>
      <input type="text" id="state" name="state" value="<?php if (!empty($state)) echo $state;?>" /></br>
      <label for="city">City:</label>
      <input type="text" id="city" name="city" value="<?php if (!empty($city)) echo $city;?>" /></br>"  
      <label for="level">Experience Level :</label>
       <select id="level" name="level">
        <option value="Fresher" <?php if (!empty($level) && $level== 'Fresher') echo 'selected="selected"';?>>Fresher</option>
        <option value="Experienced(1-2 yr)" <?php if (!empty($level) && $level== '1to2yrexp') echo 'selected="selected"';?>>Experienced(1-2 yr)</option>
        <option value="Experienced(2+ yr)" <?php if (!empty($level) && $level== '2plusexp') echo 'selected="selected"';?>>Experienced(2+ yr)</option>
      <input type="hidden" name="old_picture" value="<?php if (!empty($old_picture)) echo $old_picture; ?>" />
      <label for="new_picture">Picture:</label>
      <input type="file" id="new_picture" name="new_picture" />
      <?php if (!empty($old_picture)) {
        echo '<img class="profile" src="' . MM_UPLOADPATH . $old_picture . '" alt="Profile Picture" />';
      }?>
      <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
      <input name="userfile" type="file" id="userfile">
      <input name="upload" type="submit" id="upload" value=" Upload " action="upload_db.php">
      
     
    </fieldset>
    <input type="submit" value="Save Profile" name="submit" />
  </form>
</body>
</html>
