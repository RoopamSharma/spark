<html>
<head>      
</head>
<body>
	<?php  
include "include/config.php";
$id = $_GET['id']; 
     $delquery = mysql_query("delete from icons where id=$id");
	 ?>
     <script>
	 window.location.href="home.php";
	  </script>
     </body>

   </html>