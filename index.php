<?php
//Admin Login
//ob_start();
session_start();
include("include/connection.php");

if(isset($_POST['login']))
{
$username =$_POST['username'];
$password = $_POST['password'];
$row = mysql_query("select * from admin_login where username='$username' and password='$password'");
$row1=mysql_fetch_array($row);
if(mysql_num_rows($row)>0)
   {
     $_SESSION["username"]=$username;     //session set
	 ?>
	 <script type="application/javascript">
     window.location="dashboard.php?id=<?php echo $row1['id'];?>";   //redirects to dashboard
	 </script>
	 
	 <?php
	 //header('Location: dashboard.php');
   }
   else
   {
	   echo "User Name & Password not match !";
   }
}
?>



<!doctype html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <title>Job Portal</title>
        <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- bootstrap framework -->
        <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <!-- google webfonts -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <!-- main stylesheet -->
		<link href="assets/css/main.min.css" rel="stylesheet" media="screen">

    </head>
    <body class="login_page2">

        <div class="login_container">
            <form id="login_form" action="#" method="post" class="form-horizontal">
                <h2 class="heading_a"><span class="heading_text">Log in</span></h2>
                <div class="form-group">
                    <label for="login_username" class="col-sm-3 control-label">Username</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" value="" id="login_username" autocomplete="off" name="username">
                    </div>
                </div>
                <div class="form-group">
                    <label for="login_password" class="col-sm-3 control-label">Password</label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control" value="" id="login_password" autocomplete="off" name="password"> 
                    </div>
                </div>
                <div class="form-group sepH_c">
                    <div class="col-sm-9 col-sm-offset-3">
                        <input type="submit" name="login" value="Login" class="btn btn-sm btn-primary" />
                    </div>
                </div>
               
                
            </form>
        </div>



    </body>


</html>