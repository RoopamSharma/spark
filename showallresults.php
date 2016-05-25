<?php
include("include/connection.php");
include("function/dbMySql.php");

session_start();

if(isset($_POST['submit2']))
{
   
    $test_id=$_POST['test_id'];
    $test_id = mysql_real_escape_string($test_id);
    
    header("Location: viewresult.php?test_id=".$test_id);
}
?>

<html>
<link href="bootstrap.css" rel="stylesheet" type="text/css">
<div class="form-group table-bordered" align="center" style="margin-top:80px"><label style="font-size:18px">Welcome Admin, See results</label>
<br>
<body>
<form action="showallresults.php" method="POST">
<select class="form-control" name ="test_id" style="margin-top:40px;width:10%;">

<?php   
$optimus="SELECT `test_id` FROM `userresult`";
$prime=mysql_query($optimus);

         	while ($bumblebee=mysql_fetch_array($prime)) 
          { 
          	echo $bumblebee['test_id'];

?>
 <option value="<?php echo $bumblebee['test_id'];?>"><?php echo $bumblebee['test_id']; ?></option>
<?php  
             }
 ?>
  </select>
<br>
<br> 
<input  type="submit" name="submit2" style="margin-top:10px" class="btn" value="VIEW RESULT"> <br>

</form>
</body>
</div>
</html>      