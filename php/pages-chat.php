<!DOCTYPE html>
<html>
    
<!-- Mirrored from yukon-admin.tzdthemes.com/html/pages-chat.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 May 2015 11:39:04 GMT -->
<head>
		<meta charset="UTF-8">
		<title>Yukon Admin HTML v1.5 (pages-chat)</title>
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
		            <li><span>Pages</span></li>
		            <li><span>Chat</span></li>
		        </ul>
            </nav>

            <!-- main content -->
            <div id="main_wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="chat_messages">
                                <div class="message_date">Sep 21 2014, 11:23 PM</div>
                                <ul>
                                    <li class="msg_left">
                                        <p class="msg_user">Carrol Clark</p>
                                        Et minus suscipit similique eum praesentium ad nihil. Et excepturi recusandae voluptates velit aperiam velit commodi. Id labore commodi qui rerum. Molestiae cum non rerum perferendis quam a vitae. Praesentium neque consequatur commodi dignissimos voluptates.
                                    </li>
                                    <li class="msg_right">
                                        <p class="msg_user">Octavia White IV</p>
                                        Non consectetur laboriosam eveniet ut. Et in sit ea a repellendus beatae. Labore distinctio harum aut ullam.
                                    </li>
                                </ul>
                                <div class="message_date">Sep 22 2014, 8:37 AM</div>
                                <ul>
                                    <li class="msg_right">
                                        <p class="msg_user">Avis Bahringer MD</p>
                                        Sed suscipit tempore aut aliquid. Aperiam cupiditate et consequatur quibusdam voluptatum porro est qui. Nemo eos praesentium illo ut quam ad commodi quis. Aut nulla consequatur ut necessitatibus minus.
                                    </li>
                                    <li class="msg_left">
                                        <p class="msg_user">Carrol Clark</p>
                                        Totam eligendi voluptate sed non eum corrupti. Nihil voluptas necessitatibus eos maxime molestiae. Quo qui earum consequatur odit. Animi laborum reiciendis mollitia consequatur autem quidem voluptatem.
                                    </li>
                                    <li class="msg_right">
                                        <p class="msg_user">Shany Mitchell</p>
                                        Quia ut illum et placeat blanditiis. Ea assumenda est inventore et aut. Quam iure eveniet quae at ea. Suscipit non quas laborum earum sint.
                                    </li>
                                    <li class="msg_left">
                                        <p class="msg_user">Carrol Clark</p>
                                        In sapiente corporis beatae adipisci. Qui sit porro vel dolores tempora corrupti. Harum qui et dolorem asperiores natus nulla. Et natus sit quasi voluptatem at est.
                                    </li>
                                </ul>
                            </div>
                            <div class="chat_message_send">
                                <textarea class="form-control"></textarea>
                                <button class="btn btn-sm btn-primary" type="button">Send</button>
                            </div>
                        </div>
                        <div class="col-md-3 col-sep">
                            <div class="chat_users">
                                <h3 class="heading_b"><span class="heading_text">Online</span></h3>
                                <ul>
                                    <li class="online">
                                        <a>
                                            <img src="assets/img/avatars/avatar02_tn.png" alt="" width="38" height="38">
                                            Jeanie Leuschke
                                        </a>
                                    </li>
                                    <li class="online">
                                        <a>
                                            <img src="assets/img/avatars/avatar03_tn.png" alt="" width="38" height="38">
                                            Mr. Rodrick Feest
                                        </a>
                                    </li>
                                    <li class="online">
                                        <a>
                                            <img src="assets/img/avatars/avatar04_tn.png" alt="" width="38" height="38">
                                            Kelton Effertz
                                        </a>
                                    </li>
                                    <li class="online">
                                        <a>
                                            <img src="assets/img/avatars/avatar05_tn.png" alt="" width="38" height="38">
                                            Avis Bahringer MD
                                        </a>
                                    </li>
                                </ul>
                                <h3 class="heading_b"><span class="heading_text">Offline</span></h3>
                                <ul>
                                    <li class="offline">
                                        <a>
                                            <img src="assets/img/avatars/avatar06_tn.png" alt="" width="38" height="38">
                                            Dorothy Tromp
                                        </a>
                                    </li>
                                    <li class="offline">
                                        <a>
                                            <img src="assets/img/avatars/avatar07_tn.png" alt="" width="38" height="38">
                                            Dr. Shaniya Ortiz DDS
                                        </a>
                                    </li>
                                </ul>
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
                                <li><a class="act_nav" href="pages-chat.php">Chat</a></li>
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
                                <li><a href="plugins-tables_footable.php">Tables</a></li>
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

            <script>
                $(function() {
                    // chat
                    yukon_chat.init();
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

<!-- Mirrored from yukon-admin.tzdthemes.com/html/pages-chat.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 May 2015 11:39:05 GMT -->
</html>
