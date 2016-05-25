<html>
<head>  
     
</head>
<body>
	<?php  
include "include/config.php";
$id = $_GET['id']; 
     $delquery = mysql_query("delete from images where id=$id");
	 ?>
     <script>
	 window.location.href="banners.php";
	  </script>
     </body>

   </html>