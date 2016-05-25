<?php include("include/config.php") ?>
<?php
 $query = mysql_query("delete from employer where employerid='".$_GET['id']."'");
      if($query)
      {
        header("location:employer.php");
      }
?>