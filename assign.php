<html>
<?php   include("include/config.php");  ?>
<head>
    <meta charset="UTF-8">
    <title>Assign To Employers</title>
    <?php   include("include/css.php"); ?>
</head>
<body class="side_menu_active side_menu_expanded">
    <div id="page_wrapper">
    <?php   include("include/header.php");  ?>
    <div id="main_wrapper">
    <div class="row">
    <?php
        include_once ('functions.php');
        $con = new DB_con();
        ?>
        <?php if($_POST['submit'])
    {
    $box=$_POST['emp'];
    $i=0;
    while($box[$i]!="")
    {
    $row=$con->recommend($box[$i],$_POST['id']);
    $i++;
    } ?>
    <script>
    window.location.href="assign.php?id=<?php echo $_POST['id'];?>";
    </script>
    <?php }
    ?>
    
        <?php 
        $id=$_GET['id'];
        $res=$con->selectperson($id);
        while($row=mysql_fetch_assoc($res))
        {
    ?>
    
    
    <div class="container-fluid">
    <div class="row">
    <div class="col-sm-6">
    <?php //echo ' <img class="user_profile_img"  src="uploads/' . $row['picture'] .'" alt="" width="76" height="76" />'?>
    <h1 class="user_profile_name"><?php echo $row['firstname'] .' '.$row['lastname']; ?></h1>
    <!--<p class="user_profile_info"><?php echo $row['seeker_natjob']; ?></p>-->
    <!--<?php echo'<a href="showfile.php"';?><p class="user_profile_info">View More Details</p></a>-->
    </div>
    </div>
    <hr/>
    <div class="row">
    <div class="col-md-12">
    
    <form class="form-horizontal" role="form" id="checkall" action="assign.php" method="post">
    <h3 class="heading_a"><span class="heading_text">Assign <?php echo $row['firstname'] .' '.$row['lastname']; ?> to Employers</span></h3>
    <input type="hidden" value="<?php echo $row['ID'];?>" name="id" >
    <input type="hidden" value="<?php echo $row['jobid'];?>" name="jid">
    <h3>This candidate has been recommended for the following jobs so far:</h3>
    <?php
    $q=$con->showrecommended($row['ID']);
    ?>
    <table class="table table-yuk2 toggle-arrow-tiny" id="footable_demo" data-filter="#textFilter" data-page-size="9">
     <tr></tr>
     <th>Job Title</th>
     <th>Company</th>
     <th>Status</th>
     <th>Recommended on</th>
     </tr>
     <?php while($ans=mysql_fetch_assoc($q))
     {
     $job=$ans['jobid'];
     $qu=$con->showjobtitle($job); 
     $a=mysql_fetch_assoc($qu);
     ?>
     <tr>
     <td><?php echo $a['jt'];?></td>
     <td><?php echo $a['ename'];?></td>
     <td><?php echo $ans['status'];?></td>
    <td><?php echo $ans['time'];?></td>     
    </tr>
    <?php } ?>
    </table>
    <?php     
    $qdata=$con->availableempjob($row['ID']);
    $qcount=mysql_num_rows($qdata);
    if($qcount>0)
    {
?>
    <h3>Recommend Further</h3>
    <div class="form-group">
        <label for="profile_name" class="col-sm-2 control-label">Employers</label>
        <div class="col-sm-10">
      <input type="checkbox" id="allc" onClick="isValid(this.form)">Check All/Uncheck All</input>
      <br/>
      <?php 
      while($row=mysql_fetch_array($qdata)) {   ?>
      <input type="checkbox" name="emp[]" class="emp" value="<?php echo $row['jobid'];?>"><?php echo $row['co_name']."-".$row['job_title'];?></input>
      <br/>
      <?php } ?>
        </div>
    </div>
    <input style="margin-left:200px;" type="submit" name="submit" class="btn btn-default btn-xs" value="Submit" />
    </form>
    <hr/>
    <?php
    }
    else
    {
    echo "No new jobs available to recommend further!";
    }
    }
    ?>
    </div>
    </div>
    </div>
    </div>
    <?php
    include("include/footer.php");
    ?>
    <script>
    function isValid(formRef)
    {
    for(var i=0;i<formRef.elements.length;i++)
        {
            if(formRef.elements[i].type == "checkbox")
            {
                formRef.elements[i].checked = formRef.allc.checked;
            }
        }//end of loop
    }
    </script>
    <script>
    $('.emp').change(function(){
    if ($('.emp:checked').length == $('.emp').length) {
    ('#allc').prop('checked',true);
    }
else
{
    ('#allc').prop('checked', false);
    }
});
</script>
</body>
</html>