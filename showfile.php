<?php
session_start();
// If the session vars aren't set, try to set them with a cookie
  if (!isset($_SESSION['id'])) {
    if (isset($_COOKIE['id']) && isset($_COOKIE['id'])) {
     // $_SESSION['id'] = $_COOKIE['id'];
      //$_SESSION['username'] = $_COOKIE['username'];
    }
  }
  if (!isset($_SESSION['id'])) {
    echo '<p class="login">Please <a href="index.php">log in</a> to access this page.</p>';
    exit();
  }
  else {
    echo('<p class="login">You are logged in as ' . $_SESSION['username'] . '</p>');
  }
require_once('uploadvars.php');
require_once('connect.php');
$dbc = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die(mysql_error());
mysql_select_db(DB_NAME);  
$sql="SELECT * from register_emp where ID='" . $_SESSION['ID'] . "'";
$result_set=mysql_query($sql);
 while($row=mysql_fetch_array($result_set))
 {
 	?>
 	<a href="uploads/<?php echo $row['picture'] ?>" target="_blank">view file</a>
 	<a href="cv/<?php echo $row['cvname'] ?>" target="_blank">view file</a>
<?php 
}
?>