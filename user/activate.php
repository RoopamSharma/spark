<?php
include("include/config.php");
$comp=$_GET["q"];
$sql=mysql_query("update active set status='active' where company='$comp'");
?>
<script>
window.location.href="../login.php";
</script>