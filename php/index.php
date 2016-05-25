<!DOCTYPE html>
<html>
<head>
		<meta charset="UTF-8">
		<title>Job Portal</title>
        <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

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
                    <li><a href="dashboard.php">Home</a></li>        </ul>
            </nav>

            <!-- main content -->
            <div id="main_wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="info_box_var_1 box_bg_a">
                                <div class="info_box_body">
                                    <span class="info_box_icon icon_group"></span>
                                    <span class="countUpMe" data-endVal="1342">1342</span>
                                </div>
                                <div class="info_box_footer">
                                    New Users
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="info_box_var_1 box_bg_b">
                                <div class="info_box_body">
                                    <span class="info_box_icon icon_cart_alt"></span>
                                    <span class="countUpMe" data-endVal="57">57</span>%
                                </div>
                                <div class="info_box_footer">
                                    Orders Completed
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="info_box_var_1 box_bg_c">
                                <div class="info_box_body">
                                    <span class="info_box_icon icon_wallet"></span>
                                    $<span class="countUpMe" data-endVal="13578">13 578</span>
                                </div>
                                <div class="info_box_footer">
                                    Sale
                                    <small>(last 24h)</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="info_box_var_1 box_bg_d">
                                <div class="info_box_body">
                                    <span class="info_box_icon icon_mail_alt"></span>
                                    <span class="countUpMe" data-endVal="531">531</span>
                                </div>
                                <div class="info_box_footer">
                                    Sent Messages
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row row_full mHeight">
                        <div class="col-lg-4">
                            <div class="easy_chart_wrapper mHeight-item">
                                <div class="easy_chart_a easy_chart" data-percent="86">
                                    <span class="easy_chart_percent"></span>
                                </div>
                                <div class="easy_chart_info">
                                    <h4 class="easy_chart_heading">Orders completed</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam doloremque mollitia possimus tempora&hellip; <a href="#">more</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="easy_chart_wrapper mHeight-item">
                                <div class="easy_chart_b easy_chart" data-percent="40">
                                    <span class="easy_chart_percent">136</span>
                                </div>
                                <div class="easy_chart_info">
                                    <h4 class="easy_chart_heading">Confirmed registrations</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam doloremque mollitia possimus tempora&hellip; <a href="#">more</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="easy_chart_wrapper mHeight-item">
                                <div class="easy_chart_c easy_chart" data-percent="72">
                                    <span class="easy_chart_icon icon_chat_alt"></span>
                                </div>
                                <div class="easy_chart_info">
                                    <h4 class="easy_chart_heading">New comments</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam doloremque mollitia possimus tempora&hellip; <a href="#">more</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading_a"><span class="heading_text">Audience (location)</span></div>
                            <div class="row">
                                <div class="col-md-8">
                                    <div id="world_map_vector" style="width:100%;height:300px">
                                        <script>
                                            countries_data = {
                                                "US": 2320,
                                                "BR": 1945,
                                                "IN": 1779,
                                                "AU": 1486,
                                                "TR": 1024,
                                                "CN": 753
                                            };
                                        </script>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <table class="table table-yuk">
                                        <thead>
                                        <tr>
                                            <th colspan="2">Location</th>
                                            <th>Visits</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="cw"><span class="flag-US"></span></td>
                                            <td>United States</td>
                                            <td>2320</td>
                                        </tr>
                                        <tr>
                                            <td class="cw"><span class="flag-BR"></span></td>
                                            <td>Brazil</td>
                                            <td>1945</td>
                                        </tr>
                                        <tr>
                                            <td class="cw"><span class="flag-IN"></span></td>
                                            <td>India</td>
                                            <td>1779</td>
                                        </tr>
                                        <tr>
                                            <td class="cw"><span class="flag-AU"></span></td>
                                            <td>Australia</td>
                                            <td>1486</td>
                                        </tr>
                                        <tr>
                                            <td class="cw"><span class="flag-TR"></span></td>
                                            <td>Turkey</td>
                                            <td>1024</td>
                                        </tr>
                                        <tr>
                                            <td class="cw"><span class="flag-CN"></span></td>
                                            <td>China</td>
                                            <td>753</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row row_full">
                        <div class="col-md-12">
                            <div class="heading_a">
                                <span class="heading_text">Tasks assigned to Me</span>
                                <div class="pull-right">
                                    <a href="#"><i class="el-icon-tasks heading_icon"></i></a>
                                </div>
                            </div>
                            <ul class="list-group list_group_sep">
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-md-1"><span class="icon_star list_icon"></span></div>
                                        <div class="col-md-2">
                                            <div class="label label-danger">High</div>
                                        </div>
                                        <div class="col-md-2"><a href="#"><strong>YUK-31</strong></a></div>
                                        <div class="col-md-4"><span class="text-muted small">Lorem ipsum dolor sit amet&hellip;</span></div>
                                        <div class="col-md-3">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-danger" style="width: 28%">
                                                    <span class="sr-only">28% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-md-1"><span class="icon_star_alt list_icon"></span></div>
                                        <div class="col-md-2">
                                            <div class="label label-warning">Medium</div>
                                        </div>
                                        <div class="col-md-2"><a href="#"><strong>ARW-21</strong></a></div>
                                        <div class="col-md-4"><span class="text-muted small">Lorem ipsum dolor&hellip;</span></div>
                                        <div class="col-md-3">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-warning" style="width: 62%">
                                                    <span class="sr-only">62% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-md-1"><span class="icon_star_alt list_icon"></span></div>
                                        <div class="col-md-2">
                                            <div class="label label-success">Low</div>
                                        </div>
                                        <div class="col-md-2"><a href="#"><strong>YUK-63</strong></a></div>
                                        <div class="col-md-4"><span class="text-muted small">Lorem ipsum dolor sit&hellip;</span></div>
                                        <div class="col-md-3">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-success" style="width: 80%">
                                                    <span class="sr-only">80% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-md-1"><span class="icon_star list_icon"></span></div>
                                        <div class="col-md-2">
                                            <div class="label label-danger">High</div>
                                        </div>
                                        <div class="col-md-2"><a href="#"><strong>DES-31</strong></a></div>
                                        <div class="col-md-4"><span class="text-muted small">Lorem ipsum dolor&hellip;</span></div>
                                        <div class="col-md-3">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-danger" style="width: 12%">
                                                    <span class="sr-only">12% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <div class="heading_a">
                                <span class="heading_text">Quick Settings</span>

                                <div class="pull-right">
                                    <a href="#"><i class="el-icon-cog heading_icon"></i></a>
                                </div>
                            </div>
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <div class="pull-right">
                                        <input type="checkbox" class="js-switch mini-switch" checked>
                                    </div>
                                    Site Online
                                </li>
                                <li class="list-group-item">
                                    <div class="pull-right">
                                        <input type="checkbox" class="js-switch mini-switch">
                                    </div>
                                    Cache Enabled
                                </li>
                                <li class="list-group-item">
                                    <div class="pull-right">
                                        <input type="checkbox" class="js-switch mini-switch" checked>
                                    </div>
                                    Catalog Mode
                                </li>
                                <li class="list-group-item">
                                    <div class="pull-right">
                                        <input type="checkbox" class="js-switch-blue mini-switch" checked>
                                    </div>
                                    Statistics
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="heading_a">
                                <span class="heading_text">Orders</span>
                            </div>
                            <div id="c3_orders" style="height:220px"></div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="heading_a">
                                <span class="heading_text">Users (by age)</span>
                            </div>
                            <div id="c3_users_age" style="height:220px"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading_a">
                                <span class="heading_text">Sales</span>
                                <div class="pull-right">
                                    <button class="btn btn-xs btn-default chart_switch" data-chart="line">Line</button>
                                    <button class="btn btn-xs btn-link chart_switch" data-chart="bar">Bar</button>
                                </div>
                            </div>
                            <div id="c3_7_days" style="height:280px"></div>
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

            <!-- c3 charts -->
            <script src="assets/lib/d3/d3.min.js"></script>
            <script src="assets/lib/c3/c3.min.js"></script>
            <!-- vector maps -->
            <script src="assets/lib/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
            <script src="assets/lib/jvectormap/maps/jquery-jvectormap-world-mill-en.js"></script>
            <!-- countUp animation -->
            <script src="assets/js/countUp.min.js"></script>
            <!-- easePie chart -->
            <script src="assets/lib/easy-pie-chart/dist/jquery.easypiechart.min.js"></script>

            <script>
                $(function() {
                    // c3 charts
                    yukon_charts.p_dashboard();
                    // countMeUp
                    yukon_count_up.init();
                    // easy pie chart
                    yukon_easyPie_chart.p_dashboard();
                    // vector maps
                    yukon_vector_maps.p_dashboard();
                    // match height
                    yukon_matchHeight.p_dashboard();
                })
            </script>
		
       
    
	
    </body>

<!-- Mirrored from yukon-admin.tzdthemes.com/html/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 May 2015 11:36:49 GMT -->
</html>
