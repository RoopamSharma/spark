<?php include("include/config.php") ?>
<?php
 $query = mysql_query("UPDATE register_emp SET shortlist = !shortlist where ID='".$_GET['id']."'");
      if($query)
      { ?>
       <style>
       .el-check{
       	color:#5CB85C;
       }
       </style>

     <?php   header("location:details.php");
      }
?>