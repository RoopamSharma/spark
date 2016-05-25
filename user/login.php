<?php
	session_start(); 
	include("include/config.php");
	$error_msg=NULL;
	$email="";
	$password="";
	if(isset($_POST['login']) && ($_POST['email']!='') && ($_POST['pass']!=''))
	{
	$email = $_POST['email'];		
	$password = $_POST['pass'];	
	$que=mysql_query("select * from users where loginemail='$email' and password='$password'");		
	$ans=mysql_fetch_assoc($que);
	$company=$ans['company'];
	$count=mysql_num_rows($que);
	$sql6=mysql_query("select status from active where company='$company'");
	$result=mysql_fetch_assoc($sql6);
	
if($result["status"]=="inactive"||$result["status"]==""){
	echo'<script>
	window.location.href="validate.php";
	</script>
   ';
	}	
	else{
	if($count>0){
	$_SESSION["email123"]=$email;
	$_SESSION["company"]=$company;
?>
	<script>
	window.location.href="index.php";
	</script>
   <?php
}
else 
{
echo '<script>alert("Invalid EmailID or Password");</script>';
}}
}
?>
<!DOCTYPE html>
<html lang="en" class=" js no-flexbox flexbox-legacy canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title> Website</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="text/javascript" async="" src="./signup/f52zgtujz0.js"></script><script type="text/javascript" async="" defer="" src="./signup/quant.js"></script><script async="" src="./signup/analytics.js"></script><script async="" src="./signup/prum.min.js"></script><script src="./signup/modernizr.js"></script>
<link rel="stylesheet" type="text/css" href="./signup/css">
<link rel="stylesheet" type="text/css" href="./signup/carbon.css">
<link rel="stylesheet" type="text/css" href="./signup/public.css">
<script> var loginData = {"use_ssl":true,"redirect":false}; var phone = {"phoneNumber":"1-844-493-3259","showPhoneNumber":false}; var errorMsgs = {"wrongUserPass":"Wrong username or password","loginToAccess":"Please log-in to access that page","loginAgain":"Please log-in again to continue.","accountDeleted":"Your account was previously deleted","accountExists":"You already have an account. Please log-in.","loginInstead":"You already have an account. Please log-in."}; var DISABLE_SIGNUP_CAPTCHA = true; var oauth = {"facebook_app_id":"190291501407","domain":"www.weebly.com","user":false}; var homepageTestGroup = "final"; var bundlePlansGroup = false; var homePageScrollGroup = "control"; </script>
<script type="text/javascript" src="./signup/tl.js"></script>
<script type="text/javascript" src="./signup/jquery.min.js"></script>	
<script type="text/javascript" src="./signup/main.js"></script>
<script type="text/javascript">
			var ASSETS_BASE = 'cdn2.editmysite.com';
			var bootstrapData = {
				'showPricing': 'no',
				'freeTrial': 'no',
				'freePlan': '',
				'trialSegment': '',
				'domain': '',
				'useBundlePlans': ''
			};
            </script>
<script>
var _prum = [['id', '5552956dabe53d8f4acbca86'],
            ['mark', 'firstbyte', (new Date()).getTime()]];
(function() {
    var s = document.getElementsByTagName('script')[0]
      , p = document.createElement('script');
    p.async = 'async';
    p.src = '//rum-static.pingdom.net/prum.min.js';
    s.parentNode.insertBefore(p, s);
})();
</script>
<script type="text/javascript" src="./signup/ytc.js"></script></head>


<body class="w-ui vertical    viewing-page-1" data-pagename="home">
<div id="panels" class="onepage-wrapper" style="position: relative; -webkit-transform: translate3d(0px, 0%, 0px); -webkit-transition: all 600ms ease; transition: all 600ms ease; transform: translate3d(0px, 0%, 0px);">
<div id="header_panel" class="section header active" data-theme="dark" data-title="HOME" data-index="1" style="position: absolute; top: 0%;">
<div class="slideshow-bg"></div>
	<div class="content">
		<div class="title">
			<h1>You need a great website</h1>
			<h2>It's surprisingly easy to create one</h2>
		</div>
		<div class="signup">
			<h2>Log In or <a href="signup.php">Sign Up</a></h2>
			<form  method="post" id="header-signup-form">
				<input type="text" name="email" placeholder="Email" id="header-signup-form-email" autocomplete="off">
				<input type="password" name="pass" placeholder="Password" id="header-signup-form-pass" autocomplete="off">                                 
				<p id="header-signup-form-error"></p>
				<input type="submit" value="Log In" name="login">
			</form>
			<input type="hidden" id="header-signup-form-response" value="">
		</div>
	</div>
</div>	
</div>
</div>