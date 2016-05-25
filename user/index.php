<?php 
session_start();
include("include/config.php");
if (isset($_SESSION['email123']))
{
?>
<!DOCTYPE html>
<html class="no-js">
    
    <head>
        <title>Admin Home Page</title>
        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="vendors/easypiechart/jquery.easy-pie-chart.css" rel="stylesheet" media="screen">
        <link href="assets/styles.css" rel="stylesheet" media="screen">
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    
    <body>
        <?php include('include/header.php');?> 
        <div class="container-fluid">
            <div class="row-fluid">
                <?php include('include/left_menu.php'); ?>
                <div class="span10">
                    <div class="row-fluid">
                
                <!--/span-->
                <div class="span9" id="content">
                    <div class="row-fluid">
                        
                            
                        </div>
                    <div class="row-fluid">
                        <!-- block -->
                        




                        <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Manage Category</div>
                                <div class="pull-right">

                                </div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span18" >
                                <a href="main_cat.php" style="text-decoration: none;">
                                    <div class="chart" data-percent="100"><i class="icon-th-large"></i></div>
                                    <div class="chart-bottom-heading" ><span class="label label-info" >Main Category</span>
                                    </a>
                                    </div>
                                </div>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
            </div>                   
                </div>
    </div>  </div>                   
                </div>
    </div>  </div>                   
                </div>
    </div>
            <hr>
            
        </div>
        <!--/.fluid-container-->
        <script src="vendors/jquery-1.9.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="vendors/easypiechart/jquery.easy-pie-chart.js"></script>
        <script src="assets/scripts.js"></script>
        <script>
        $(function() {
            // Easy pie charts
            $('.chart').easyPieChart({animate: 1000});
        });
        </script>
    </body>

</html>


<?php
}
 else {
    header("Location: signup.php");
 }
 ?>