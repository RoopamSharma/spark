<html>
<head>
 <title>Employer Dashboard</title>
 <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/cosmo/bootstrap.min.css" rel="stylesheet">
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
session_start();
 // If the session vars aren't set, try to set them with a cookie
  if (!isset($_SESSION['employerid'])) {
    if (isset($_COOKIE['employerid']) && isset($_COOKIE[''])) {
      $_SESSION['employerid'] = $_COOKIE['employerid'];
      $_SESSION['co_email'] = $_COOKIE['co_email'];
    }
  }       
require_once('connect.php');
if (!isset($_SESSION['employerid'])) {
    echo '<p class="login">Please <a href="employerstart.html">log in</a> to access this page.</p>';
    exit();
  }
  else {
    echo('<p class="login">You are logged in as ' . $_SESSION['employerid'] . '. <a href="logoutemployer.php">Log out</a>.</p>');
  }
  // Connect to the database
 $dbc = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
 mysql_select_db(DB_NAME);

  if (!isset($_GET['employerid'])) {
    $query = "SELECT job_title,job_description,opening,industry,postdate,deadline FROM job WHERE employerid = '" . $_SESSION['employerid'] . "'";
  }
  else {
    $query = "SELECT job_title,job_description,opening,industry,postdate,deadline FROM job WHERE employerid = '" . $_GET['employerid'] . "'";
  }
//echo $query;
$data = mysql_query($query,$dbc) or die(mysql_error());
//echo $data;
$numrows=mysql_num_rows($data);
//echo $numrows;
echo 'Jobs posted by you :';
echo '<table>';
    
    echo '<tr>';
    echo '<th>Job Title</th>';
    echo '<th>Job Description</th>';
    echo '<th>Opening</th>';
    echo '<th>Industry</th>';
    echo '<th>Post Date</th>';
    echo '<th>deadline</th>';
    echo '</tr>';
while($row=mysql_fetch_array($data)) {
    // The user row was found so display the user data
    
    echo '<tr>';
    if (!empty($row['job_title'])) {
      echo '<td>' . $row['job_title'] . '</td>&nbsp;';
    }
    if (!empty($row['job_description'])) {
      echo '<td>' . $row['job_description'] . '</td>&nbsp;';
    }
    if (!empty($row['opening'])) {
      echo '<td>' . $row['opening'] . '</td>&nbsp;';
    }
    if (!empty($row['industry'])) {
      echo '<td>' . $row['industry'] . '</td>&nbsp;';
    }
    if (!empty($row['postdate'])) {
      echo '<td>' . $row['postdate'] . '</td>&nbsp;';
    }
    if (!empty($row['deadline'])) {
      echo '<td>' . $row['deadline'] . '</td>&nbsp;';
    }
    echo '</tr>';
}
?>
</body>
</html>