<?php 
session_start();
include("include/config.php") ?>
<?php
 $query = mysql_query("delete from product where proid='".$_GET['id']."' and uid='$_SESSION[company]'");
      if($query)
      {
        header("location:all_pro.php");
      }
?>