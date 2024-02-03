<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin | Registration</title>

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

                <div class="logo"><a href="{{ route('DashboardUI')}}" class="logo-text"><i></i>SRAM</a><a href="#" data-toggle="offcanvas" class="sidebar-toggle pull-right"><i class="fa fa-bars"></i></a>
                </div>

                <nav role="navigation" class="navbar navbar-static-top">
                    <div class="navbar-right">
                        <ul class="nav navbar-nav">
                            <li class="dropdown dropdown-user menu-user">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                                    <img src="global/images/PHP/account icon.png" alt="User Image" class="img-circle"/>
                                        <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="page_user_profile.html"><i class="icon-user"></i>My Profile</a></li>
                                    <li><a href="page_login.html"><i class="icon-key"></i>Log Out</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header><!--END HEADER--><!--BEGIN HORIZONTAL SIDEBAR-->

            <!--END HORIZONTAL SIDEBAR--><!--BEGIN WRAPPER-->

            <div class="wrapper row-offcanvas row-offcanvas-left"><!--BEGIN SIDEBAR-->
                <aside class="page-sidebar sidebar-offcanvas">
                    <section class="sidebar">

                        <ul class="sidebar-menu">

                            <li><a href="{{ route('DashboardUI')}}"><i class="icon-home"></i><span class="sidebar-text">Dashboard</span></a></li>

                            <li><a href="{{ route('ApplicantLists')}}"><i class="icon-notebook"></i><span class="sidebar-text">Applicant Lists</span></a></li>

                            <li><a href="{{ route('CourseList')}}"><i class="icon-notebook"></i><span class="sidebar-text">Course List</span></a></li>

                            <li class="active"><a href=#><i class="icon-notebook"></i><span class="sidebar-text">Registrations</span></a></li>

                            <li><a href="{{ route('Admission')}}"><i class="icon-notebook"></i><span class="sidebar-text">Admission</span></a></li>
                        </ul>
                    </section>
                </aside><!--END SIDERBAR--><!--BEGIN CONTENT-->

            <div class="content">

                <section class="content-header">
                    <h1 class="pull-left">Lists of Registered Applicants<small>View Registrations</small></h1>
                    <div class="pull-right">
                        <ol class="breadcrumb">

                        </ol>
                    </div>
                </section>

                <section class="main-content">
                    <div class="row">

                        <div class="panel-heading">
                            <div class="row">
                                <div class="col col-lg-12 col-md-12">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            <h3 class="panel-title"><strong class="text-uppercase">Registered Applicants</strong></h3>
                                        </div>

                                        <div class="panel">
                                            <div class="panel-body">
                                                <div class="col-12">
                                                    <table class="table table-bordered" id="table1">
                                                        <thead>
                                                            <tr>
                                                                <th style="text-align:center;">Student Number</th>
                                                                <th style="text-align:center;">Name</th>
                                                                <th style="text-align:center;">Preferred Course</th>
                                                                <th style="text-align:center;">Approval</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td style="text-align:center;">2024-01</td>
                                                                <td>Baledoya, Kyla Keith F.</td>
                                                                <td>BSIT</td>
                                                                <td>PENDING</td>
                                                                <td style="text-align:center;"><a href="file:///C:/HTML/Rock/page_blank.html" class="btn btn-sm btn-primary">View</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align:center;">2024-02</td>
                                                                <td>Ballera, Jefferson F.</td>
                                                                <td>BSIT</td>
                                                                <td>PENDING</td>
                                                                <td style="text-align:center;"><a href="https://survey.pup.edu.ph/apps/ofes/survey/32021-00389-CM-0/106/1a1f04d1c68c53f186fe66010f262c2145988c4e" class="btn btn-sm btn-primary">View</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align:center;">2024-03</td>
                                                                <td>Domingo, Kirsten Charles</td>
                                                                <td>BSIT</td>
                                                                <td>PENDING</td>
                                                                <td style="text-align:center;"><a href="https://survey.pup.edu.ph/apps/ofes/survey/12021-00389-CM-0/106/452405be4697445340cdfbd8d4e545f142c6ac0a" class="btn btn-sm btn-primary">View</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align:center;">2024-04</td>
                                                                <td>Silvestre, Matillano Jr.</td>
                                                                <td>BSIT</td>
                                                                <td>PENDING</td>
                                                                <td style="text-align:center;"><a href="https://survey.pup.edu.ph/apps/ofes/survey/82021-00389-CM-0/106/f15b62616c775357120355a0b82dce13b622e4f4" class="btn btn-sm btn-primary">View</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align:center;">2024-05</td>
                                                                <td>Servas, Shane Steven</td>
                                                                <td>BSIT</td>
                                                                <td>PENDING</td>
                                                                <td style="text-align:center;"><a href="https://survey.pup.edu.ph/apps/ofes/survey/62021-00389-CM-0/106/565ccba41d2f876aadace9890fe0e18b5bd2e24c" class="btn btn-sm btn-primary">View</a></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            
                                        </div>
                                    </div>
                                </div>    
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
        
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
                                <li data-color="blue" data-hover="tooltip" title="Blue" class="blue">
                                </li>
                                <li data-color="purple" data-hover="tooltip" title="Purple" class="purple"></li>
                                <li data-color="brown" data-hover="tooltip" title="Brown" class="brown">
                                </li>
                                <li data-color="light" data-hover="tooltip" title="Light" class="light">
                                </li>
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
</body>

</html>