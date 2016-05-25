<?php 

session_start();

include("include/config.php"); ?>
<?php
 $query = mysql_query("delete from maincat where mcid='".$_GET['id']."' AND uid='$_SESSION[company]'");
      if($query)
      {
        header("location:main_cat.php");
      }
?>