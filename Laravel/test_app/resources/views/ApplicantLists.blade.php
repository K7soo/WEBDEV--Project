<!DOCTYPE html>
<html lang="en">

<head>
    <title>DataTables | Tables</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="description">
    <meta content="" name="author">
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400italic,400,300,700">
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Squada+One">
    <link type="text/css" rel="stylesheet" href="global/plugins/font-awesome/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="global/plugins/ionicons/css/ionicons.min.css">
    <link type="text/css" rel="stylesheet" href="global/plugins/simple-line-icons/simple-line-icons.css">
    <link type="text/css" rel="stylesheet" href="global/plugins/animate.css/animate.css">
    <link type="text/css" rel="stylesheet" href="global/plugins/iCheck/skins/all.css">
    <link type="text/css" rel="stylesheet" href="assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css">
    <link type="text/css" rel="stylesheet" href="global/css/style.css">
    <link type="text/css" rel="stylesheet" href="assets/css/page-demo.css">
    <link type="text/css" rel="stylesheet" href="assets/css/style-admin.css">
    <link type="text/css" rel="stylesheet" href="assets/css/style-plugins.css">
    <link type="text/css" rel="stylesheet" href="assets/css/style-responsive.css">
    <link type="text/css" rel="stylesheet" href="assets/css/themes/default.css" id="theme-color">
</head>

