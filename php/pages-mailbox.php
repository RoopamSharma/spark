<!DOCTYPE html>
<html>
    
<!-- Mirrored from yukon-admin.tzdthemes.com/html/pages-mailbox.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 May 2015 11:39:06 GMT -->
<head>
		<meta charset="UTF-8">
		<title>Yukon Admin HTML v1.5 (pages-mailbox)</title>
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
		            <li><span>Pages</span></li>
		            <li><span>Mailbox</span></li>
		        </ul>
            </nav>

            <!-- main content -->
            <div id="main_wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3 col-lg-2">
                            <a href="pages-mailbox_compose.php" class="btn btn-primary btn-outline btn-sm">Compose</a>
                            <hr/>
                            <div class="list-group mailbox_menu">
                                <a href="pages-mailbox.php" class="active list-group-item">
                                    <span class="badge badge-danger">96</span>
                                    <span class="menu_icon icon_download"></span>Inbox
                                </a>
                                <a href="pages-mailbox.php" class="list-group-item">
                                    <span class="menu_icon icon_upload"></span>Sent
                                </a>
                                <a href="pages-mailbox.php" class="list-group-item">
                                    <span class="badge badge-danger">52</span>
                                    <span class="menu_icon icon_error-circle_alt"></span>Spam
                                </a>
                                <a href="pages-mailbox.php" class="list-group-item">
                                    <span class="menu_icon icon_pencil-edit"></span>Drafts
                                </a>
                                <a href="pages-mailbox.php" class="list-group-item">
                                    <span class="menu_icon icon_trash_alt"></span>Trash
                                </a>
                            </div>
                        </div>
                        <div class="col-md-9 col-lg-10">
                            <div class="row">
                                <div class="col-md-5 col-md-push-7">
                                    <input id="message_filter" type="text" class="form-control input-sm" placeholder="Search..."/>
                                </div>
                                <div class="col-md-5 col-md-pull-5">
                                    <div class="btn-group btn-group-sm">
                                        <button type="button" class="btn btn-default">Reply</button>
                                        <button type="button" class="btn btn-default">Spam</button>
                                        <button type="button" class="btn btn-default text-danger">Delete</button>
                                    </div>
                                </div>
                            </div>
                            <hr/>
                            <table id="mailbox_table" class="table table-yuk2 bg-fill toggle-arrow-tiny" data-page-size="20" data-filter="#message_filter">
                                <thead>
                                    <tr>
                                        <th class="cw footable_toggler"></th>
                                        <th class="cw"><input type="checkbox" id="msgSelectAll"></th>
                                        <th class="cw"></th>
                                        <th data-hide="phone,tablet">From</th>
                                        <th>Subject</th>
                                        <th data-hide="phone">Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="unreaded">
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star"><span class="icon_star_alt"></span></td>
                                        <td>Ms. Sally O'Reilly</td>
                                        <td><a href="pages-mailbox_message.php">Distinctio deleniti est velit voluptatem.</a></td>
                                        <td>Mon 30.11.2015</td>
                                    </tr>
                                    <tr class="unreaded">
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star"><span class="icon_star_alt"></span></td>
                                        <td>Carrie Emard DVM</td>
                                        <td><a href="pages-mailbox_message.php">Tempore ut aut perferendis.</a></td>
                                        <td>Sun 29.11.2015</td>
                                    </tr>
                                    <tr class="unreaded">
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star"><span class="icon_star_alt"></span></td>
                                        <td>Aurelie Schimmel</td>
                                        <td><a href="pages-mailbox_message.php">Accusantium incidunt aut esse et ipsum.</a></td>
                                        <td>Sat 28.11.2015</td>
                                    </tr>
                                    <tr class="unreaded">
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star marked"><span class="icon_star"></span></td>
                                        <td>Alfonzo Bernier</td>
                                        <td><a href="pages-mailbox_message.php">Non soluta unde maxime et.</a></td>
                                        <td>Fri 27.11.2015</td>
                                    </tr>
                                    <tr class="unreaded">
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star"><span class="icon_star_alt"></span></td>
                                        <td>Florence Harvey</td>
                                        <td><a href="pages-mailbox_message.php">Error animi aliquam nemo vel.</a></td>
                                        <td>Thu 26.11.2015</td>
                                    </tr>
                                    <tr class="unreaded">
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star marked"><span class="icon_star"></span></td>
                                        <td>Prof. Alfredo Hansen V</td>
                                        <td><a href="pages-mailbox_message.php">Quasi nihil facilis quaerat.</a></td>
                                        <td>Wed 25.11.2015</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star"><span class="icon_star_alt"></span></td>
                                        <td>Arvilla Fisher</td>
                                        <td><a href="pages-mailbox_message.php">Laborum qui et quis enim voluptas.</a></td>
                                        <td>Tue 24.11.2015</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star"><span class="icon_star_alt"></span></td>
                                        <td>Arvel Schowalter</td>
                                        <td><a href="pages-mailbox_message.php">Aperiam accusamus magni et nesciunt eius dolor laudantium.</a></td>
                                        <td>Mon 23.11.2015</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star"><span class="icon_star_alt"></span></td>
                                        <td>John Altenwerth</td>
                                        <td><a href="pages-mailbox_message.php">Porro ut molestiae et rerum.</a></td>
                                        <td>Sun 22.11.2015</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star"><span class="icon_star_alt"></span></td>
                                        <td>Dale Schneider</td>
                                        <td><a href="pages-mailbox_message.php">Dolor id earum voluptatem id nesciunt.</a></td>
                                        <td>Sat 21.11.2015</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star marked"><span class="icon_star"></span></td>
                                        <td>Georgette Pacocha</td>
                                        <td><a href="pages-mailbox_message.php">Ullam eaque qui eaque ut eius dolorem sit laudantium.</a></td>
                                        <td>Fri 20.11.2015</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star"><span class="icon_star_alt"></span></td>
                                        <td>Jada Sanford</td>
                                        <td><a href="pages-mailbox_message.php">In quod et perspiciatis voluptatem nostrum aut.</a></td>
                                        <td>Thu 19.11.2015</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star"><span class="icon_star_alt"></span></td>
                                        <td>Bonnie Howe</td>
                                        <td><a href="pages-mailbox_message.php">Dolores sit in voluptatibus voluptatem.</a></td>
                                        <td>Wed 18.11.2015</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star"><span class="icon_star_alt"></span></td>
                                        <td>Prof. Gus Kovacek</td>
                                        <td><a href="pages-mailbox_message.php">Quia eum qui sit tempora quos in dolore.</a></td>
                                        <td>Tue 17.11.2015</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star"><span class="icon_star_alt"></span></td>
                                        <td>Queen Hirthe</td>
                                        <td><a href="pages-mailbox_message.php">Consequuntur temporibus quis voluptas nostrum et veritatis.</a></td>
                                        <td>Mon 16.11.2015</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star"><span class="icon_star_alt"></span></td>
                                        <td>Mr. Charley Hessel II</td>
                                        <td><a href="pages-mailbox_message.php">Iusto labore vero dolorum tenetur expedita id quas.</a></td>
                                        <td>Sun 15.11.2015</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star marked"><span class="icon_star"></span></td>
                                        <td>Cora Bayer</td>
                                        <td><a href="pages-mailbox_message.php">Ad quo dicta sit quam.</a></td>
                                        <td>Sat 14.11.2015</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star"><span class="icon_star_alt"></span></td>
                                        <td>Reyna Hoeger</td>
                                        <td><a href="pages-mailbox_message.php">Ut et ex sit quas asperiores veniam corporis optio.</a></td>
                                        <td>Fri 13.11.2015</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star"><span class="icon_star_alt"></span></td>
                                        <td>Dr. Carmela Rice I</td>
                                        <td><a href="pages-mailbox_message.php">Nostrum laudantium ea mollitia sapiente.</a></td>
                                        <td>Thu 12.11.2015</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star"><span class="icon_star_alt"></span></td>
                                        <td>Dallin Bechtelar</td>
                                        <td><a href="pages-mailbox_message.php">Ullam eos excepturi totam commodi quo accusamus ipsum.</a></td>
                                        <td>Wed 11.11.2015</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star"><span class="icon_star_alt"></span></td>
                                        <td>Nicholas Wuckert PhD</td>
                                        <td><a href="pages-mailbox_message.php">Omnis consequatur sed et quibusdam quidem.</a></td>
                                        <td>Tue 10.11.2015</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star"><span class="icon_star_alt"></span></td>
                                        <td>Providenci Turner</td>
                                        <td><a href="pages-mailbox_message.php">Error sint dicta nostrum officia doloribus voluptatum.</a></td>
                                        <td>Mon 09.11.2015</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star"><span class="icon_star_alt"></span></td>
                                        <td>Krystal Bauch</td>
                                        <td><a href="pages-mailbox_message.php">Dolore consectetur corrupti quia amet qui voluptates.</a></td>
                                        <td>Sun 08.11.2015</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star"><span class="icon_star_alt"></span></td>
                                        <td>Brady Mante</td>
                                        <td><a href="pages-mailbox_message.php">Sed ea id vel aut.</a></td>
                                        <td>Sat 07.11.2015</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star marked"><span class="icon_star"></span></td>
                                        <td>Mr. Lenny Nader MD</td>
                                        <td><a href="pages-mailbox_message.php">Beatae magni itaque sit suscipit quia.</a></td>
                                        <td>Fri 06.11.2015</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star"><span class="icon_star_alt"></span></td>
                                        <td>Barney Bednar</td>
                                        <td><a href="pages-mailbox_message.php">Rerum omnis omnis corrupti atque voluptas rerum reprehenderit.</a></td>
                                        <td>Thu 05.11.2015</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star marked"><span class="icon_star"></span></td>
                                        <td>Larry Schiller</td>
                                        <td><a href="pages-mailbox_message.php">Non qui sint voluptatibus id officia.</a></td>
                                        <td>Wed 04.11.2015</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star"><span class="icon_star_alt"></span></td>
                                        <td>Rowena Stroman DVM</td>
                                        <td><a href="pages-mailbox_message.php">Saepe dolores nesciunt itaque aut fuga possimus maxime.</a></td>
                                        <td>Tue 03.11.2015</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star"><span class="icon_star_alt"></span></td>
                                        <td>Mr. Kian Feeney DVM</td>
                                        <td><a href="pages-mailbox_message.php">Ea qui dicta dolores officiis mollitia.</a></td>
                                        <td>Mon 02.11.2015</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star"><span class="icon_star_alt"></span></td>
                                        <td>Prof. Cesar Halvorson</td>
                                        <td><a href="pages-mailbox_message.php">Nihil aut sed modi necessitatibus ut ut non.</a></td>
                                        <td>Sun 01.11.2015</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star"><span class="icon_star_alt"></span></td>
                                        <td>Angus Spinka IV</td>
                                        <td><a href="pages-mailbox_message.php">Nesciunt quos qui nisi et.</a></td>
                                        <td>Sat 31.10.2015</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star"><span class="icon_star_alt"></span></td>
                                        <td>Clementine Lebsack Jr.</td>
                                        <td><a href="pages-mailbox_message.php">Alias exercitationem est est consequatur nesciunt officia autem laborum.</a></td>
                                        <td>Fri 30.10.2015</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star"><span class="icon_star_alt"></span></td>
                                        <td>Larry Swaniawski</td>
                                        <td><a href="pages-mailbox_message.php">Aut vel minus soluta similique nulla ut.</a></td>
                                        <td>Thu 29.10.2015</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star marked"><span class="icon_star"></span></td>
                                        <td>Kaylah Spinka</td>
                                        <td><a href="pages-mailbox_message.php">Eos nostrum sed ut id perspiciatis.</a></td>
                                        <td>Wed 28.10.2015</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star"><span class="icon_star_alt"></span></td>
                                        <td>Hugh Cronin</td>
                                        <td><a href="pages-mailbox_message.php">Rem aut vero et ab debitis accusantium.</a></td>
                                        <td>Tue 27.10.2015</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star"><span class="icon_star_alt"></span></td>
                                        <td>Felicia Bogan V</td>
                                        <td><a href="pages-mailbox_message.php">Temporibus incidunt magnam nam aliquid illum ut ut.</a></td>
                                        <td>Mon 26.10.2015</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star"><span class="icon_star_alt"></span></td>
                                        <td>Ms. Rosalia Paucek Jr.</td>
                                        <td><a href="pages-mailbox_message.php">Possimus unde quisquam nihil enim vel.</a></td>
                                        <td>Sun 25.10.2015</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star"><span class="icon_star_alt"></span></td>
                                        <td>Nakia Kerluke</td>
                                        <td><a href="pages-mailbox_message.php">Unde veritatis fugiat quos.</a></td>
                                        <td>Sat 24.10.2015</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star"><span class="icon_star_alt"></span></td>
                                        <td>Millie Wintheiser</td>
                                        <td><a href="pages-mailbox_message.php">Itaque nihil aliquid repellat numquam.</a></td>
                                        <td>Fri 23.10.2015</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star"><span class="icon_star_alt"></span></td>
                                        <td>Prof. Werner Emmerich</td>
                                        <td><a href="pages-mailbox_message.php">Commodi adipisci fugit aut quae delectus.</a></td>
                                        <td>Thu 22.10.2015</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star"><span class="icon_star_alt"></span></td>
                                        <td>Obie Feil</td>
                                        <td><a href="pages-mailbox_message.php">Officiis recusandae qui dignissimos autem non nihil omnis quis.</a></td>
                                        <td>Wed 21.10.2015</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star"><span class="icon_star_alt"></span></td>
                                        <td>Jason Marks</td>
                                        <td><a href="pages-mailbox_message.php">Esse saepe voluptatibus minima.</a></td>
                                        <td>Tue 20.10.2015</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star"><span class="icon_star_alt"></span></td>
                                        <td>Rae Lemke</td>
                                        <td><a href="pages-mailbox_message.php">Distinctio beatae fugiat ullam cumque.</a></td>
                                        <td>Mon 19.10.2015</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star"><span class="icon_star_alt"></span></td>
                                        <td>Rosalyn Mills</td>
                                        <td><a href="pages-mailbox_message.php">Dolor tenetur consectetur in ratione necessitatibus dolorem.</a></td>
                                        <td>Sun 18.10.2015</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star"><span class="icon_star_alt"></span></td>
                                        <td>Sofia Goyette</td>
                                        <td><a href="pages-mailbox_message.php">Officia sed ut voluptatem illo sunt voluptates nihil odio.</a></td>
                                        <td>Sat 17.10.2015</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star"><span class="icon_star_alt"></span></td>
                                        <td>Marcelina Nader</td>
                                        <td><a href="pages-mailbox_message.php">Mollitia reprehenderit nisi soluta consequatur.</a></td>
                                        <td>Fri 16.10.2015</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star"><span class="icon_star_alt"></span></td>
                                        <td>Mrs. Elody Goldner</td>
                                        <td><a href="pages-mailbox_message.php">Odio nobis porro harum tempora.</a></td>
                                        <td>Thu 15.10.2015</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star"><span class="icon_star_alt"></span></td>
                                        <td>Dr. Chadrick Konopelski</td>
                                        <td><a href="pages-mailbox_message.php">Quis et voluptate qui voluptate quaerat ut explicabo.</a></td>
                                        <td>Wed 14.10.2015</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star"><span class="icon_star_alt"></span></td>
                                        <td>Jon Schmeler</td>
                                        <td><a href="pages-mailbox_message.php">Sed animi omnis qui consequatur illo cum maiores.</a></td>
                                        <td>Tue 13.10.2015</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star"><span class="icon_star_alt"></span></td>
                                        <td>Amanda Upton</td>
                                        <td><a href="pages-mailbox_message.php">Et rerum est excepturi ea reprehenderit.</a></td>
                                        <td>Mon 12.10.2015</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star marked"><span class="icon_star"></span></td>
                                        <td>Ms. Opal Glover MD</td>
                                        <td><a href="pages-mailbox_message.php">Voluptas nostrum quia repellendus cumque.</a></td>
                                        <td>Sun 11.10.2015</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star"><span class="icon_star_alt"></span></td>
                                        <td>Mr. Xander Champlin DVM</td>
                                        <td><a href="pages-mailbox_message.php">Reprehenderit distinctio similique sit.</a></td>
                                        <td>Sat 10.10.2015</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star"><span class="icon_star_alt"></span></td>
                                        <td>Mrs. Jayne Willms DVM</td>
                                        <td><a href="pages-mailbox_message.php">Et nostrum occaecati assumenda assumenda.</a></td>
                                        <td>Fri 09.10.2015</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star"><span class="icon_star_alt"></span></td>
                                        <td>Dr. Donny D'Amore</td>
                                        <td><a href="pages-mailbox_message.php">Dignissimos beatae libero in nemo ratione iure deserunt.</a></td>
                                        <td>Thu 08.10.2015</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star"><span class="icon_star_alt"></span></td>
                                        <td>Miss Jennyfer Murazik</td>
                                        <td><a href="pages-mailbox_message.php">Iste et aliquid et quidem at molestiae.</a></td>
                                        <td>Wed 07.10.2015</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star"><span class="icon_star_alt"></span></td>
                                        <td>Elmore Koch</td>
                                        <td><a href="pages-mailbox_message.php">Sint iure nihil consequatur nulla aperiam.</a></td>
                                        <td>Tue 06.10.2015</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star"><span class="icon_star_alt"></span></td>
                                        <td>Mike Abbott</td>
                                        <td><a href="pages-mailbox_message.php">In est vel quis aut ipsum.</a></td>
                                        <td>Mon 05.10.2015</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star"><span class="icon_star_alt"></span></td>
                                        <td>Cecil Graham</td>
                                        <td><a href="pages-mailbox_message.php">Dignissimos aut tempore impedit.</a></td>
                                        <td>Sun 04.10.2015</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star"><span class="icon_star_alt"></span></td>
                                        <td>Elnora Ritchie</td>
                                        <td><a href="pages-mailbox_message.php">Voluptas porro in sit hic dolorem quibusdam aut.</a></td>
                                        <td>Sat 03.10.2015</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star"><span class="icon_star_alt"></span></td>
                                        <td>Guy Beahan</td>
                                        <td><a href="pages-mailbox_message.php">Voluptas qui quia quia expedita.</a></td>
                                        <td>Fri 02.10.2015</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star"><span class="icon_star_alt"></span></td>
                                        <td>Raina Reilly</td>
                                        <td><a href="pages-mailbox_message.php">Quaerat inventore provident cupiditate recusandae.</a></td>
                                        <td>Thu 01.10.2015</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star"><span class="icon_star_alt"></span></td>
                                        <td>Colt Maggio</td>
                                        <td><a href="pages-mailbox_message.php">Voluptas nihil hic laboriosam soluta veniam.</a></td>
                                        <td>Wed 30.09.2015</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star"><span class="icon_star_alt"></span></td>
                                        <td>Chad Baumbach PhD</td>
                                        <td><a href="pages-mailbox_message.php">Repellendus ipsum earum soluta error ut pariatur qui.</a></td>
                                        <td>Tue 29.09.2015</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star"><span class="icon_star_alt"></span></td>
                                        <td>Dr. Creola Schmidt II</td>
                                        <td><a href="pages-mailbox_message.php">Asperiores quasi est porro quis recusandae est quas.</a></td>
                                        <td>Mon 28.09.2015</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star marked"><span class="icon_star"></span></td>
                                        <td>Jordan Little</td>
                                        <td><a href="pages-mailbox_message.php">Voluptatem esse et cupiditate omnis commodi.</a></td>
                                        <td>Sun 27.09.2015</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star"><span class="icon_star_alt"></span></td>
                                        <td>Dr. Maynard Jast</td>
                                        <td><a href="pages-mailbox_message.php">Qui dolorem fugiat autem nam facilis debitis.</a></td>
                                        <td>Sat 26.09.2015</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star"><span class="icon_star_alt"></span></td>
                                        <td>Ressie Brakus</td>
                                        <td><a href="pages-mailbox_message.php">Sit est corporis vel eius non.</a></td>
                                        <td>Fri 25.09.2015</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star"><span class="icon_star_alt"></span></td>
                                        <td>Pierce Rice</td>
                                        <td><a href="pages-mailbox_message.php">Atque deserunt vel omnis delectus est ut.</a></td>
                                        <td>Thu 24.09.2015</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star"><span class="icon_star_alt"></span></td>
                                        <td>Agustin Kautzer</td>
                                        <td><a href="pages-mailbox_message.php">Est numquam quia excepturi eaque ut voluptas molestiae labore.</a></td>
                                        <td>Wed 23.09.2015</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star"><span class="icon_star_alt"></span></td>
                                        <td>Gail Conn II</td>
                                        <td><a href="pages-mailbox_message.php">Numquam qui quasi aut qui commodi.</a></td>
                                        <td>Tue 22.09.2015</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star"><span class="icon_star_alt"></span></td>
                                        <td>Miss Cassie Schumm</td>
                                        <td><a href="pages-mailbox_message.php">Ea corporis rerum et delectus tempore rem enim sit.</a></td>
                                        <td>Mon 21.09.2015</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star"><span class="icon_star_alt"></span></td>
                                        <td>Zoe Pouros PhD</td>
                                        <td><a href="pages-mailbox_message.php">Praesentium velit saepe vel fuga tenetur in.</a></td>
                                        <td>Sun 20.09.2015</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star"><span class="icon_star_alt"></span></td>
                                        <td>Ms. Jada Hayes</td>
                                        <td><a href="pages-mailbox_message.php">Veritatis voluptas aut perferendis molestiae officia accusantium officia.</a></td>
                                        <td>Sat 19.09.2015</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star"><span class="icon_star_alt"></span></td>
                                        <td>Mrs. Haylee Thiel II</td>
                                        <td><a href="pages-mailbox_message.php">Aperiam voluptates iste earum eligendi dolore accusantium exercitationem.</a></td>
                                        <td>Fri 18.09.2015</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star"><span class="icon_star_alt"></span></td>
                                        <td>Miss Lila Cummings Jr.</td>
                                        <td><a href="pages-mailbox_message.php">Mollitia distinctio tempore dolores molestiae occaecati veritatis ad.</a></td>
                                        <td>Thu 17.09.2015</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star"><span class="icon_star_alt"></span></td>
                                        <td>Kariane Rath</td>
                                        <td><a href="pages-mailbox_message.php">Perspiciatis quis quo itaque sint natus dolores est.</a></td>
                                        <td>Wed 16.09.2015</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star"><span class="icon_star_alt"></span></td>
                                        <td>Sonia Rath</td>
                                        <td><a href="pages-mailbox_message.php">Et quis sint omnis voluptate.</a></td>
                                        <td>Tue 15.09.2015</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star"><span class="icon_star_alt"></span></td>
                                        <td>Richmond Schuppe Sr.</td>
                                        <td><a href="pages-mailbox_message.php">Sed ab et laborum sequi.</a></td>
                                        <td>Mon 14.09.2015</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star"><span class="icon_star_alt"></span></td>
                                        <td>Austen Lesch</td>
                                        <td><a href="pages-mailbox_message.php">Et omnis doloribus id.</a></td>
                                        <td>Sun 13.09.2015</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star"><span class="icon_star_alt"></span></td>
                                        <td>Prof. Jarrell Vandervort I</td>
                                        <td><a href="pages-mailbox_message.php">Et illo odio velit rerum architecto voluptas voluptatem.</a></td>
                                        <td>Sat 12.09.2015</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star"><span class="icon_star_alt"></span></td>
                                        <td>Bill Muller</td>
                                        <td><a href="pages-mailbox_message.php">Ut debitis reiciendis aliquid sed eius.</a></td>
                                        <td>Fri 11.09.2015</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star"><span class="icon_star_alt"></span></td>
                                        <td>Prof. Conner Zulauf Jr.</td>
                                        <td><a href="pages-mailbox_message.php">Officia earum explicabo iste eaque voluptate culpa aut autem.</a></td>
                                        <td>Thu 10.09.2015</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star"><span class="icon_star_alt"></span></td>
                                        <td>Gordon Hand</td>
                                        <td><a href="pages-mailbox_message.php">Dolore omnis sequi est iusto facilis.</a></td>
                                        <td>Wed 09.09.2015</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star"><span class="icon_star_alt"></span></td>
                                        <td>Dr. Kassandra Rosenbaum</td>
                                        <td><a href="pages-mailbox_message.php">Unde nobis dolores quaerat ea sed.</a></td>
                                        <td>Tue 08.09.2015</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star"><span class="icon_star_alt"></span></td>
                                        <td>Miss Dayana Wilkinson PhD</td>
                                        <td><a href="pages-mailbox_message.php">Quos quia id qui velit aut quos ut.</a></td>
                                        <td>Mon 07.09.2015</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star"><span class="icon_star_alt"></span></td>
                                        <td>Eliezer Quitzon Jr.</td>
                                        <td><a href="pages-mailbox_message.php">Maiores debitis deserunt nisi ullam laboriosam aperiam necessitatibus.</a></td>
                                        <td>Sun 06.09.2015</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star"><span class="icon_star_alt"></span></td>
                                        <td>Tyson Rohan</td>
                                        <td><a href="pages-mailbox_message.php">Eius a neque aut a.</a></td>
                                        <td>Sat 05.09.2015</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star"><span class="icon_star_alt"></span></td>
                                        <td>Dr. Allen Huel II</td>
                                        <td><a href="pages-mailbox_message.php">Ducimus blanditiis ab rerum culpa.</a></td>
                                        <td>Fri 04.09.2015</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star"><span class="icon_star_alt"></span></td>
                                        <td>Prof. Ronny Mohr</td>
                                        <td><a href="pages-mailbox_message.php">Eveniet doloribus veniam repellendus officia eveniet beatae atque.</a></td>
                                        <td>Thu 03.09.2015</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star"><span class="icon_star_alt"></span></td>
                                        <td>Raul Heathcote</td>
                                        <td><a href="pages-mailbox_message.php">Qui dolor ut sint autem autem dolore.</a></td>
                                        <td>Wed 02.09.2015</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star"><span class="icon_star_alt"></span></td>
                                        <td>Miss Chyna Williamson I</td>
                                        <td><a href="pages-mailbox_message.php">In et inventore aperiam nisi vel voluptas hic deserunt.</a></td>
                                        <td>Tue 01.09.2015</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star"><span class="icon_star_alt"></span></td>
                                        <td>Alice Boyer</td>
                                        <td><a href="pages-mailbox_message.php">Laboriosam velit ex doloribus.</a></td>
                                        <td>Mon 31.08.2015</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star"><span class="icon_star_alt"></span></td>
                                        <td>Ruthe Kunze</td>
                                        <td><a href="pages-mailbox_message.php">Accusantium laborum molestiae beatae doloremque vel.</a></td>
                                        <td>Sun 30.08.2015</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star"><span class="icon_star_alt"></span></td>
                                        <td>Arlene Larson</td>
                                        <td><a href="pages-mailbox_message.php">Suscipit esse dignissimos et qui dolores.</a></td>
                                        <td>Sat 29.08.2015</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star"><span class="icon_star_alt"></span></td>
                                        <td>Leda Kassulke DDS</td>
                                        <td><a href="pages-mailbox_message.php">Facilis nulla deleniti similique nisi expedita.</a></td>
                                        <td>Fri 28.08.2015</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><div><input type="checkbox" class="msgSelect"></div></td>
                                        <td class="mbox_star"><span class="icon_star_alt"></span></td>
                                        <td>Mike Jenkins MD</td>
                                        <td><a href="pages-mailbox_message.php">Recusandae facere nisi illo reprehenderit molestiae.</a></td>
                                        <td>Thu 27.08.2015</td>
                                    </tr>
                                </tbody>
                                <tfoot class="hide-if-no-paging">
                                    <tr>
                                        <td colspan="6">
                                            <ul class="pagination pagination-sm"></ul>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
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
                                <li><a class="act_nav" href="pages-mailbox.php">Mailbox</a></li>
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

            <!-- footable -->
            <script src="assets/lib/footable/footable.min.js"></script>
            <script src="assets/lib/footable/footable.paginate.min.js"></script>
            <script src="assets/lib/footable/footable.filter.min.js"></script>

            <script>
                $(function() {
                    // footable
                    yukon_footable.p_pages_mailbox();

                    yukon_mailbox.init();
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

<!-- Mirrored from yukon-admin.tzdthemes.com/html/pages-mailbox.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 May 2015 11:39:08 GMT -->
</html>
