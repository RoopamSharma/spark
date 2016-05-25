<?php include("include/config.php") ?>
<?php
 $query = mysql_query("delete from register_emp where ID='".$_GET['id']."'");
      if($query)
      {
        header("location:details.php");
      }
?>