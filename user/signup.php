<?php
include("include/config.php");
if(isset($_POST['submit'])){
if(($_POST['email']!='') && ($_POST['pass']!='') && ($_POST['url']!='') && ($_POST['comp']!='') && ($_POST['name']!=''))
{
	$sql=mysql_query("select * from users where company='$_POST[url]' OR loginemail='$_POST[email]'");
	$result=mysql_fetch_assoc($sql);
	if($result["loginemail"]==""||$result["company"]=="")
	{  
		$sql1=mysql_query("insert into `users` values('$_POST[email]','$_POST[pass]','$_POST[comp]','$_POST[name]','$_POST[url]')");
		$sql2=mysql_query("insert into `active`(company) values ('$_POST[url]')");
		?>
		<script>
		
		window.location.href="send.php?q=<?php echo $_POST['email'];?>&u=<?php echo $_POST['comp']?>";
		</script>
		<?php 
	}
	else
	{
		echo '<script>
		alert("Choose a different domain.");
		</script>';
	}
}
else{
echo '<script>alert("Please fill the complete form");</script>';	
}
}
?>


<!DOCTYPE html>
<html lang="en" class=" js no-flexbox flexbox-legacy canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title> Website</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="./signup/css">
<link rel="stylesheet" type="text/css" href="./signup/carbon.css">
<link rel="stylesheet" type="text/css" href="./signup/public.css">
</head>
<body class="w-ui vertical    viewing-page-1" data-pagename="home">
<div id="panels" class="onepage-wrapper" style="position: relative; -webkit-transform: translate3d(0px, 0%, 0px); -webkit-transition: all 600ms ease; transition: all 600ms ease; transform: translate3d(0px, 0%, 0px);">
<div id="header_panel" class="section header active" data-theme="dark" data-title="HOME" data-index="1" style="position: absolute; top: 0%;">
<div class="slideshow-bg"></div>
<div class="content" style="top:40%">
    <div class="title">
        <h1>You need a great website</h1>
        <h2>It's surprisingly easy to create one</h2>
    </div>
    <div class="signup">
        <h2><a href="login.php">Log In</a> or Sign Up</h2>
        <form method="post" id="header-signup-form">
        <input type="text" name="name" placeholder="Full Name" id="header-signup-form-name" autocomplete="off">
        <input type="text" name="email" placeholder="Email" id="header-signup-form-email" autocomplete="off">
        <input type="password" name="pass" placeholder="Password" id="header-signup-form-pass" autocomplete="off">
        <br/>
        <input type="text" name="comp" placeholder="Company" autocomplete="off" > 
        <font style=" font-size:20px; float:left;">www.xyz.com/</font>
        <br/>
        <input type="text" name="url" placeholder="Desired Url" autocomplete="off" > </font>      
        <p id="header-signup-form-error"></p>
        <input type="submit" value="Get Started" name="submit">
        <p id="reg"></p>
        <p class="agree">
        By signing up, you agree to our<br><a href="#" target="_blank">Terms of Service</a> and <a href="#" target="_blank">Privacy Policy</a>        </p>
        </form>
        <input type="hidden" id="header-signup-form-response" value="">
    </div>
</div>
</body>
</html>