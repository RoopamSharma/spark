<!DOCTYPE html>
<html>
    
<head>
		<meta charset="UTF-8">
		<title>Yukon Admin HTML v1.5 (plugins-tables_footable)</title>
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
            <header id="main_header">
                <div class="container-fluid">
                    <div class="brand_section">
                        <a href="dashboard.php"><img src="assets/img/logo.png" alt="site_logo" width="63" height="26"></a>
                    </div>
                    <ul class="header_notifications clearfix">
                        <li class="dropdown">
                            <span class="label label-danger">8</span>
                            <a data-toggle="dropdown" href="#" class="dropdown-toggle"><i class="el-icon-envelope"></i></a>
                            <div class="dropdown-menu">
                                <ul>
                                    <li>
                                        <img src="assets/img/avatars/avatar02_tn.png" alt="" width="38" height="38">
                                        <p><a href="#">Lorem ipsum dolor sit amet&hellip;</a></p>
                                        <small class="text-muted">14.07.2014</small>
                                    </li>
                                    <li>
                                        <img src="assets/img/avatars/avatar03_tn.png" alt="" width="38" height="38">
                                        <p><a href="#">Lorem ipsum dolor sit&hellip;</a></p>
                                        <small class="text-muted">14.07.2014</small>
                                    </li>
                                    <li>
                                        <img src="assets/img/avatars/avatar04_tn.png" alt="" width="38" height="38">
                                        <p><a href="#">Lorem ipsum dolor&hellip;</a></p>
                                        <small class="text-muted">14.07.2014</small>
                                    </li>
                                    <li>
                                        <img src="assets/img/avatars/avatar05_tn.png" alt="" width="38" height="38">
                                        <p><a href="#">Lorem ipsum dolor sit amet&hellip;</a></p>
                                        <small class="text-muted">14.07.2014</small>
                                    </li>
                                    <li>
                                        <a href="#" class="btn btn-xs btn-primary btn-block">All messages</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="dropdown" id="tasks_dropdown">
                            <span class="label label-danger">14</span>
                            <a data-toggle="dropdown" href="#" class="dropdown-toggle"><i class="el-icon-tasks"></i></a>
                            <div class="dropdown-menu">
                                <ul>
                                    <li>
                                        <div class="clearfix">
                                            <div class="label label-warning pull-right">Medium</div>
                                            <small class="text-muted">YUK-21 (24.07.2014)</small>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet&hellip;</p>
                                    </li>
                                    <li>
                                        <div class="clearfix">
                                            <div class="label label-danger pull-right">High</div>
                                            <small class="text-muted">YUK-8 (26.07.2014)</small>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet&hellip;</p>
                                    </li>
                                    <li>
                                        <div class="clearfix">
                                            <div class="label label-success pull-right">Medium</div>
                                            <small class="text-muted">DES-14 (25.07.2014)</small>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet&hellip;</p>
                                    </li>
                                    <li>
                                        <a href="#" class="btn btn-xs btn-primary btn-block">All tasks</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="dropdown">
                            <span class="label label-primary">2</span>
                            <a data-toggle="dropdown" href="#" class="dropdown-toggle"><i class="el-icon-bell"></i></a>
                            <div class="dropdown-menu">
                                <ul>
                                    <li>
                                        <p>Lorem ipsum dolor sit amet&hellip;</p>
                                        <small class="text-muted">20 minutes ago</small>
                                    </li>
                                    <li>
                                        <p>Lorem ipsum dolor sit&hellip;</p>
                                        <small class="text-muted">44 minutes ago</small>
                                    </li>
                                    <li>
                                        <p>Lorem ipsum dolor&hellip;</p>
                                        <small class="text-muted">10:55</small>
                                    </li>
                                    <li>
                                        <p>Lorem ipsum dolor sit amet&hellip;</p>
                                        <small class="text-muted">14.07.2014</small>
                                    </li>
                                    <li>
                                        <a href="#" class="btn btn-xs btn-primary btn-block">All Alerts</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                    <div class="header_user_actions dropdown">
                        <div data-toggle="dropdown" class="dropdown-toggle user_dropdown">
                            <div class="user_avatar">
                                <img src="assets/img/avatars/avatar08_tn.png" alt="" title="Carrol Clark (carrol@example.com)" width="38" height="38">
                            </div>
                            <span class="caret"></span>
                        </div>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="pages-user_profile.php">User Profile</a></li>
                            <li><a href="pages-user_profile2.php">User Profile 2</a></li>
                            <li><a href="login_page.php">Log Out</a></li>
                        </ul>
                    </div>
                    <div class="search_section hidden-sm hidden-xs">
                        <input type="text" class="form-control input-sm">
                        <button class="btn btn-link btn-sm" type="button"><span class="icon_search"></span></button>
                    </div>
                </div>
            </header>

            <!-- breadcrumbs -->
            <nav id="breadcrumbs">
                <ul>
                    <li><a href="dashboard.php">Home</a></li>
		            <li><span>Plugins</span></li>
		            <li><span>Tables</span></li>
		            <li><span>Footable</span></li>
		        </ul>
            </nav>

            <!-- main content -->
            <div id="main_wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="list-group">
                                <a href="javascript:void(0)" class="active list-group-item">Footable</a>
                                <a href="plugins-tables_datatable.php" class="list-group-item">Datatable</a>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="row">
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
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <table class="table table-yuk2 toggle-arrow-tiny" id="footable_demo" data-filter="#textFilter" data-page-size="5">
                                        <thead>
                                            <tr>
                                                <th data-toggle="true">First Name</th>
                                                <th> Last Name</th>
                                                <th data-hide="phone,tablet">Job Title</th>
                                                <th data-hide="phone,tablet" data-name="Date Of Birth"> DOB</th>
                                                <th data-hide="phone"> Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Isidra</td>
                                                <td><a href="#">Boudreaux</a></td>
                                                <td>Traffic Court Referee</td>
                                                <td data-value="78025368997">22 Jun 1972</td>
                                                <td data-value="1"><span class="label label-success status-active" title="Active">Active</span></td>
                                            </tr>
                                            <tr>
                                                <td>Shona</td>
                                                <td>Woldt</td>
                                                <td><a href="#">Airline Transport Pilot</a></td>
                                                <td data-value="370961043292">3 Oct 1981</td>
                                                <td data-value="2"><span class="label label-default status-disabled" title="Disabled">Disabled</span></td>
                                            </tr>
                                            <tr>
                                                <td>Granville</td>
                                                <td>Leonardo</td>
                                                <td>Business Services Sales Representative</td>
                                                <td data-value="-22133780420">19 Apr 1969</td>
                                                <td data-value="3"><span class="label label-warning status-suspended" title="Suspended">Suspended</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Easer</td>
                                                <td>Dragoo</td>
                                                <td>Drywall Stripper</td>
                                                <td data-value="250833505574">13 Dec 1977</td>
                                                <td data-value="1"><span class="label label-success status-active" title="Active">Active</span></td>
                                            </tr>
                                            <tr>
                                                <td>Maple</td>
                                                <td>Halladay</td>
                                                <td>Aviation Tactical Readiness Officer</td>
                                                <td data-value="694116650726">30 Dec 1991</td>
                                                <td data-value="3"><span class="label label-warning status-suspended" title="Suspended">Suspended</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Maxine</td>
                                                <td><a href="#">Woldt</a></td>
                                                <td><a href="#">Business Services Sales Representative</a></td>
                                                <td data-value="561440464855">17 Oct 1987</td>
                                                <td data-value="2"><span class="label label-default status-disabled" title="Disabled">Disabled</span></td>
                                            </tr>
                                            <tr>
                                                <td>Lorraine</td>
                                                <td>Mcgaughy</td>
                                                <td>Hemodialysis Technician</td>
                                                <td data-value="437400551390">11 Nov 1983</td>
                                                <td data-value="2"><span class="label label-default status-disabled" title="Disabled">Disabled</span></td>
                                            </tr>
                                            <tr>
                                                <td>Lizzee</td>
                                                <td><a href="#">Goodlow</a></td>
                                                <td>Technical Services Librarian</td>
                                                <td data-value="-257733999319">1 Nov 1961</td>
                                                <td data-value="3"><span class="label label-warning status-suspended" title="Suspended">Suspended</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Judi</td>
                                                <td>Badgett</td>
                                                <td>Electrical Lineworker</td>
                                                <td data-value="362134712000">23 Jun 1981</td>
                                                <td data-value="1"><span class="label label-success status-active" title="Active">Active</span></td>
                                            </tr>
                                            <tr>
                                                <td>Lauri</td>
                                                <td>Hyland</td>
                                                <td>Blackjack Supervisor</td>
                                                <td data-value="500874333932">15 Nov 1985</td>
                                                <td data-value="3"><span class="label label-warning status-suspended" title="Suspended">Suspended</span>
                                                </td>
                                            </tr>
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
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- main menu -->
            <nav id="main_menu">
                <div class="menu_wrapper">
                    <ul>
                        <li class="first_level">
                            <a href="dashboard.php">
                                <span class="icon_house_alt first_level_icon"></span>
                                <span class="menu-title">Dashboard</span>
                            </a>
                        </li>
                        <li class="first_level">
                            <a href="javascript:void(0)">
                                <span class="icon_document_alt first_level_icon"></span>
                                <span class="menu-title">Forms</span>
                            </a>
                            <ul>
                                <li class="submenu-title">Forms</li>
                                <li><a href="forms-regular_elements.php">Regular Elements</a></li>
                                <li><a href="forms-extended_elements.php">Extended Elements</a></li>
                                <li><a href="forms-gridforms.php">Gridforms</a></li>
                                <li><a href="forms-validation.php">Validation</a></li>
                                <li><a href="forms-wizard.php">Wizard</a></li>
                            </ul>
                        </li>
                        <li class="first_level">
                            <a href="javascript:void(0)">
                                <span class="icon_folder-alt first_level_icon"></span>
                                <span class="menu-title">Pages</span>
                                <span class="label label-danger">12</span>
                            </a>
                            <ul>
                                <li class="submenu-title">Pages</li>
                                <li><a href="pages-chat.php">Chat</a></li>
                                <li><a href="pages-contact_list.php">Contact List</a></li>
                                <li><a href="error_404.php">Error 404</a></li>
                                <li><a href="pages-help_faq.php">Help/Faq</a></li>
                                <li><a href="pages-invoices.php">Invoices</a></li>
                                <li><a href="login_page.php">Login Page</a></li>
                                <li><a href="login_page2.php">Login Page 2</a></li>
                                <li><a href="pages-mailbox.php">Mailbox</a></li>
                                <li><a href="pages-mailbox_compose.php">Mailbox (compose)</a></li>
                                <li><a href="pages-mailbox_message.php">Mailbox (details)</a></li>
                                <li><a href="pages-search_page.php">Search Page</a></li>
                                <li><a href="pages-user_list.php">User List</a></li>
                                <li><a href="pages-user_profile.php">User Profile</a></li>
                                <li><a href="pages-user_profile2.php">User Profile 2</a></li>
                            </ul>
                        </li>
                        <li class="first_level">
                            <a href="javascript:void(0)">
                                <span class="icon_puzzle first_level_icon"></span>
                                <span class="menu-title">Components</span>
                            </a>
                            <ul>
                                <li class="submenu-title">Components</li>
                                <li><a href="components-bootstrap.php">Bootstrap</a></li>
                                <li><a href="components-gallery.php">Gallery</a></li>
                                <li><a href="components-grid.php">Grid</a></li>
                                <li><a href="components-icons.php">Icons</a></li>
                                <li><a href="components-notifications_popups.php">Notifications/Popups</a></li>
                                <li><a href="components-typography.php">Typography</a></li>
                            </ul>
                        </li>
                        <li class="first_level">
                            <a href="javascript:void(0)">
                                <span class="icon_lightbulb_alt first_level_icon"></span>
                                <span class="menu-title">Plugins</span>
                                <span class="label label-danger">6</span>
                            </a>
                            <ul>
                                <li class="submenu-title">Plugins</li>
                                <li><a href="plugins-ace_editor.php">Ace Editor</a></li>
                                <li><a href="plugins-calendar.php">Calendar</a></li>
                                <li><a href="plugins-charts.php">Charts</a></li>
                                <li><a href="plugins-gantt_chart.php">Gantt Chart</a></li>
                                <li><a href="plugins-google_maps.php">Google Maps</a></li>
                                <li><a class="act_nav" href="plugins-tables_footable.php">Tables</a></li>
                                <li><a href="plugins-vector_maps.php">Vector Maps</a></li>
                            </ul>
                        </li>
                        <li class="first_level has_submenu">
                            <a href="javascript:void(0)">
                                <span class="first_level_icon icon_menu-circle_alt2"></span>
                                <span class="menu-title">Sub menu</span>
                            </a>
                            <ul>
                                <li class="submenu-title">Sub menu</li>
                                <li><a href="javascript:void(0)">01. Lorem ipsum</a></li>
                                <li class="has_submenu">
                                    <a href="javascript:void(0)">02. Lorem ipsum</a>
                                    <ul>
                                        <li class="has_submenu">
                                            <a href="javascript:void(0)">02.1 Lorem ipsum dolor sit amet</a>
                                            <ul>
                                                <li><a href="javascript:void(0)">02.1.1 Lorem ipsum</a></li>
                                                <li><a href="javascript:void(0)">02.1.2 Lorem ipsum</a></li>
                                                <li><a href="javascript:void(0)">02.1.3 Lorem ipsum</a></li>
                                                <li><a href="javascript:void(0)">02.1.4 Lorem ipsum</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="javascript:void(0)">02.2 Lorem ipsum</a></li>
                                        <li><a href="javascript:void(0)">02.3 Lorem ipsum</a></li>
                                        <li><a href="javascript:void(0)">02.4 Lorem ipsum</a></li>
                                    </ul>
                                </li>
                                <li class="has_submenu">
                                    <a href="javascript:void(0)">03. Lorem ipsum</a>
                                    <ul>
                                        <li><a href="javascript:void(0)">03.1 Lorem ipsum</a></li>
                                        <li><a href="javascript:void(0)">03.2 Lorem ipsum</a></li>
                                        <li><a href="javascript:void(0)">03.3 Lorem ipsum</a></li>
                                        <li><a href="javascript:void(0)">03.4 Lorem ipsum</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)">04. Lorem ipsum</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="menu_toggle">
                    <span class="icon_menu_toggle">
                        <i class="arrow_carrot-2left toggle_left"></i>
                        <i class="arrow_carrot-2right toggle_right" style="display:none"></i>
                    </span>
                </div>
            </nav>

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
        <div id="style_switcher">
            <a class="switcher_toggle"><i class="icon_cog"></i></a>
            <div class="style_items">
                <div class="heading_b"><span class="heading_text">Top Bar Color</span></div>
                <ul class="clearfix" id="topBar_style_switch">
                    <li class="sw_tb_style_0 style_active" title=""><span class="icon_check_alt2"></span></li>
                    <li class="sw_tb_style_1" title="topBar_style_1"><span class="icon_check_alt2"></span></li>
                    <li class="sw_tb_style_2" title="topBar_style_2"><span class="icon_check_alt2"></span></li>
                    <li class="sw_tb_style_3" title="topBar_style_3"><span class="icon_check_alt2"></span></li>
                    <li class="sw_tb_style_4" title="topBar_style_4"><span class="icon_check_alt2"></span></li>
                    <li class="sw_tb_style_5" title="topBar_style_5"><span class="icon_check_alt2"></span></li>
                    <li class="sw_tb_style_6" title="topBar_style_6"><span class="icon_check_alt2"></span></li>
                    <li class="sw_tb_style_7" title="topBar_style_7"><span class="icon_check_alt2"></span></li>
                    <li class="sw_tb_style_8" title="topBar_style_8"><span class="icon_check_alt2"></span></li>
                    <li class="sw_tb_style_9" title="topBar_style_9"><span class="icon_check_alt2"></span></li>
                    <li class="sw_tb_style_10" title="topBar_style_10"><span class="icon_check_alt2"></span></li>
                    <li class="sw_tb_style_11" title="topBar_style_11"><span class="icon_check_alt2"></span></li>
                    <li class="sw_tb_style_12" title="topBar_style_12"><span class="icon_check_alt2"></span></li>
                    <li class="sw_tb_style_13" title="topBar_style_13"><span class="icon_check_alt2"></span></li>
                    <li class="sw_tb_style_14" title="topBar_style_14"><span class="icon_check_alt2"></span></li>
                </ul>
            </div>
            <hr/>
            <div class="clearfix hidden-sm hidden-md hidden-xs sepH_b">
                <label>Fixed layout</label>
                <div class="pull-right"><input type="checkbox" id="fixed_layout_switch" class="js-switch mini-switch"></div>
            </div>
            <div class="style_items hidden-sm hidden-md hidden-xs" id="fixed_layout_bg_switch">
                <hr/>
                <div class="heading_b"><span class="heading_text">Background</span></div>
                <ul class="clearfix">
                    <li class="sw_bg_0" title="bg_0"></li>
                    <li class="sw_bg_1" title="bg_1"></li>
                    <li class="sw_bg_2" title="bg_2"></li>
                    <li class="sw_bg_3" title="bg_3"></li>
                    <li class="sw_bg_4" title="bg_4"></li>
                    <li class="sw_bg_5" title="bg_5"></li>
                    <li class="sw_bg_6" title="bg_6"></li>
                    <li class="sw_bg_7" title="bg_7"></li>
                </ul>
                <hr/>
            </div>
            <div class="clearfix sepH_b">
                <label>Top Menu</label>
                <div class="pull-right"><input type="checkbox" id="top_menu_switch" class="js-switch mini-switch"></div>
            </div>
            <div class="clearfix sepH_b">
                <label>Hide Breadcrumbs</label>
                <div class="pull-right"><input type="checkbox" id="breadcrumbs_hide" class="js-switch mini-switch"></div>
            </div>
            <div class="text-center sepH_a">
                <button data-toggle="modal" data-target="#showCSSModal" id="showCSS" class="btn btn-default btn-xs btn-outline" type="button">Show CSS</button>
            </div>
        </div>
        <div class="modal fade" id="showCSSModal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel">CSS Classes</h4>
                    </div>
                    <div class="modal-body">
                        <pre id="showCSSPre"></pre>
                    </div>
                </div>
            </div>
        </div>
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','../../www.google-analytics.com/analytics.js','ga');
		  
			ga('create', 'UA-54304677-1', 'auto');
			ga('send', 'pageview');
		</script>

    </body>

<!-- Mirrored from yukon-admin.tzdthemes.com/html/plugins-tables_footable.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 May 2015 11:40:33 GMT -->
</html>
