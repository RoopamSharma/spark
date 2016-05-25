

<?php

include("include/connection.php");
include("function/dbMySql.php");

if(isset($_POST['submit1']))
{
   
    $category=$_POST['category'];
    $category   = mysql_real_escape_string($category);
    $subcategory=$_POST['subcategory'];
    $subcategory   = mysql_real_escape_string($subcategory);
    $difficulty_level=$_POST['difficulty_level'];
    $difficulty_level   = mysql_real_escape_string($difficulty_level);
    
    header("Location: test_display.php?category=".$category."&subcategory=".$subcategory."&difficulty_level=".$difficulty_level);

    $sql_add= "INSERT INTO test (`category`,`subcategory`,`difficulty_level`) VALUES ('$category', '$subcategory', '$difficulty_level')";
    $result=mysql_query($sql_add);
  }
  include("header.php");
  ?>

<html>
<link href="bootstrap.css" rel="stylesheet" type="text/css">
<body>
<div class="form-group" align="center" style="margin-top:100px; border-color:#999; border-width:1px; border-style:solid" >
<form action="test_display.php" method="POST">
<select name="category" style="width:20%; margin-top:40px;" class="form-control">

<?php   

            $sql= "SELECT DISTINCT `category_name`,
                    `category_id` 
            FROM `category`";
        $result=mysql_query($sql) or die;

         while ($row=mysql_fetch_array($result)) 
          { echo $row['category_name'];
            
?>               
      <option value="<?php echo $row['category_name'];?>"><?php echo $row['category_name']; ?></option>
<?php               }
    ?>

  </select>
  <br>
  <br>
  <br>
  <br>

<select class="form-control" style="width:20%;" name="subcategory">
<?php
  $sql=     "SELECT DISTINCT `subcat_name` 
              FROM `subcategory`";
  
        $result=mysql_query($sql) or die;

         while ($row=mysql_fetch_array($result))
          { echo $row['subcat_name'];

?>
                       <option value="<?php echo $row['subcat_name'];?> "><?php echo $row['subcat_name']; ?></option>
<?php               }
    ?>
</select>
  <br>
  <br>
  <br>
  <br>

<select class="form-control" style="width:20%" name="difficulty_level">
<?php
 $sql= "SELECT DISTINCT `difficulty_level` 
        FROM `question`";
$result=mysql_query($sql) or die;

         while ($row=mysql_fetch_array($result))
          { echo $row['difficulty_level'];

            
?>
                       <option value="<?php echo $row['difficulty_level'];?>"><?php echo $row['difficulty_level']; ?></option>
<?php               }
    ?>
</select>

  <br>
  <br>
  <br>
  <br>

<br> <input class="btn"  type="submit" name="submit1" value="SUBMIT"> <br>

</form>

</div>

</body>
</html>
