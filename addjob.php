<?php
session_start();
 // If the session vars aren't set, try to set them with a cookie
  if (!isset($_SESSION['employerid'])) {
    if (isset($_COOKIE['employerid']) && isset($_COOKIE[''])) {
      $_SESSION['employerid'] = $_COOKIE['employerid'];
      $_SESSION['co_email'] = $_COOKIE['co_email'];
    }
  }
//echo "hi";
require_once('connect.php');
 //Make sure the employer is logged in before going any further.
 if (!isset($_SESSION['employerid'])) {
 echo '<p class="login">Please <a href="employerstart.html">log in</a> to access this page.</p>';
  exit();
  }
  else {
  //echo('<p class="login">You are logged in as ' . $_SESSION['employerid'] . '.</p>');
 }

  // Connect to the database
  $dbc = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die(mysql_error());
  //echo "kim";
  mysql_select_db(DB_NAME);
  if (isset($_POST['submit'])) 
  {
    //echo "joe";
    $jobtitle=mysql_real_escape_string(trim($_POST['jobtitle']),$dbc);
    $description=mysql_real_escape_string(trim($_POST['description']),$dbc);
    $opening=mysql_real_escape_string(trim($_POST['opening']),$dbc);
    $industry=mysql_real_escape_string(trim($_POST['industry']),$dbc);
    $postdate=mysql_real_escape_string(trim($_POST['pdate']),$dbc);
    $deadline=mysql_real_escape_string(trim($_POST['ddate']),$dbc);

    if(!empty($jobtitle) && !empty($description) && !empty($opening) && !empty($industry) && !empty($postdate) && !empty($deadline))
    {
      // echo "how";
       $result=mysql_query("SELECT employerid FROM employer WHERE employerid = '" . $_SESSION['employerid'] . "'");

       $row = mysql_fetch_row($result);
       print_r($row);
      $query="INSERT into job(employerid,job_title,job_description,opening,industry,postdate,deadline) VALUES ('$row[0]','$jobtitle','$description','$opening','$industry','$postdate','$deadline')";
     mysql_query($query,$dbc) or die(mysql_error());
     // Confirm success with the employer
        //echo 'Job Successfully Posted';
      mysql_close();
       // exit();
         header('Location:employerdash.php');
    
     }
     else
     {
       echo 'Fill all the inputs';
     }   
  }






?>  