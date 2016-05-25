<html>
<head>
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
<input autocomplete='off' class='filter' name='category' placeholder='category' data-col='category' />
</div>
<div class='filter-container'>
<input autocomplete='off' class='filter' name='subcategory' placeholder='subcategory' data-col='subcategory'  />
</div>
<div class='filter-container'>
<input autocomplete='off' class='filter' name='subsubcategory' placeholder='subsubcategory' data-col='sub sub category'/>
</div>
<div class='filter-container'>
<input autocomplete='off' class='filter' name='exp_yr' placeholder='experience in yr' data-col='experience'/>
</div>

<div class='clearfix'></div>
</div>
</div>
</div>
</div>
<div class='container'>
<div class="container-fluid">
    <div class="row">
     <div class="col-md-12">
<table class="table table-yuk2 toggle-arrow-tiny" id="footable_demo" data-filter="#textFilter" data-page-size="9">
<thead>
<th>Name</th>    
<th>Category</th>
<th>SubCategory</th>
<th>Sub sub Category</th>
<th>Experience</th>
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
                                                <td><?php echo $row['category'] ?></td>
                                                <td><?php echo $row['subcategory'] ?></td>
                                                <td><?php echo $row['subsubcategory'] ?></td>
                                                <td><?php echo $row['experience'] . 'year'?></td>
                                                <td><?php echo $row['jobready'];?></td>
            
                                             <td> <?php
                                                    echo '<a href="seeker_details.php?id='.$row['ID'].'">';
                                                    echo '<span class="el-icon-eye-open bs_ttip" title="" style="margin-right: 8px;" ></span></a>';
                                                    echo '<a href="edit_seeker_profile.php?id='.$row['ID'].'">';
                                                    echo '<span class="el-icon-pencil bs_ttip" title="" style="margin-right: 8px;" ></span></a>';
                                                    //echo '<a href="seeker_delete.php?id='.$row['ID'].'">';
                                                    //echo '<span class="el-icon-trash bs_ttip" title=""></span></a>';
													?>
													<a href="assign.php?id=<?php echo $row['ID'];?>"><span title=""><img src="images/assign.png"></img></span></a>
                                                    <?php
                                                    echo '<a href="seeker_shortlist.php?id='.$row['ID'].'">';
                                                    echo '<i class="el el-check el-fw" title=""></i></a>';
                                                    
                                                    ?>
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
</div>
</div>

</body>    
</html>