<?php 
session_start();
include("include/config.php") ?>
<?php
 $query = mysql_query("delete from blogs where id='".$_GET['id']."' and author='$_SESSION[company]'");
      if($query)
      {
        header("location:blogs.php");
      }
?>