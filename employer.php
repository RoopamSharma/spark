<?php 
session_start();
if (!isset($_SESSION['username'])) {
    //echo '<p class="login">Please <a href="index.php">log in</a> to access this page.</p>';
    exit();
  }
  else {
    //echo('<p class="login">You are logged in as ' . $_SESSION['username'] . '</p>');
  }
?>
<!DOCTYPE html>
<html>
<head>
		<meta charset="UTF-8">
		<title>Job Portal</title>
        <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet" href="assets/icons/elusive-icons-2.0.0/css/elusive-icons.min.css">
        <link rel="stylesheet" href="assets/icons/font-awesome/css/font-awesome.min.css">
        <!-- favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

        <!-- bootstrap framework -->
		<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">

        <!-- icon sets -->
            <!-- elegant icons -->
                <link href="assets/icons/elegant/style.css" rel="stylesheet" media="screen">
            <!-- elusive icons -->
                <link href="assets/icons/elusive/css/elusive-webfont.css" rel="stylesheet" media="screen">
            <!-- flags -->
                <link rel="stylesheet" href="assets/icons/flags/flags.css">
            <!-- scrollbar -->
                <link rel="stylesheet" href="assets/lib/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">

        <!-- page specific stylesheets -->

            <!-- footable -->
            <link href="assets/lib/footable/css/footable.core.min.css" rel="stylesheet" media="screen">

        <!-- google webfonts -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>

        <!-- main stylesheet -->
		<link href="assets/css/main.min.css" rel="stylesheet" media="screen" id="mainCss">

        <!-- moment.js (date library) -->
        <script src="assets/js/moment-with-langs.min.js"></script>

    </head>
    <body class="side_menu_active side_menu_expanded">
        <div id="page_wrapper">

            <!-- header -->
             <?php include("include/header.php");?>

            <!-- breadcrumbs -->
            <nav id="breadcrumbs">
                <ul>

					<li><a href="add_test.php"><span style="margin-right:300px;">Add Question</span></a></li>
		        </ul>
            </nav>

            <!-- main content -->
            <div id="main_wrapper">
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-10">
                            <!--div class="row">
                                <div class="col-md-3">
                                    <input id="textFilter" type="text" class="form-control input-sm">
                                    <span class="help-block">Filter</span>
                                </div>
                                <div class="col-md-3">
                                    <select class="form-control input-sm" id="userStatus">
                                        <option></option>
                                        <option value="active">Active</option>
                                        <option value="disabled">Disabled</option>
                                        <option value="suspended">Suspended</option>
                                    </select>
                                    <span class="help-block">Status</span>
                                </div>
                                <div class="col-md-3">
                                    <a class="btn btn-default btn-sm" id="clearFilters">Clear</a>
                                </div>
                            </div!-->
                            <div class="row">
                                <div class="col-md-90">
                                    <table class="table table-yuk2 toggle-arrow-tiny" id="footable_demo" data-filter="#textFilter" data-page-size="10">
                                        <thead>
                                            <tr>
                                                <th data-toggle="true">Company Name</th>
                                                <th data-hide="phone">Status</th>
                                                <th data-hide="phone">Manage</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                     <?php
        include_once ('functions.php');
        $con = new DB_con();
        $res=$con->selectemployer();
        while($row=mysql_fetch_assoc($res))
        {
            ?>
                                            <tr>
                                                <td><?php  echo $row['co_name'] ?></td>
                                                <?php
                                                if ($row['stat'] =="Available") {
                                                    echo '<td data-value="'.$row['employerid'].'"><a href="alterstatus.php?eid='.$row['employerid'].'&s='.$row['stat'].'"><span class="label label-success status-active" title="Available">'.$row['stat'].'</a></span></td>';                                        
                                                }
                                                else {
                                                    echo '<td data-value="'.$row['employerid'].'"><a href="alterstatus.php?eid='.$row['employerid'].'&s='.$row['stat'].'"><span class="label label-warning status-suspended" title="Unavailable" style="background-color:red;">'.$row['stat'].'</a></span></td>';                                                                                        
                                                }
                                                ?>
                                                <td>
                                                    <?php
                                                    echo '<a href="employer_details.php?id='.$row['employerid'].'">';
                                                    echo '<i class="fa fa-user" title="View profile" style="margin-right: 8px;" ></i></a>';
                                                    echo '<a href="edit_employer_profile.php?id='.$row['employerid'].'">';
                                                    echo '<i class="fa fa-edit" title="Edit profile" style="margin-right: 8px;" ></i></a>';
                                                    echo '<a href="employerstats.php?eid='.$row['employerid'].'">';
                                                    echo '<i class="fa fa-server" title="View Stats" style="margin-right: 8px;" ></i></a>';
                                                    //echo '<a href="assignemp.php?id='.$row['employerid'].'">';
                                                    //echo '<span><img src="images/assign.jpg" title="Assign Employees" style="margin-right: 8px;" ></span></a>';
                                                    echo '<a href="employer_delete.php?id='.$row['employerid'].'">';
                                                    echo '<span class="el-icon-trash bs_ttip" title=""></span></a>';
                                                    ?>
                                                </td>
                                            </tr>
        <?php } ?>
                                            
                                        </tbody>
                                        <tfoot class="hide-if-no-paging">
                                            <tr>
                                                <td colspan="10">
                                                    <ul class="pagination pagination-sm"></ul>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- main menu -->
             <?php include("include/left_menu.php");?>

        </div>

        <!-- jQuery -->
        <script src="assets/js/jquery.min.js"></script>
        <!-- jQuery Cookie -->
        <script src="assets/js/jqueryCookie.min.js"></script>
        <!-- Bootstrap Framework -->
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <!-- retina images -->
        <script src="assets/js/retina.min.js"></script>
        <!-- switchery -->
        <script src="assets/lib/switchery/dist/switchery.min.js"></script>
        <!-- typeahead -->
        <script src="assets/lib/typeahead/typeahead.bundle.min.js"></script>
        <!-- fastclick -->
        <script src="assets/js/fastclick.min.js"></script>
        <!-- match height -->
        <script src="assets/lib/jquery-match-height/jquery.matchHeight-min.js"></script>
        <!-- scrollbar -->
        <script src="assets/lib/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>

        <!-- Yukon Admin functions -->
        <script src="assets/js/yukon_all.js"></script>

	    <!-- page specific plugins -->

            <!-- footable -->
            <script src="assets/lib/footable/footable.min.js"></script>
            <script src="assets/lib/footable/footable.paginate.min.js"></script>
            <script src="assets/lib/footable/footable.filter.min.js"></script>

            <script>
                $(function() {
                    // footable
                    yukon_footable.p_plugins_tables_footable();
                })
            </script>

        <!-- style switcher -->

    </body>
</html>