<body class="page-header-fixed page-sidebar-fixed">
    <div>
        <div class="page-wrapper"><!--BEGIN HEADER-->
            <header class="header">
                <div class="logo"><a href="{{ route('DashboardUI')}}" class="logo-text"><i class="ion-ios7-analytics"></i>SRAM</a><a href="#" data-toggle="offcanvas" class="sidebar-toggle pull-right"><i class="fa fa-bars"></i></a></div>
                <nav role="navigation" class="navbar navbar-static-top">
                    <form action="#" class="search-form navbar-left hidden-xs">
                        <div class="input-icon right"><i class="icon-magnifier"></i><input type="text" placeholder="Enter keyword" class="form-control input-circle input-dark" /></div>
                    </form>
                    <div class="navbar-right">
                        <!-- <ul class="nav navbar-nav">
                            <li class="dropdown dropdown-extra dropdown-messages"><a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="icon-envelope-open"></i><span class="badge badge-primary">4</span></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <p>You have 12 new messages</p>
                                    </li>
                                    <li>
                                        <ul class="dropdown-menu-list dropdown-scroller">
                                            <li><a href="#"><span class="avatar"><img src="http://api.randomuser.me/portraits/thumb/men/68.jpg" alt="" class="img-circle" /></span><span class="subject"><span class="from">Teodor Macri</span><span class="time">12 mins</span></span><span class="message">Neque porro quisquam est, qui dolorem ipsum quia dolor sit...</span></a></li>
                                            <li><a href="#"><span class="avatar"><img src="http://api.randomuser.me/portraits/thumb/women/39.jpg" alt="" class="img-circle" /></span><span class="subject"><span class="from">Paula Aderca</span><span class="time">21 mins</span></span><span class="message">Neque porro quisquam est, qui dolorem ipsum quia dolor sit...</span></a></li>
                                            <li><a href="#"><span class="avatar"><img src="http://api.randomuser.me/portraits/thumb/men/60.jpg" alt="" class="img-circle" /></span><span class="subject"><span class="from">Pascal Aigner</span><span class="time">1 hrs</span></span><span class="message">Neque porro quisquam est, qui dolorem ipsum quia dolor sit...</span></a></li>
                                            <li><a href="#"><span class="avatar"><img src="http://api.randomuser.me/portraits/thumb/women/38.jpg" alt="" class="img-circle" /></span><span class="subject"><span class="from">Alice Walker</span><span class="time">2 hrs</span></span><span class="message">Neque porro quisquam est, qui dolorem ipsum quia dolor sit...</span></a></li>
                                            <li><a href="#"><span class="avatar"><img src="http://api.randomuser.me/portraits/thumb/women/10.jpg" alt="" class="img-circle" /></span><span class="subject"><span class="from">Isabelle Johnson</span><span class="time">4 hrs</span></span><span class="message">Neque porro quisquam est, qui dolorem ipsum quia dolor sit...</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="footer"><a href="inbox.html">See all messages<i class="icon-arrow-right"></i></a></li>
                                </ul>
                            </li>
                            <li class="dropdown dropdown-extra dropdown-notifications"><a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="icon-bell"></i><span class="badge pink">6</span></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <p>You have 14 new notifications</p>
                                    </li>
                                    <li>
                                        <ul class="dropdown-menu-list dropdown-scroller">
                                            <li><a href="#">Temporibus autem.
                                                    &nbsp;<span class="time">10 mins</span></a></li>
                                            <li><a href="#">Nam libero tempore.
                                                    &nbsp;<span class="time">25 mins</span></a></li>
                                            <li><a href="#">Ut enim ad minim veniam.
                                                    &nbsp;<span class="time">32 mins</span></a></li>
                                            <li><a href="#">Lorem ipsum dolor sit.
                                                    &nbsp;<span class="time">46 mins</span></a></li>
                                            <li><a href="#">Duis aute irure dolor.
                                                    &nbsp;<span class="time">1 hrs</span></a></li>
                                            <li><a href="#">Excepteur sint occaecat.
                                                    &nbsp;<span class="time">3 hrs</span></a></li>
                                            <li><a href="#">Nemo enim ipsam voluptatem.
                                                    &nbsp;<span class="time">5 hrs</span></a></li>
                                            <li><a href="#">Commodi consequatur?
                                                    &nbsp;<span class="time">7 hrs</span></a></li>
                                            <li><a href="#">Vel illum qui dolorem eum.
                                                    &nbsp;<span class="time">12 hrs</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="footer"><a href="#">See all notifications<i class="icon-arrow-right"></i></a></li>
                                </ul>
                            </li>
                            <li class="dropdown dropdown-extra dropdown-tasks"><a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="icon-clock"></i><span class="badge badge-success">9</span></a>
                                <ul class="dropdown-menu dropdown-tasks">
                                    <li>
                                        <p>You have 12 pending tasks</p>
                                    </li>
                                    <li>
                                        <ul class="dropdown-menu-list dropdown-scroller">
                                            <li><a href="#"><span class="task"><span class="desc">Application deployment</span><span class="percent">65%</span></span>
                                                    <div class="progress progress-xs">
                                                        <div role="progressbar" style="width: 65%;" class="progress-bar progress-bar-warning"><span class="sr-only">65% Complete</span></div>
                                                    </div>
                                                </a></li>
                                            <li><a href="#"><span class="task"><span class="desc">Database migration</span><span class="percent">85%</span></span>
                                                    <div class="progress progress-xs">
                                                        <div role="progressbar" style="width: 85%;" class="progress-bar progress-bar-success"><span class="sr-only">85% Complete</span></div>
                                                    </div>
                                                </a></li>
                                            <li><a href="#"><span class="task"><span class="desc">New release v1.1</span><span class="percent">90%</span></span>
                                                    <div class="progress progress-xs">
                                                        <div role="progressbar" style="width: 90%;" class="progress-bar progress-bar-orange"><span class="sr-only">90% Complete</span></div>
                                                    </div>
                                                </a></li>
                                            <li><a href="#"><span class="task"><span class="desc">Mobile app release</span><span class="percent">35%</span></span>
                                                    <div class="progress progress-xs">
                                                        <div role="progressbar" style="width: 35%;" class="progress-bar progress-bar-danger"><span class="sr-only">35% Complete</span></div>
                                                    </div>
                                                </a></li>
                                            <li><a href="#"><span class="task"><span class="desc">Mobile development</span><span class="percent">60%</span></span>
                                                    <div class="progress progress-xs">
                                                        <div role="progressbar" style="width: 60%;" class="progress-bar progress-bar-info"><span class="sr-only">60% Complete</span></div>
                                                    </div>
                                                </a></li>
                                            <li><a href="#"><span class="task"><span class="desc">New UI release</span><span class="percent">95%</span></span>
                                                    <div class="progress progress-xs">
                                                        <div role="progressbar" style="width: 95%;" class="progress-bar progress-bar-purple"><span class="sr-only">95% Complete</span></div>
                                                    </div>
                                                </a></li>
                                            <li><a href="#"><span class="task"><span class="desc">Web server upgrade</span><span class="percent">40%</span></span>
                                                    <div class="progress progress-xs">
                                                        <div role="progressbar" style="width: 40%;" class="progress-bar progress-bar-success"><span class="sr-only">40% Complete</span></div>
                                                    </div>
                                                </a></li>
                                        </ul>
                                    </li>
                                    <li class="footer"><a href="#">See all tasks<i class="icon-arrow-right"></i></a></li>
                                </ul>
                            </li>
                            <li class="dropdown dropdown-user menu-user"><a href="#" data-toggle="dropdown" class="dropdown-toggle"><img src="https://s3.amazonaws.com/uifaces/faces/twitter/liang/128.jpg" alt="User Image" class="img-circle" /><span class="hidden-xs">Alice Lane</span>&nbsp;<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="page_user_profile.html"><i class="icon-user"></i>My Profile</a></li>
                                    <li><a href="page_fullcalendar.html"><i class="icon-calendar"></i>My Calendar</a></li>
                                    <li><a href="email_inbox.html"><i class="icon-envelope-open"></i>My Inbox<span class="badge badge-primary">6</span></a></li>
                                    <li><a href="page_lockscreen.html"><i class="icon-lock"></i>Lock Screen</a></li>
                                    <li><a href="page_login.html"><i class="icon-key"></i>Log Out</a></li>
                                </ul>
                            </li>
                            <li class="hidden-xs hidden-sm"><a href="javascript:;" class="fullscreen-toggle"><i class="icon-size-fullscreen"></i></a></li>
                            <li class="hidden-xs"><a href="javascript:;" class="toggle-quick-sidebar"><i class="icon-settings"></i></a></li>
                        </ul> -->
                    </div>
                </nav>
            </header><!--END HEADER--><!--BEGIN HORIZONTAL SIDEBAR-->
            <div class="page-horizontal-sidebar hide">
                <div id="horizontal-sidebar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <!-- <li><a href="{{ route('DashboardUI')}}"><i class="icon-home"></i><span class="menu-title">Dashboard</span></a></li>
                        <li class="dropdown"><a href="#" data-hover="dropdown" class="dropdown-toggle"><i class="icon-layers"></i><span class="menu-title">Sidebar</span></a>
                            <ul class="dropdown-menu">
                                <li><a href="sidebar_left.html"><span class="submenu-title">Left Sidebar</span></a></li>
                                <li><a href="sidebar_right.html"><span class="submenu-title">Right Sidebar</span></a></li>
                                <li><a href="sidebar_horizontal.html"><span class="submenu-title">Horizontal Sidebar</span></a></li>
                                <li><a href="sidebar_left_closed.html"><span class="submenu-title">Left Closed Sidebar</span></a></li>
                                <li><a href="sidebar_right_closed.html"><span class="submenu-title">Right Closed Sidebar</span></a></li>
                            </ul>
                        </li> -->
                        <li class="dropdown"><a href="#" data-hover="dropdown" class="dropdown-toggle"><i class="icon-badge"></i><span class="menu-title">UI Elements</span><span class="badge pink">9</span></a>
                            <ul class="dropdown-menu">
                                <li><a href="ui_buttons.html"><span class="submenu-title">Buttons</span></a></li>
                                <li><a href="ui_components.html"><span class="submenu-title">Components</span></a></li>
                                <li><a href="ui_typography.html"><span class="submenu-title">Typography</span></a></li>
                                <li><a href="ui_modal_notification.html"><span class="submenu-title">Modals & Notifications</span></a></li>
                                <li><a href="ui_panels.html"><span class="submenu-title">Panels</span></a></li>
                                <li><a href="ui_tabs_accordions.html"><span class="submenu-title">Tabs & Accordions</span></a></li>
                                <li><a href="ui_grids.html"><span class="submenu-title">Grids</span></a></li>
                                <li><a href="ui_nestable.html"><span class="submenu-title">Nestable</span></a></li>
                                <li><a href="ui_treeview.html"><span class="submenu-title">Treeview</span></a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#" data-hover="dropdown" class="dropdown-toggle"><i class="icon-diamond"></i><span class="menu-title">Icon Sets</span></a>
                            <ul class="dropdown-menu">
                                <li><a href="icon_fontawesome.html"><span class="submenu-title">Font Awesome</span></a></li>
                                <li><a href="icon_simple_line_icon.html"><span class="submenu-title">Simple Line Icons</span></a></li>
                                <li><a href="icon_ionicons.html"><span class="submenu-title">Ionicons</span></a></li>
                                <li><a href="icon_social.html"><span class="submenu-title">Social Icons</span></a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#" data-hover="dropdown" class="dropdown-toggle"><i class="icon-puzzle"></i><span class="menu-title">Form Stuff</span></a>
                            <ul class="dropdown-menu">
                                <li><a href="form_controls.html"><span class="submenu-title">Form Controls</span></a></li>
                                <li><a href="form_plugins.html"><span class="submenu-title">Form Plugins</span></a></li>
                                <li><a href="form_select.html"><span class="submenu-title">Form Select</span></a></li>
                                <li><a href="form_layouts.html"><span class="submenu-title">Form Layouts</span></a></li>
                                <li><a href="form_validation.html"><span class="submenu-title">Form Validation</span></a></li>
                                <li><a href="form_wizard.html"><span class="submenu-title">Form Wizard</span></a></li>
                                <li><a href="form_editors.html"><span class="submenu-title">Form Editors</span></a></li>
                            </ul>
                        </li>
                        <li class="dropdown active"><a href="#" data-hover="dropdown" class="dropdown-toggle"><i class="icon-notebook"></i><span class="menu-title">Tables</span></a>
                            <ul class="dropdown-menu in">
                                <li><a href="table_basic.html"><span class="submenu-title">Basic Tables</span></a></li>
                                <li class="active"><a href="table_datatables.html"><span class="submenu-title">DataTables</span></a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#" data-hover="dropdown" class="dropdown-toggle"><i class="icon-book-open"></i><span class="menu-title">Pages</span></a>
                            <ul class="dropdown-menu">
                                <li><a href="page_coming_soon.html"><span class="submenu-title">Coming Soon</span></a></li>
                                <li><a href="page_invoice.html"><span class="submenu-title">Invoice</span></a></li>
                                <li><a href="page_user_profile.html"><span class="submenu-title">User Profile</span></a></li>
                                <li><a href="page_login.html"><span class="submenu-title">Login</span></a></li>
                                <li><a href="page_register.html"><span class="submenu-title">Register</span></a></li>
                                <li><a href="page_lockscreen.html"><span class="submenu-title">Lock Screen</span></a></li>
                                <li><a href="page_timeline.html"><span class="submenu-title">Timeline</span></a></li>
                                <li><a href="page_faq.html"><span class="submenu-title">FAQ</span></a></li>
                                <li><a href="page_search_results.html"><span class="submenu-title">Search Results</span></a></li>
                                <li><a href="page_fullcalendar.html"><span class="submenu-title">Full Calendar</span></a></li>
                                <li><a href="page_blank.html"><span class="submenu-title">Blank</span></a></li>
                                <li><a href="page_404_option1.html"><span class="submenu-title">404 Page Option 1</span></a></li>
                                <li><a href="page_404_option2.html"><span class="submenu-title">404 Page Option 2</span></a></li>
                                <li><a href="page_500_option1.html"><span class="submenu-title">500 Page Option 1</span></a></li>
                                <li><a href="page_500_option2.html"><span class="submenu-title">500 Page Option 2</span></a></li>
                                <li><a href="javascript:void(0)" title="FullScreen" class="btn-fullscreen">Full Screen</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#" data-hover="dropdown" class="dropdown-toggle"><i class="icon-graph"></i><span class="menu-title">Charts</span></a>
                            <ul class="dropdown-menu">
                                <li><a href="chart_flot.html"><span class="submenu-title">Flot Chart</span></a></li>
                                <li><a href="chart_others.html"><span class="submenu-title">Other Charts</span></a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#" data-hover="dropdown" class="dropdown-toggle"><i class="icon-envelope-open"></i><span class="menu-title">Email</span></a>
                            <ul class="dropdown-menu">
                                <li><a href="email_inbox.html"><span class="submenu-title">Inbox</span></a></li>
                                <li><a href="email_compose.html"><span class="submenu-title">Compose Mail</span></a></li>
                                <li><a href="email_view.html"><span class="submenu-title">View Mail</span></a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#" data-hover="dropdown" class="dropdown-toggle"><i class="icon-share"></i><span class="menu-title">Others</span></a>
                            <ul class="dropdown-menu">
                                <li><a href="email_templates.html"><span class="menu-title">Email Templates</span></a></li>
                                <li><a href="helper_classes.html"><span class="menu-title">Helper Classes</span></a></li>
                                <li><a href="helper_classes.html"><span class="menu-title">Animations</span></a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#" data-hover="dropdown" class="dropdown-toggle"><i class="icon-share"></i><span class="menu-title">Menu Level</span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><span class="submenu-title">Level 2</span></a></li>
                                <li class="dropdown-submenu"><a href="#" class="dropdown-toggle"><span class="submenu-title">Level 2</span><span class="arrow"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#"><span class="submenu-title">Level 3</span></a></li>
                                        <li><a href="#"><span class="submenu-title">Level 3</span></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div><!--END HORIZONTAL SIDEBAR--><!--BEGIN WRAPPER-->
            <div class="wrapper row-offcanvas row-offcanvas-left"><!--BEGIN SIDEBAR-->
                <aside class="page-sidebar sidebar-offcanvas">
                    <section class="sidebar">
                        <ul class="sidebar-menu">
                            <li><a href="{{ route('DashboardUI')}}"><i class="icon-home"></i><span class="sidebar-text">Dashboard</span></a></li>
                            <!--second-level">
                            <li><a href="la<li><a href="widgets.html"><i class="icon-rocket"></i><span class="sidebar-text">Widgets</span></a></li>
                            <li><a href="#"><i class="icon-grid"></i><span class="sidebar-text">Layout Options</span></a>
                                <ul class="nav nav-yout_fluid.html">Fluid</a></li>
                                    <li><a href="layout_boxed.html">Boxed</a></li>
                                    <li><a href="layout_full_width.html">Full Width</a></li>
                                </ul>
                            </li>
                            <li><a href="#"><i class="icon-layers"></i><span class="sidebar-text">Sidebar</span></a>
                                <ul class="nav nav-second-level">
                                    <li><a href="sidebar_left.html">Left Sidebar</a></li>
                                    <li><a href="sidebar_right.html">Right Sidebar</a></li>
                                    <li><a href="sidebar_horizontal.html">Horizontal Sidebar</a></li>
                                    <li><a href="sidebar_left_closed.html">Left Closed Sidebar</a></li>
                                    <li><a href="sidebar_right_closed.html">Right Closed Sidebar</a></li>
                                </ul>
                            </li>
                            <li><a href="#"><i class="icon-login"></i><span class="sidebar-text">Quick Sidebar</span></a>
                                <ul class="nav nav-second-level">
                                    <li><a href="quick_sidebar_push.html">Push Sidebar</a></li>
                                    <li><a href="quick_sidebar_content_push.html">Push Sidebar Content</a></li>
                                    <li><a href="quick_sidebar_content_over.html">Over Sidebar Content</a></li>
                                </ul>
                            </li>
                            <li><a href="#"><i class="icon-badge"></i><span class="sidebar-text">UI Elements</span></a>
                                <ul class="nav nav-second-level">
                                    <li><a href="ui_buttons.html">Buttons</a></li>
                                    <li><a href="ui_components.html">Components</a></li>
                                    <li><a href="ui_typography.html">Typography</a></li>
                                    <li><a href="ui_modal_notification.html">Modals & Notifications</a></li>
                                    <li><a href="ui_panels.html">Panels</a></li>
                                    <li><a href="ui_tabs_accordions.html">Tabs & Accordions</a></li>
                                    <li><a href="ui_grids.html">Grids</a></li>
                                    <li><a href="ui_nestable.html">Nestable</a></li>
                                    <li><a href="ui_treeview.html">Treeview</a></li>
                                </ul>
                            </li>
                            <li><a href="#"><i class="icon-diamond"></i><span class="sidebar-text">Icon Sets</span></a>
                                <ul class="nav nav-second-level">
                                    <li><a href="icon_fontawesome.html">Font Awesome</a></li>
                                    <li><a href="icon_simple_line_icon.html">Simple Line Icons</a></li>
                                    <li><a href="icon_ionicons.html">Ionicons</a></li>
                                    <li><a href="icon_social.html">Social Icons</a></li>
                                </ul>
                            </li>-->

                            <li class="active"><a href="#"><i class="icon-notebook"></i><span class="sidebar-text">Applicant Lists</span></a>
                                <!-- <ul class="nav nav-second-level in">
                                    <li><a href="table_basic.html">Basic Tables</a></li>
                                    <li class="active"><a href="table_datatables.html">DataTables</a></li>
                                </ul> -->
                            </li>

                            <li><a href="#"><i class="icon-puzzle"></i><span class="sidebar-text">Form Stuff</span></a>
                                <ul class="nav nav-second-level">
                                    <li><a href="form_controls.html">Form Controls</a></li>
                                </ul>
                            </li>

                            <!-- <li><a href="#"><i class="icon-book-open"></i><span class="sidebar-text">Pages</span></a>
                                <ul class="nav nav-second-level">
                                    <li><a href="page_coming_soon.html">Coming Soon</a></li>
                                    <li><a href="page_invoice.html">Invoice</a></li>
                                    <li><a href="page_user_profile.html">User Profile</a></li>
                                    <li><a href="page_login.html">Login</a></li>
                                    <li><a href="page_register.html">Register</a></li>
                                    <li><a href="page_lockscreen.html">Lock Screen</a></li>
                                    <li><a href="page_timeline.html">Timeline</a></li>
                                    <li><a href="page_faq.html">FAQ</a></li>
                                    <li><a href="page_search_results.html">Search Results</a></li>
                                    <li><a href="page_fullcalendar.html">Full Calendar</a></li>
                                    <li><a href="page_blank.html">Blank</a></li>
                                    <li><a href="page_404_option1.html">404 Page Option 1</a></li>
                                    <li><a href="page_404_option2.html">404 Page Option 2</a></li>
                                    <li><a href="page_500_option1.html">500 Page Option 1</a></li>
                                    <li><a href="page_500_option2.html">500 Page Option 2</a></li>
                                    <li><a href="javascript:void(0)" title="FullScreen" class="btn-fullscreen">Full Screen</a></li>
                                </ul>
                            </li>
                            <li><a href="#"><i class="icon-map"></i><span class="sidebar-text">Maps</span></a>
                                <ul class="nav nav-second-level">
                                    <li><a href="map_google.html">Google Maps</a></li>
                                    <li><a href="map_jvectormap.html">Vector Maps</a></li>
                                </ul>
                            </li>
                            <li><a href="#"><i class="icon-graph"></i><span class="sidebar-text">Charts</span></a>
                                <ul class="nav nav-second-level">
                                    <li><a href="chart_flot.html">Flot Chart</a></li>
                                    <li><a href="chart_others.html">Other Charts</a></li>
                                </ul>
                            </li> -->
                            <li><a href="#"><i class="icon-envelope-open"></i><span class="sidebar-text">Email</span></a>
                                <ul class="nav nav-second-level">
                                    <li><a href="email_inbox.html">Inbox</a></li>
                                    <li><a href="email_compose.html">Compose Mail</a></li>
                                    <li><a href="email_view.html">View Mail</a></li>
                                </ul>
                            </li>
                            <!-- <li><a href="email_templates.html"><i class="icon-envelope-letter"></i><span class="sidebar-text">Email Templates</span></a></li>
                            <li><a href="helper_classes.html"><i class="icon-support"></i><span class="sidebar-text">Helper Classes</span></a></li>
                            <li><a href="animations.html"><i class="icon-chemistry"></i><span class="sidebar-text">Animations</span></a></li>
                            <li><a href="#"><i class="icon-share"></i><span class="sidebar-text">Menu Levels</span></a>
                                <ul class="nav nav-second-level">
                                    <li><a href="#"><i class="icon-tag"></i><span class="sidebar-text">Second Level</span></a>
                                        <ul class="nav nav-third-level">
                                            <li><a href="#"><i class="icon-settings"></i><span class="sidebar-text">Third Level</span></a></li>
                                            <li><a href="#"><i class="icon-paper-clip"></i><span class="sidebar-text">Third Level</span></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#"><i class="icon-rocket"></i><span class="sidebar-text">Second Level</span></a>
                                        <ul class="nav nav-third-level">
                                            <li><a href="#"><i class="icon-playlist"></i><span class="sidebar-text">Third Level</span></a></li>
                                            <li><a href="#"><i class="icon-key"></i><span class="sidebar-text">Third Level</span></a></li>
                                            <li><a href="#"><i class="icon-puzzle"></i><span class="sidebar-text">Third Level</span></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#"><i class="icon-star"></i><span class="sidebar-text">Second Level</span></a>
                                        <ul class="nav nav-third-level">
                                            <li><a href="#"><i class="icon-camera"></i><span class="sidebar-text">Third Level</span></a></li>
                                            <li><a href="#"><i class="icon-music-tone-alt"></i><span class="sidebar-text">Third Level</span></a></li>
                                            <li><a href="#"><i class="icon-cloud-download"></i><span class="sidebar-text">Third Level</span></a></li>
                                            <li><a href="#"><i class="icon-umbrella"></i><span class="sidebar-text">Third Level</span></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li> -->
                        </ul>
                    </section>
                </aside><!--END SIDERBAR--><!--BEGIN CONTENT-->
                <div class="content">
                    <section class="content-header">
                        <h1 class="pull-left">List of Applicants<small>All records of current applicants</small></h1>
                        <div class="pull-right">
                            <ol class="breadcrumb">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Tables</a></li>
                                <li class="active">DataTables</li>
                            </ol>
                        </div>
                    </section>
                    <section class="main-content">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><strong class="text-uppercase text-success">Datatables</strong></h3>
                                    </div>
                                    <div class="panel-body">
                                        <table id="datatables" class="table table-striped table-no-border">
                                            <thead class="bg-default">
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Position</th>
                                                    <th>Office</th>
                                                    <th>Age</th>
                                                    <th>Start date</th>
                                                    <th>Salary</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tiger Nixon</td>
                                                    <td>System Architect</td>
                                                    <td>Edinburgh</td>
                                                    <td>61</td>
                                                    <td>2011/04/25</td>
                                                    <td>$320,800</td>
                                                </tr>
                                                <tr>
                                                    <td>Garrett Winters</td>
                                                    <td>Accountant</td>
                                                    <td>Tokyo</td>
                                                    <td>63</td>
                                                    <td>2011/07/25</td>
                                                    <td>$170,750</td>
                                                </tr>
                                                <tr>
                                                    <td>Ashton Cox</td>
                                                    <td>Junior Technical Author</td>
                                                    <td>San Francisco</td>
                                                    <td>66</td>
                                                    <td>2009/01/12</td>
                                                    <td>$86,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Cedric Kelly</td>
                                                    <td>Senior Javascript Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>22</td>
                                                    <td>2012/03/29</td>
                                                    <td>$433,060</td>
                                                </tr>
                                                <tr>
                                                    <td>Airi Satou</td>
                                                    <td>Accountant</td>
                                                    <td>Tokyo</td>
                                                    <td>33</td>
                                                    <td>2008/11/28</td>
                                                    <td>$162,700</td>
                                                </tr>
                                                <tr>
                                                    <td>Brielle Williamson</td>
                                                    <td>Integration Specialist</td>
                                                    <td>New York</td>
                                                    <td>61</td>
                                                    <td>2012/12/02</td>
                                                    <td>$372,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Herrod Chandler</td>
                                                    <td>Sales Assistant</td>
                                                    <td>San Francisco</td>
                                                    <td>59</td>
                                                    <td>2012/08/06</td>
                                                    <td>$137,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Rhona Davidson</td>
                                                    <td>Integration Specialist</td>
                                                    <td>Tokyo</td>
                                                    <td>55</td>
                                                    <td>2010/10/14</td>
                                                    <td>$327,900</td>
                                                </tr>
                                                <tr>
                                                    <td>Colleen Hurst</td>
                                                    <td>Javascript Developer</td>
                                                    <td>San Francisco</td>
                                                    <td>39</td>
                                                    <td>2009/09/15</td>
                                                    <td>$205,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Sonya Frost</td>
                                                    <td>Software Engineer</td>
                                                    <td>Edinburgh</td>
                                                    <td>23</td>
                                                    <td>2008/12/13</td>
                                                    <td>$103,600</td>
                                                </tr>
                                                <tr>
                                                    <td>Jena Gaines</td>
                                                    <td>Office Manager</td>
                                                    <td>London</td>
                                                    <td>30</td>
                                                    <td>2008/12/19</td>
                                                    <td>$90,560</td>
                                                </tr>
                                                <tr>
                                                    <td>Quinn Flynn</td>
                                                    <td>Support Lead</td>
                                                    <td>Edinburgh</td>
                                                    <td>22</td>
                                                    <td>2013/03/03</td>
                                                    <td>$342,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Charde Marshall</td>
                                                    <td>Regional Director</td>
                                                    <td>San Francisco</td>
                                                    <td>36</td>
                                                    <td>2008/10/16</td>
                                                    <td>$470,600</td>
                                                </tr>
                                                <tr>
                                                    <td>Haley Kennedy</td>
                                                    <td>Senior Marketing Designer</td>
                                                    <td>London</td>
                                                    <td>43</td>
                                                    <td>2012/12/18</td>
                                                    <td>$313,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Tatyana Fitzpatrick</td>
                                                    <td>Regional Director</td>
                                                    <td>London</td>
                                                    <td>19</td>
                                                    <td>2010/03/17</td>
                                                    <td>$385,750</td>
                                                </tr>
                                                <tr>
                                                    <td>Michael Silva</td>
                                                    <td>Marketing Designer</td>
                                                    <td>London</td>
                                                    <td>66</td>
                                                    <td>2012/11/27</td>
                                                    <td>$198,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Paul Byrd</td>
                                                    <td>Chief Financial Officer (CFO)</td>
                                                    <td>New York</td>
                                                    <td>64</td>
                                                    <td>2010/06/09</td>
                                                    <td>$725,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Gloria Little</td>
                                                    <td>Systems Administrator</td>
                                                    <td>New York</td>
                                                    <td>59</td>
                                                    <td>2009/04/10</td>
                                                    <td>$237,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Bradley Greer</td>
                                                    <td>Software Engineer</td>
                                                    <td>London</td>
                                                    <td>41</td>
                                                    <td>2012/10/13</td>
                                                    <td>$132,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Dai Rios</td>
                                                    <td>Personnel Lead</td>
                                                    <td>Edinburgh</td>
                                                    <td>35</td>
                                                    <td>2012/09/26</td>
                                                    <td>$217,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Jenette Caldwell</td>
                                                    <td>Development Lead</td>
                                                    <td>New York</td>
                                                    <td>30</td>
                                                    <td>2011/09/03</td>
                                                    <td>$345,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Yuri Berry</td>
                                                    <td>Chief Marketing Officer (CMO)</td>
                                                    <td>New York</td>
                                                    <td>40</td>
                                                    <td>2009/06/25</td>
                                                    <td>$675,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Caesar Vance</td>
                                                    <td>Pre-Sales Support</td>
                                                    <td>New York</td>
                                                    <td>21</td>
                                                    <td>2011/12/12</td>
                                                    <td>$106,450</td>
                                                </tr>
                                                <tr>
                                                    <td>Doris Wilder</td>
                                                    <td>Sales Assistant</td>
                                                    <td>Sidney</td>
                                                    <td>23</td>
                                                    <td>2010/09/20</td>
                                                    <td>$85,600</td>
                                                </tr>
                                                <tr>
                                                    <td>Angelica Ramos</td>
                                                    <td>Chief Executive Officer (CEO)</td>
                                                    <td>London</td>
                                                    <td>47</td>
                                                    <td>2009/10/09</td>
                                                    <td>$1,200,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Gavin Joyce</td>
                                                    <td>Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>42</td>
                                                    <td>2010/12/22</td>
                                                    <td>$92,575</td>
                                                </tr>
                                                <tr>
                                                    <td>Jennifer Chang</td>
                                                    <td>Regional Director</td>
                                                    <td>Singapore</td>
                                                    <td>28</td>
                                                    <td>2010/11/14</td>
                                                    <td>$357,650</td>
                                                </tr>
                                                <tr>
                                                    <td>Brenden Wagner</td>
                                                    <td>Software Engineer</td>
                                                    <td>San Francisco</td>
                                                    <td>28</td>
                                                    <td>2011/06/07</td>
                                                    <td>$206,850</td>
                                                </tr>
                                                <tr>
                                                    <td>Fiona Green</td>
                                                    <td>Chief Operating Officer (COO)</td>
                                                    <td>San Francisco</td>
                                                    <td>48</td>
                                                    <td>2010/03/11</td>
                                                    <td>$850,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Shou Itou</td>
                                                    <td>Regional Marketing</td>
                                                    <td>Tokyo</td>
                                                    <td>20</td>
                                                    <td>2011/08/14</td>
                                                    <td>$163,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Michelle House</td>
                                                    <td>Integration Specialist</td>
                                                    <td>Sidney</td>
                                                    <td>37</td>
                                                    <td>2011/06/02</td>
                                                    <td>$95,400</td>
                                                </tr>
                                                <tr>
                                                    <td>Suki Burks</td>
                                                    <td>Developer</td>
                                                    <td>London</td>
                                                    <td>53</td>
                                                    <td>2009/10/22</td>
                                                    <td>$114,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Prescott Bartlett</td>
                                                    <td>Technical Author</td>
                                                    <td>London</td>
                                                    <td>27</td>
                                                    <td>2011/05/07</td>
                                                    <td>$145,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Gavin Cortez</td>
                                                    <td>Team Leader</td>
                                                    <td>San Francisco</td>
                                                    <td>22</td>
                                                    <td>2008/10/26</td>
                                                    <td>$235,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Martena Mccray</td>
                                                    <td>Post-Sales support</td>
                                                    <td>Edinburgh</td>
                                                    <td>46</td>
                                                    <td>2011/03/09</td>
                                                    <td>$324,050</td>
                                                </tr>
                                                <tr>
                                                    <td>Unity Butler</td>
                                                    <td>Marketing Designer</td>
                                                    <td>San Francisco</td>
                                                    <td>47</td>
                                                    <td>2009/12/09</td>
                                                    <td>$85,675</td>
                                                </tr>
                                                <tr>
                                                    <td>Howard Hatfield</td>
                                                    <td>Office Manager</td>
                                                    <td>San Francisco</td>
                                                    <td>51</td>
                                                    <td>2008/12/16</td>
                                                    <td>$164,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Hope Fuentes</td>
                                                    <td>Secretary</td>
                                                    <td>San Francisco</td>
                                                    <td>41</td>
                                                    <td>2010/02/12</td>
                                                    <td>$109,850</td>
                                                </tr>
                                                <tr>
                                                    <td>Vivian Harrell</td>
                                                    <td>Financial Controller</td>
                                                    <td>San Francisco</td>
                                                    <td>62</td>
                                                    <td>2009/02/14</td>
                                                    <td>$452,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Timothy Mooney</td>
                                                    <td>Office Manager</td>
                                                    <td>London</td>
                                                    <td>37</td>
                                                    <td>2008/12/11</td>
                                                    <td>$136,200</td>
                                                </tr>
                                                <tr>
                                                    <td>Jackson Bradshaw</td>
                                                    <td>Director</td>
                                                    <td>New York</td>
                                                    <td>65</td>
                                                    <td>2008/09/26</td>
                                                    <td>$645,750</td>
                                                </tr>
                                                <tr>
                                                    <td>Olivia Liang</td>
                                                    <td>Support Engineer</td>
                                                    <td>Singapore</td>
                                                    <td>64</td>
                                                    <td>2011/02/03</td>
                                                    <td>$234,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Bruno Nash</td>
                                                    <td>Software Engineer</td>
                                                    <td>London</td>
                                                    <td>38</td>
                                                    <td>2011/05/03</td>
                                                    <td>$163,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Sakura Yamamoto</td>
                                                    <td>Support Engineer</td>
                                                    <td>Tokyo</td>
                                                    <td>37</td>
                                                    <td>2009/08/19</td>
                                                    <td>$139,575</td>
                                                </tr>
                                                <tr>
                                                    <td>Thor Walton</td>
                                                    <td>Developer</td>
                                                    <td>New York</td>
                                                    <td>61</td>
                                                    <td>2013/08/11</td>
                                                    <td>$98,540</td>
                                                </tr>
                                                <tr>
                                                    <td>Finn Camacho</td>
                                                    <td>Support Engineer</td>
                                                    <td>San Francisco</td>
                                                    <td>47</td>
                                                    <td>2009/07/07</td>
                                                    <td>$87,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Serge Baldwin</td>
                                                    <td>Data Coordinator</td>
                                                    <td>Singapore</td>
                                                    <td>64</td>
                                                    <td>2012/04/09</td>
                                                    <td>$138,575</td>
                                                </tr>
                                                <tr>
                                                    <td>Zenaida Frank</td>
                                                    <td>Software Engineer</td>
                                                    <td>New York</td>
                                                    <td>63</td>
                                                    <td>2010/01/04</td>
                                                    <td>$125,250</td>
                                                </tr>
                                                <tr>
                                                    <td>Zorita Serrano</td>
                                                    <td>Software Engineer</td>
                                                    <td>San Francisco</td>
                                                    <td>56</td>
                                                    <td>2012/06/01</td>
                                                    <td>$115,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Jennifer Acosta</td>
                                                    <td>Junior Javascript Developer</td>
                                                    <td>Edinburgh</td>
                                                    <td>43</td>
                                                    <td>2013/02/01</td>
                                                    <td>$75,650</td>
                                                </tr>
                                                <tr>
                                                    <td>Cara Stevens</td>
                                                    <td>Sales Assistant</td>
                                                    <td>New York</td>
                                                    <td>46</td>
                                                    <td>2011/12/06</td>
                                                    <td>$145,600</td>
                                                </tr>
                                                <tr>
                                                    <td>Hermione Butler</td>
                                                    <td>Regional Director</td>
                                                    <td>London</td>
                                                    <td>47</td>
                                                    <td>2011/03/21</td>
                                                    <td>$356,250</td>
                                                </tr>
                                                <tr>
                                                    <td>Lael Greer</td>
                                                    <td>Systems Administrator</td>
                                                    <td>London</td>
                                                    <td>21</td>
                                                    <td>2009/02/27</td>
                                                    <td>$103,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Jonas Alexander</td>
                                                    <td>Developer</td>
                                                    <td>San Francisco</td>
                                                    <td>30</td>
                                                    <td>2010/07/14</td>
                                                    <td>$86,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Shad Decker</td>
                                                    <td>Regional Director</td>
                                                    <td>Edinburgh</td>
                                                    <td>51</td>
                                                    <td>2008/11/13</td>
                                                    <td>$183,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Michael Bruce</td>
                                                    <td>Javascript Developer</td>
                                                    <td>Singapore</td>
                                                    <td>29</td>
                                                    <td>2011/06/27</td>
                                                    <td>$183,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Donna Snider</td>
                                                    <td>Customer Support</td>
                                                    <td>New York</td>
                                                    <td>27</td>
                                                    <td>2011/01/25</td>
                                                    <td>$112,000</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div><!--END CONTENT-->
            </div><!--END WRAPPER--><!--BEGIN PAGE QUICK SIDEBAR-->
            <div class="page-quick-sidebar-wrapper">
                <div class="page-quick-sidebar-content">
                    <div id="admin-setting">
                        <div class="admin-setting-content">
                            <ul class="admin-setting-list list-unstyled">
                                <li>
                                    <h4>Theme Colors</h4>
                                    <ul class="option theme-option list-unstyled list-inline">
                                        <li data-color="default" data-hover="tooltip" title="Dark" class="dark active"></li>
                                        <li data-color="blue" data-hover="tooltip" title="Blue" class="blue"></li>
                                        <li data-color="purple" data-hover="tooltip" title="Purple" class="purple"></li>
                                        <li data-color="brown" data-hover="tooltip" title="Brown" class="brown"></li>
                                        <li data-color="light" data-hover="tooltip" title="Light" class="light"></li>
                                    </ul>
                                </li>
                                <li>
                                    <h4>Layout</h4><select class="option layout-option form-control">
                                        <option value="fluid">Fluid</option>
                                        <option value="boxed">Boxed</option>
                                    </select>
                                </li>
                                <li>
                                    <h4>Header</h4><select class="option header-option form-control">
                                        <option value="fixed">Fixed</option>
                                        <option value="static">Static</option>
                                    </select>
                                </li>
                                <li>
                                    <h4>Sidebar</h4><select class="option sidebar-option form-control">
                                        <option value="fixed" selected="selected">Fixed</option>
                                        <option value="static">Static</option>
                                    </select>
                                </li>
                                <li>
                                    <h4>Sidebar Position</h4><select class="option sidebar-position-option form-control">
                                        <option value="fixed">Left</option>
                                        <option value="static">Right</option>
                                    </select>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!--END PAGE QUICK SIDEBAR-->
        </div>
    </div>
    <script src="global/js/jquery.js"></script>
    <script src="global/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="global/js/jquery-ui.js"></script>
    <script src="global/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.js"></script>
    <script src="global/js/html5shiv.js"></script>
    <script src="global/js/respond.min.js"></script>
    <script src="global/plugins/slimScroll/jquery.slimscroll.js"></script>
    <script src="global/plugins/iCheck/icheck.min.js"></script>
    <script src="global/plugins/iCheck/custom.min.js"></script>
    <script src="assets/plugins/jquery-metisMenu/jquery.menu.min.js"></script>
    <script src="assets/plugins/jquery.blockUI.js"></script>
    <script src="global/js/app.js"></script>
    <script src="assets/js/quick-sidebar.js"></script>
    <script src="assets/js/admin-setting.js"></script>
    <script src="assets/js/layout.js"></script>
    <script src="assets/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"></script>
    <script src="assets/js/table-datatables.js"></script>
</body>

</html>