<?php
session_start();
 // If the session vars aren't set, try to set them with a cookie
  if (!isset($_SESSION['employerid'])) {
    if (isset($_COOKIE['employerid']) && isset($_COOKIE[''])) {
      $_SESSION['employerid'] = $_COOKIE['employerid'];
      $_SESSION['co_email'] = $_COOKIE['co_email'];
    }
  }       
  $eid=$_SESSION['employerid'];
require_once('connect.php');
require_once('employer_header.php');
?>
<html>
<head>
 <title>Employer Dashboard</title>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        </head>
<body>
<?php
if (!isset($_SESSION['employerid'])) {
    exit();
  }
  else {
  }
  // Connect to the database
 $dbc = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
 mysql_select_db(DB_NAME);
 ?>
 <?php $que= mysql_query("select * from recommend,job,employer where recommend.jobid=job.jobid and job.employerid=employer.employerid and employer.employerid='$eid'") ;
                        $rowxy = mysql_fetch_array($que);
                      ?>
 <!--<div class="progress">
  <div class="progress-bar progress-bar-info" style="width:80%"><?php echo $rowz = mysql_num_rows($que);?></div>
</div>-->


                     
                    
  <?php if (!isset($_GET['employerid'])) {
    $query = "SELECT jobid,job_title,opening,industry,postdate,deadline FROM job WHERE employerid = '" . $_SESSION['employerid'] . "' order by postdate desc";
  }
  else {
    $query = "SELECT jobid,job_title,opening,industry,postdate,deadline FROM job WHERE employerid = '" . $_GET['employerid'] . "' order by postdate desc";
  }
//echo $query;
$data = mysql_query($query,$dbc) or die(mysql_error());
//echo $data;
$numrows=mysql_num_rows($data);
//echo $numrows;
echo '<center><h1>JOBS POSTED</h1>';
?>
<table style="width:80%" class="table table-yuk2 toggle-arrow-tiny" data-filter="#textFilter" data-page-size="9">
<?php    echo '<tr>';
    echo '<th>Job Title</th>';
    echo '<th>Openings</th>';
  echo '<th>Status</th>';
    echo '<th>Industry</th>';
    echo '<th>Post Date</th>';
    echo '<th>Deadline</th>';
    echo '</tr>';
while($row=mysql_fetch_array($data)) {
    // The user row was found so display the user data
    $status="open";
    echo '<tr>';
    if (!empty($row['job_title'])) {
      echo '<td><a href="recommendations.php?jobid='.$row['jobid'].'">' . $row['job_title'] . '</a></td>&nbsp;';
    }
    if (!empty($row['opening'])) {
      echo '<td>' . $row['opening'] . '</td>&nbsp;';
    }
  if (!empty($status)) {
      echo '<td>' .$status . '</td>&nbsp;';
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
echo '</table></center>';
?>
</body>
</html>