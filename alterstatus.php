<?php 
session_start();
if (!isset($_SESSION['username'])) {
    echo '<p class="login">Please <a href="index.php">log in</a> to access this page.</p>';
    exit();
  }
  else {
    echo('<p class="login">You are logged in as ' . $_SESSION['username'] . '</p>');
  }
?>
<html>
<head>
</head>    
<?php 
$s=$_GET['s'];
        include_once ('functions.php');
        $con = new DB_con();
		if($s=='Unavailable')
		$r=$con->setstatus($_GET['eid']) ;
		else
		$r=$con->unsetstatus($_GET['eid']) ;?>
        <script>
		window.location.href="employer.php";
		</script>
</html>