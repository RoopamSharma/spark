<?php session_start();?>
<html>
<head>
 <title>Employer Dashboard</title>
</head>
<body>
<?php
 // If the session vars aren't set, try to set them with a cookie
  if (!isset($_SESSION['employerid'])) {
    if (isset($_COOKIE['employerid']) && isset($_COOKIE[''])) {
      $_SESSION['employerid'] = $_COOKIE['employerid'];
      $_SESSION['co_email'] = $_COOKIE['co_email'];
    }
  }       
require_once('connect.php');
require_once('employer_header.php');
if (!isset($_SESSION['employerid'])) {
    exit();
  }
  else {
  }
  // Connect to the database
 $dbc = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
 mysql_select_db(DB_NAME);
  if (!isset($_GET['employerid'])) {
    $query = "SELECT jobid,job_title,job_description,opening,industry,postdate,deadline FROM job WHERE employerid = '" . $_SESSION['employerid'] . "' and jobid='".$_GET['jobid']."'";
  }
  else {
    $query = "SELECT jobid,job_title,job_description,opening FROM job WHERE employerid = '" . $_GET['employerid'] . "'";
  }
//echo $query;
$data = mysql_query($query,$dbc) or die(mysql_error());
//echo $data;
$numrows=mysql_num_rows($data);
//echo $numrows;
$jobid=0;
?>
<a href="recommendations.php?jobid=<?php echo $_GET['jobid'];?>" title="All Recommendations" class="btn btn-default">All Recommendations</a>
<a href="rpending.php?jobid=<?php echo $_GET['jobid'];?>" title="Pending" class="btn btn-default">Pending</a>
<a href="rselect.php?jobid=<?php echo $_GET['jobid'];?>" title="Selected candidates" class="btn btn-default">Selected</a>
<a href="rshortlist.php?jobid=<?php echo $_GET['jobid'];?>" title="Shortlisted candidates" class="btn btn-default">Shortlisted</a>
<a href="rreject.php?jobid=<?php echo $_GET['jobid'];?>" title="Rejected candidates" class="btn btn-default">Rejected</a>
<?php
echo "<center><div>";
echo '<h1>This Job :';
while($row=mysql_fetch_array($data)) {
$jobid=$row['jobid'];
    // The user row was found so display the user data
    if (!empty($row['job_title'])) {
  echo $row['job_title'] . '</h1>&nbsp;<br/>';
    }
    if (!empty($row['job_description'])) {
      echo 'Job Role  : '.$row['job_description'] . '&nbsp;<br/>';
    }
    if (!empty($row['opening'])) {
      echo 'Number of openings  : '.$row['opening'] . '&nbsp;<br/>';
    }
}
echo '</div></center>';
$_SESSION["jobid"]=$jobid;
?>
<div class="rightpanel">
<div class="pageheader">
<div class="pageicon"><span class="iconfa-laptop"></span></div>
<div class="pagetitle">
            </div>
        </div><!--pageheader-->
        
    <div class="maincontent">
    <div class="maincontentinner">
    <div class="row-fluid">           
    <div style="text-align:center; padding-left:30px;" >
   
<?php 
$q="select * from recommend,register_emp where recommend.ID=register_emp.ID and recommend.jobid='".$_GET['jobid']."' ORDER BY register_emp.experience desc";
$data=mysql_query($q,$dbc) or die(mysql_error());
$recc=mysql_num_rows($data);
?>
<center>Number of Recommendations :<?php echo $recc;?></center>
<?php while($row=mysql_fetch_array($data)) 
{
?>
  <div class="entry">
    <div style="float:left;">
      <img float='left' src="uploads/<?php echo $row['picture'];?>" 'width='100' height='100'></img>
        <br/>
  <?php echo $row['firstname'].'&nbsp;'.$row['lastname'].'<br/>'.$row['email'].'<br/>'.$row['phone'].'<br/>Experience : '.$row['experience'].'years';?>
    
<form action ="status.php" method="post">
<input type="hidden" value="<?php echo $row['ID']; ?>" name="sid"></input>
<input type="hidden" value="<?php echo $row['jobid']; ?>" name="jid"></input>
<select class="rstatus" name="rstatus">
<?php if($row['status']=="pending") { ?>
<option value="pending" <?php if($row['status']=="pending") echo "selected";?>>Pending</option>
<option value="selected" <?php if($row['status']=="selected") echo "selected";?>>Select</option>
<option value="shortlisted" <?php if($row['status']=="shortlisted") echo "selected";?>>Shortlist</option>
<option value="rejected" <?php if($row['status']=="rejected") echo "selected";?>>Reject</option>
<?php } else  { ?>
<option value="selected" <?php if($row['status']=="selected") echo "selected";?>>Select</option>
<option value="shortlisted" <?php if($row['status']=="shortlisted") echo "selected";?>>Shortlist</option>
<option value="rejected" <?php if($row['status']=="rejected") echo "selected";?>>Reject</option>
<?php } ?>
</select>
<br/>
Add Remarks
<br/>
<textarea id="rtext" rows="3" name="remarks"><?php echo $row['remarks'];?></textarea>
<br/>
<input type="submit" name="submit" ></input>
</form>
</div>
         </div>
<?php } ?>
    </div> 
    </div>
    </div>
    </div>
    </div>
    </body>
    </html>