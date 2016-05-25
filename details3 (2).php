<?php 
session_start();
if (!isset($_SESSION['username'])) {
    echo '<p class="login">Please <a href="index.php">log in</a> to access this page.</p>';
    exit();
  }
  else {
    echo('<p class="login">You are logged in as ' . $_SESSION['username'] . '</p>');
  }
?>
<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script src="jsplug/multifilter.js"></script>
<link rel="stylesheet" href="assets/icons/elusive-icons-2.0.0/css/elusive-icons.min.css">
        <link rel="stylesheet" href="assets/icons/font-awesome/css/font-awesome.min.css">
<?php
            include("include/css.php");
            ?>
</head>    
<script type='text/javascript'>
$(document).ready(function() {
$('.filter').multifilter()
})
</script>
<body class="side_menu_active side_menu_expanded">
<div id="page_wrapper">

            <!-- header -->
            <?php
            include("include/header.php");
            ?>
<div id="main_wrapper">
<div class="container-fluid">
<div class="row">
                        <div class="col-md-2">
                            <div class="list-group">
                                <a href="javascript:void(0)" class="active list-group-item">Job Seekers</a>
                            </div>
                        </div>


<div class='container'>
<div class='filters'>
    <div class="col-md-10">
    <div class='row'>
<div class='filter-container'>
<input autocomplete='off' class='filter' name='category' placeholder='category' data-col='Category' />
</div>
<div class='filter-container'>
<input autocomplete='off' class='filter' name='exp_yr' placeholder='experience' data-col='Experience'/>
</div>
<div class='clearfix'></div>
</div>
</div>
</div>
</div>
<div class='container'>
<div class="container-fluid">
    <div class="row">
     <div class="col-md-11">
<table class="table table-yuk2 toggle-arrow-tiny" id="footable_demo" data-filter="#textFilter" data-page-size="9">
<thead>
<th>Name</th>    
<th>Category</th>
<th>Experience</th>
<th>Grade</th>
<th>Job Ready</th>
<th> Manage</th>
</thead>
<tbody>
     <?php
        include_once ('functions.php');
        $con = new DB_con();
        $res=$con->select();
        while($row=mysql_fetch_assoc($res))
        {
            ?>
                                            <tr>
                                                <td><?php  echo $row['firstname'] .' '. $row['lastname'] ?></td>
                                                <td><?php echo $row['category'].">".$row['subcategory'].">".$row['subsubcategory'] ?></td>
                                                <td><?php echo $row['experience'] . 'year'?></td>
                                                <td><?php echo $row['userlevel'];?></td>
                                                <td><?php echo $row['jobready'];echo '&nbsp;&nbsp';if($row['jobready']=='0') echo '<a href="changejr.php?id='.$row['ID'].'&j=0">'; else if($row['jobready']=='1') echo '<a href="changejr.php?id='.$row['ID'].'&j=1">'; else echo '<a href="changejr.php?id='.$row['ID'].'">';
                                                    echo '<span class="el-icon-pencil bs_ttip" title="" style="margin-right: 8px;" ></span></a>'; ?>
                                                </td>
            
                                             <td> <?php
                                                    echo '<a href="viewseeker.php?sid='.$row['ID'].'">';
                                                    echo '<span class="el-icon-eye-open bs_ttip" title="View profile" style="margin-right: 8px;" ></span></a>';
                                                    if ($row['cvname']!="") { ?>
                                                    <a href="cv/<?php echo $row['cvname'];?>" target="blank">
                                                    <?php 
                                                    echo '<span class="el-icon-eye-open bs_ttip" title="View CV" style="margin-right: 8px;" ></span></a>'; }
													else {echo ""; }
													echo '<a href="atestdetails.php?id='.$row['ID'].'">';
                                                    echo '<span class="el-icon-pencil bs_ttip" title="" style="margin-right: 8px;" ></span></a>';
													?>
													<a href="assign.php?id=<?php echo $row['ID'];?>"><span title=""><img src="images/assign.png"></img></span></a>
                                                </td>                                  

</tr>
<?php } ?> 
</tbody>
<tfoot class="hide-if-no-paging">
                                            <tr>
                                                <td colspan="5">
                                                    <ul class="pagination pagination-sm"></ul>
                                                </td>
                                            </tr>
                                        </tfoot>
</table>
            <?php include("include/left_menu.php");?>
</div>
</body>    
</html>