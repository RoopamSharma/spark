<?php
$to=$_GET['q'];
$user=$_GET['u'];
?>
<html>
<head>
<title>Sending email using PHP</title>
</head>
<body>
<?php
   //echo $to,$user;
   $subject = "Activate Your Account";
   $message = "Please click on the following link to activate your account.\n <a href='www.einnovate.com/user/activate/".$user."'></a>";
   $header = "From:admin@einnovative.com \r\n";
   $retval = mail ($to,$subject,$message,$header);
   if( $retval == true )  
   {
     // echo "Message sent successfully...";
   }
   else
   {
      //echo "Message could not be sent...";
   }
?>
</body>
</html>



<?php
echo '<script>window.location.href="login.php"</script>';

?>