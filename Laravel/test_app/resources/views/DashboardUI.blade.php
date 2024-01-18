<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard | Dashboard</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="description">
    <meta content="" name="author">
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400italic,400,300,700">
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Squada+One">
    <link type="text/css" rel="stylesheet" href="{{ asset('global/plugins/font-awesome/css/font-awesome.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('global/plugins/ionicons/css/ionicons.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('global/plugins/simple-line-icons/simple-line-icons.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('global/plugins/animate.css/animate.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('global/plugins/iCheck/skins/all.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/plugins/rickshaw/rickshaw.min.css') }}">

    <link type="text/css" rel="stylesheet" href="{{ asset('global/css/style.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/page-demo.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/style-admin.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/style-plugins.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/style-responsive.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/themes/default.css') }}" id="theme-color">
</head>

<body class="page-header-fixed page-sidebar-fixed">
    <div>
        <div class="page-wrapper"><!--BEGIN HEADER-->
            <header class="header">
                <div class="logo">
                    <a href="{{ route('DashboardUI')}}" class="logo-text">
                        <i class="ion-ios7-analytics">
                        </i>SRAM</a><a href="#" data-toggle="offcanvas" class="sidebar-toggle pull-right"><i
                            class="fa fa-bars"></i></a>
                </div>
                <nav role="navigation" class="navbar navbar-static-top">
                    <form action="#" class="search-form navbar-left hidden-xs">
                        <div class="input-icon right"><i class="icon-magnifier"></i><input type="text"
                                placeholder="Enter keyword" class="form-control input-circle input-dark" /></div>
                    </form>
                    <!-- <div class="navbar-right">
                        <ul class="nav navbar-nav">
                            <li class="dropdown dropdown-extra dropdown-messages"><a href="#" data-toggle="dropdown"
                                    class="dropdown-toggle"><i class="icon-envelope-open"></i><span
                                        class="badge badge-primary">4</span></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <p>You have 12 new messages</p>
                                    </li>
                                    <li>
                                        <ul class="dropdown-menu-list dropdown-scroller">
                                            <li><a href="#"><span class="avatar"><img
                                                            src="http://api.randomuser.me/portraits/thumb/men/68.jpg"
                                                            alt="" class="img-circle" /></span><span
                                                        class="subject"><span class="from">Teodor Macri</span><span
                                                            class="time">12 mins</span></span><span
                                                        class="message">Neque porro quisquam est, qui dolorem ipsum quia
                                                        dolor sit...</span></a></li>
                                            <li><a href="#"><span class="avatar"><img
                                                            src="http://api.randomuser.me/portraits/thumb/women/39.jpg"
                                                            alt="" class="img-circle" /></span><span
                                                        class="subject"><span class="from">Paula Aderca</span><span
                                                            class="time">21 mins</span></span><span
                                                        class="message">Neque porro quisquam est, qui dolorem ipsum quia
                                                        dolor sit...</span></a></li>
                                            <li><a href="#"><span class="avatar"><img
                                                            src="http://api.randomuser.me/portraits/thumb/men/60.jpg"
                                                            alt="" class="img-circle" /></span><span
                                                        class="subject"><span class="from">Pascal Aigner</span><span
                                                            class="time">1 hrs</span></span><span class="message">Neque
                                                        porro quisquam est, qui dolorem ipsum quia dolor
                                                        sit...</span></a></li>
                                            <li><a href="#"><span class="avatar"><img
                                                            src="http://api.randomuser.me/portraits/thumb/women/38.jpg"
                                                            alt="" class="img-circle" /></span><span
                                                        class="subject"><span class="from">Alice Walker</span><span
                                                            class="time">2 hrs</span></span><span class="message">Neque
                                                        porro quisquam est, qui dolorem ipsum quia dolor
                                                        sit...</span></a></li>
                                            <li><a href="#"><span class="avatar"><img
                                                            src="http://api.randomuser.me/portraits/thumb/women/10.jpg"
                                                            alt="" class="img-circle" /></span><span
                                                        class="subject"><span class="from">Isabelle Johnson</span><span
                                                            class="time">4 hrs</span></span><span class="message">Neque
                                                        porro quisquam est, qui dolorem ipsum quia dolor
                                                        sit...</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="footer"><a href="inbox.html">See all messages<i
                                                class="icon-arrow-right"></i></a></li>
                                </ul>
                            </li>
                            <li class="dropdown dropdown-user menu-user"><a href="#" data-toggle="dropdown"
                                    class="dropdown-toggle"><img
                                        src="https://s3.amazonaws.com/uifaces/faces/twitter/liang/128.jpg"
                                        alt="User Image" class="img-circle" /><span class="hidden-xs">Alice
                                        Lane</span>&nbsp;<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="page_user_profile.html"><i class="icon-user"></i>My Profile</a></li>
                                    <li><a href="page_fullcalendar.html"><i class="icon-calendar"></i>My Calendar</a>
                                    </li>
                                    <li><a href="email_inbox.html"><i class="icon-envelope-open"></i>My Inbox<span
                                                class="badge badge-primary">6</span></a></li>
                                    <li><a href="page_lockscreen.html"><i class="icon-lock"></i>Lock Screen</a></li>
                                    <li><a href="page_login.html"><i class="icon-key"></i>Log Out</a></li>
                                </ul>
                            </li>
                            <li class="hidden-xs hidden-sm"><a href="javascript:;" class="fullscreen-toggle"><i
                                        class="icon-size-fullscreen"></i></a></li>
                            <li class="hidden-xs"><a href="javascript:;" class="toggle-quick-sidebar"><i
                                        class="icon-settings"></i></a></li>
                        </ul> 
                    </div> -->
                </nav>
            </header><!--END HEADER--><!--BEGIN HORIZONTAL SIDEBAR-->
            <div class="page-horizontal-sidebar hide">
                <div id="horizontal-sidebar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="{{ route('DashboardUI')}}"><i class="icon-home"></i><span
                                    class="menu-title">Dashboard</span></a></li>
                        <li class="dropdown"><a href="#" data-hover="dropdown" class="dropdown-toggle"><i
                                    class="icon-layers"></i><span class="menu-title">Sidebar</span></a>
                            <ul class="dropdown-menu">
                                <li><a href="sidebar_left.html"><span class="submenu-title">Left Sidebar</span></a></li>
                                <li><a href="sidebar_right.html"><span class="submenu-title">Right Sidebar</span></a>
                                </li>
                                <li><a href="sidebar_horizontal.html"><span class="submenu-title">Horizontal
                                            Sidebar</span></a></li>
                                <li><a href="sidebar_left_closed.html"><span class="submenu-title">Left Closed
                                            Sidebar</span></a></li>
                                <li><a href="sidebar_right_closed.html"><span class="submenu-title">Right Closed
                                            Sidebar</span></a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#" data-hover="dropdown" class="dropdown-toggle"><i
                                    class="icon-badge"></i><span class="menu-title">UI Elements</span><span
                                    class="badge pink">9</span></a>
                            <ul class="dropdown-menu">
                                <li><a href="ui_buttons.html"><span class="submenu-title">Buttons</span></a></li>
                                <li><a href="ui_components.html"><span class="submenu-title">Components</span></a></li>
                                <li><a href="ui_typography.html"><span class="submenu-title">Typography</span></a></li>
                                <li><a href="ui_modal_notification.html"><span class="submenu-title">Modals &
                                            Notifications</span></a></li>
                                <li><a href="ui_panels.html"><span class="submenu-title">Panels</span></a></li>
                                <li><a href="ui_tabs_accordions.html"><span class="submenu-title">Tabs &
                                            Accordions</span></a></li>
                                <li><a href="ui_grids.html"><span class="submenu-title">Grids</span></a></li>
                                <li><a href="ui_nestable.html"><span class="submenu-title">Nestable</span></a></li>
                                <li><a href="ui_treeview.html"><span class="submenu-title">Treeview</span></a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#" data-hover="dropdown" class="dropdown-toggle"><i
                                    class="icon-diamond"></i><span class="menu-title">Icon Sets</span></a>
                            <ul class="dropdown-menu">
                                <li><a href="icon_fontawesome.html"><span class="submenu-title">Font Awesome</span></a>
                                </li>
                                <li><a href="icon_simple_line_icon.html"><span class="submenu-title">Simple Line
                                            Icons</span></a></li>
                                <li><a href="icon_ionicons.html"><span class="submenu-title">Ionicons</span></a></li>
                                <li><a href="icon_social.html"><span class="submenu-title">Social Icons</span></a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#" data-hover="dropdown" class="dropdown-toggle"><i
                                    class="icon-puzzle"></i><span class="menu-title">Form Stuff</span></a>
                            <ul class="dropdown-menu">
                                <li><a href="form_controls.html"><span class="submenu-title">Form Controls</span></a>
                                </li>
                                <li><a href="form_plugins.html"><span class="submenu-title">Form Plugins</span></a></li>
                                <li><a href="form_select.html"><span class="submenu-title">Form Select</span></a></li>
                                <li><a href="form_layouts.html"><span class="submenu-title">Form Layouts</span></a></li>
                                <li><a href="form_validation.html"><span class="submenu-title">Form
                                            Validation</span></a></li>
                                <li><a href="form_wizard.html"><span class="submenu-title">Form Wizard</span></a></li>
                                <li><a href="form_editors.html"><span class="submenu-title">Form Editors</span></a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#" data-hover="dropdown" class="dropdown-toggle"><i
                                    class="icon-notebook"></i><span class="menu-title">Tables</span></a>
                            <ul class="dropdown-menu">
                                <li><a href="table_basic.html"><span class="submenu-title">Basic Tables</span></a></li>
                                <li><a href="table_datatables.html"><span class="submenu-title">DataTables</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#" data-hover="dropdown" class="dropdown-toggle"><i
                                    class="icon-book-open"></i><span class="menu-title">Pages</span></a>
                            <ul class="dropdown-menu">
                                <li><a href="page_coming_soon.html"><span class="submenu-title">Coming Soon</span></a>
                                </li>
                                <li><a href="page_invoice.html"><span class="submenu-title">Invoice</span></a></li>
                                <li><a href="page_user_profile.html"><span class="submenu-title">User Profile</span></a>
                                </li>
                                <li><a href="page_login.html"><span class="submenu-title">Login</span></a></li>
                                <li><a href="page_register.html"><span class="submenu-title">Register</span></a></li>
                                <li><a href="page_lockscreen.html"><span class="submenu-title">Lock Screen</span></a>
                                </li>
                                <li><a href="page_timeline.html"><span class="submenu-title">Timeline</span></a></li>
                                <li><a href="page_faq.html"><span class="submenu-title">FAQ</span></a></li>
                                <li><a href="page_search_results.html"><span class="submenu-title">Search
                                            Results</span></a></li>
                                <li><a href="page_fullcalendar.html"><span class="submenu-title">Full
                                            Calendar</span></a></li>
                                <li><a href="page_blank.html"><span class="submenu-title">Blank</span></a></li>
                                <li><a href="page_404_option1.html"><span class="submenu-title">404 Page Option
                                            1</span></a></li>
                                <li><a href="page_404_option2.html"><span class="submenu-title">404 Page Option
                                            2</span></a></li>
                                <li><a href="page_500_option1.html"><span class="submenu-title">500 Page Option
                                            1</span></a></li>
                                <li><a href="page_500_option2.html"><span class="submenu-title">500 Page Option
                                            2</span></a></li>
                                <li><a href="javascript:void(0)" title="FullScreen" class="btn-fullscreen">Full
                                        Screen</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#" data-hover="dropdown" class="dropdown-toggle"><i
                                    class="icon-graph"></i><span class="menu-title">Charts</span></a>
                            <ul class="dropdown-menu">
                                <li><a href="chart_flot.html"><span class="submenu-title">Flot Chart</span></a></li>
                                <li><a href="chart_others.html"><span class="submenu-title">Other Charts</span></a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#" data-hover="dropdown" class="dropdown-toggle"><i
                                    class="icon-envelope-open"></i><span class="menu-title">Email</span></a>
                            <ul class="dropdown-menu">
                                <li><a href="email_inbox.html"><span class="submenu-title">Inbox</span></a></li>
                                <li><a href="email_compose.html"><span class="submenu-title">Compose Mail</span></a>
                                </li>
                                <li><a href="email_view.html"><span class="submenu-title">View Mail</span></a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#" data-hover="dropdown" class="dropdown-toggle"><i
                                    class="icon-share"></i><span class="menu-title">Others</span></a>
                            <ul class="dropdown-menu">
                                <li><a href="email_templates.html"><span class="menu-title">Email Templates</span></a>
                                </li>
                                <li><a href="helper_classes.html"><span class="menu-title">Helper Classes</span></a>
                                </li>
                                <li><a href="helper_classes.html"><span class="menu-title">Animations</span></a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#" data-hover="dropdown" class="dropdown-toggle"><i
                                    class="icon-share"></i><span class="menu-title">Menu Level</span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><span class="submenu-title">Level 2</span></a></li>
                                <li class="dropdown-submenu"><a href="#" class="dropdown-toggle"><span
                                            class="submenu-title">Level 2</span><span class="arrow"></span></a>
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
                            <li class="active"><a href="{{ route('DashboardUI')}}"><i class="icon-home"></i><span
                                        class="sidebar-text">Dashboard</span></a></li>

                            <li><a href="{{ route('ApplicantLists')}}"><i class="icon-notebook"></i><span
                                        class="sidebar-text">Applicant Lists</span></a></li>

                            <!-- <li><a href="#"><i class="icon-grid"></i><span class="sidebar-text">Layout
                                        Options</span></a>
                                <ul class="nav nav-second-level">
                                    <li><a href="layout_fluid.html">Fluid</a></li>
                                    <li><a href="layout_boxed.html">Boxed</a></li>
                                    <li><a href="layout_full_width.html">Full Width</a></li>
                                </ul>
                            </li> -->
                            <li><a href="#"><i class="icon-puzzle"></i><span class="sidebar-text">Form Stuff</span></a>
                                <ul class="nav nav-second-level">
                                    <li><a href="form_controls.html">Form Controls</a></li>
                                    <!-- <li><a href="form_plugins.html">Form Plugins</a></li>
                                    <li><a href="form_select.html">Form Select</a></li>
                                    <li><a href="form_layouts.html">Form Layouts</a></li>
                                    <li><a href="form_validation.html">Form Validation</a></li>
                                    <li><a href="form_wizard.html">Form Wizard</a></li>
                                    <li><a href="form_editors.html">Form Editors</a></li> -->
                                </ul>
                            </li>
                            <li><a href="#"><i class="icon-envelope-open"></i><span
                                        class="sidebar-text">Email</span></a>
                                <ul class="nav nav-second-level">
                                    <li><a href="email_inbox.html">Inbox</a></li>
                                    <li><a href="email_compose.html">Compose Mail</a></li>
                                    <li><a href="email_view.html">View Mail</a></li>
                                </ul>
                            </li>
                        </ul>
                    </section>
                </aside><!--END SIDERBAR--><!--BEGIN CONTENT-->
                <div class="content">
                    <section class="content-header">
                        <h1 class="pull-left">Admin Dashboard<small>Registration, Admissions and Checking of Students</small></h1>
                        <div class="pull-right">
                            <ol class="breadcrumb">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Dashboard</a></li>
                                <li class="active">Dashboard</li>
                            </ol>
                        </div>
                    </section>
                    <section class="main-content">
                        <div class="row">
                            <div class="col-md-12 col-sm-20">
                                <div class="panel panel-stat stat-primary">
                                    <div class="panel-body">
                                        <div class="row mbxl">
                                            <!-- <div class="BackgroundPicture">
                                                <img src="global/images/social/ket.jpg" class="inline-block">
                                                <style>
                                                    .BackgroundPicture{
                                                        position: relative;
                                                        opacity: 50%;
                                                        padding: 25px;
                                                    }
                                                </style>
                                            </div> -->
                                            <div class="col-xs-8"><span class="stat-title">Registrations for this Semester</span>
                                                <h2 class="man">118</h2>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-6"><span class="stat-title">New Visitors</span>
                                                <h4 class="man">46.5%</h4>
                                            </div>
                                            <div class="col-xs-6"><span class="stat-title">Bounce Rate</span>
                                                <h4 class="man">3.7%</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="panel-heading">
                            <h3 class="panel-title"><strong class="text-uppercase text-info">Alerts</strong>
                            </h3>
                        </div>
                        <div class="panel-body">
                            <div class="alert alert-success alert-dismissable fade in"><button type="button"
                                    data-dismiss="alert" aria-hidden="true"
                                    class="close">&times;</button><strong>Complete!</strong> There are no current on-going
                                    registrations or admissions to be evaluated.
                            </div> -->
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title"><strong class="text-uppercase text-info">Functions</strong>
                                </h3>
                            </div>
                                <div class="panel-body">
                                    <div class="alert alert-success alert-dismissable fade in"><button type="button"
                                            data-dismiss="alert" aria-hidden="true"
                                            class="close">&times;</button><strong>Complete!</strong> There are no current on-going
                                            registrations or admissions to be evaluated.
                                    </div>
                            <!-- <div class="panel-heading">
                                <h3 class="panel-title"><strong
                                        class="text-uppercase text-danger">Notes</strong></h3>
                            </div> -->
                            <div class="panel-body">
                                <div class="row-button">
                                    <div class="note note-primary">
                                        <h4><b>Student Admissions</b></h4>
                                        <p>Nisi erat mattis consectetur purus sit amet porttitor ligula, eget
                                            lacinia odio sem nec elit. Cras mattis consectetur purus sit amet
                                            fermentum.</p>
                                        <div class="btn-demo"><button type="button"
                                            class="btn btn-default">Edit</button>
                                        </div>
                                    </div>
                                <div class="note note-success">
                                    <h4><b>Registrations</b></h4>
                                    <p>Nisi erat mattis consectetur purus sit amet porttitor ligula, eget
                                        lacinia odio sem nec elit. Cras mattis consectetur purus sit amet
                                        fermentum.</p>
                                    <div class="btn-demo"><button type="button"
                                        class="btn btn-default">Edit</button>
                                    </div>
                                </div>
                                <div class="note note-info">
                                    <h4><b>Student Masterlist</b></h4>
                                    <p>Nisi erat mattis consectetur purus sit amet porttitor ligula, eget
                                        lacinia odio sem nec elit. Cras mattis consectetur purus sit amet
                                        fermentum.</p>
                                    <div class="btn-demo"><button type="button"
                                        class="btn btn-default">Edit</button>
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
                                        <li data-color="default" data-hover="tooltip" title="Dark" class="dark active">
                                        </li>
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
                                    <h4>Sidebar Position</h4><select
                                        class="option sidebar-position-option form-control">
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
    <script src="assets/plugins/flot-chart/jquery.flot.js"></script>
    <script src="assets/plugins/flot-chart/jquery.flot.animator.min.js"></script>
    <script src="assets/plugins/flot-chart/jquery.flot.resize.min.js"></script>
    <script src="assets/plugins/flot-chart/jquery.flot.time.min.js"></script>
    <script src="assets/plugins/rickshaw/vendor/d3.v3.js"></script>
    <script src="assets/plugins/rickshaw/src/js/Rickshaw.js"></script>
    <script src="assets/plugins/rickshaw/src/js/Rickshaw.Class.js"></script>
    <script src="assets/plugins/rickshaw/src/js/Rickshaw.Compat.ClassList.js"></script>
    <script src="assets/plugins/rickshaw/src/js/Rickshaw.Graph.js"></script>
    <script src="assets/plugins/rickshaw/src/js/Rickshaw.Graph.Renderer.js"></script>
    <script src="assets/plugins/rickshaw/src/js/Rickshaw.Graph.Renderer.Area.js"></script>
    <script src="assets/plugins/rickshaw/src/js/Rickshaw.Graph.HoverDetail.js"></script>
    <script src="assets/plugins/rickshaw/src/js/Rickshaw.Graph.Legend.js"></script>
    <script src="assets/plugins/rickshaw/src/js/Rickshaw.Fixtures.RandomData.js"></script>
    <script src="assets/plugins/rickshaw/extensions.js"></script>
    <script src="assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="assets/js/index.js"></script>
</body>

</html>