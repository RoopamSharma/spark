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
$jr=$_GET['j'];
        include_once ('functions.php');
        $con = new DB_con();
		if($jr=='0')
		$r=$con->setjr($_GET['id']) ;
		else
		$r=$con->unsetjr($_GET['id']) ;?>
        <script>
		window.location.href="details.php";
		</script>
</html>