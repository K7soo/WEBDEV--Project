<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin | Applicant List</title>
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
    <link type="text/css" rel="stylesheet" href= "{{ asset('global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css')}}">

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
                <div class="logo"><a href="{{ route('ApplicantLists')}}" class="logo-text">
                    <i></i> SRAM </a>
                    <a href="#" data-toggle="offcanvas" class="sidebar-toggle pull-right"><i class="fa fa-bars"></i></a>
                </div>
                <nav role="navigation" class="navbar navbar-static-top">
                    <form action="#" class="search-form navbar-left hidden-xs">
                        <div class="input-icon right"><i class="icon-magnifier"></i><input type="text"
                                placeholder="Enter keyword" class="form-control input-circle input-dark" />
                        </div>
                    </form>
                </div>
            </div><!--END HORIZONTAL SIDEBAR--><!--BEGIN WRAPPER-->

            <div class="wrapper row-offcanvas row-offcanvas-left"><!--BEGIN SIDEBAR-->
                <aside class="page-sidebar sidebar-offcanvas">
                    <section class="sidebar">

                        <ul class="sidebar-menu">
                            <li><a href="{{ route('DashboardUI')}}"><i class="icon-home"></i>
                                <span class="sidebar-text">Dashboard</span></a></li>
                            
                            <li class="active"><a href="#"><i class="icon-notebook"></i>
                                <span class="sidebar-text">Applicant Lists</span></a></li>

                            <li><a href="{{ route('CourseList')}}"><i class="icon-notebook">
                                </i><span class="sidebar-text">Course List</span></a></li>

                                <li><a href="{{ route('Registration')}}"><i class="icon-notebook"></i><span
                                        class="sidebar-text">Registrations</span></a></li>

                            <li><a href="#"><i class="icon-puzzle"></i><span class="sidebar-text">Form Stuff</span></a>
                                <ul class="nav nav-second-level"><li><a href="form_controls.html">Form Controls</a></li>
                                </ul>
                            </li>

                            <li><a href="#"><i class="icon-envelope-open"></i><span class="sidebar-text">Email</span></a>
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
                        <h1 class="pull-left">Applicant List</h1>
                        <div class="pull-right">
                            <ol class="breadcrumb">
                                <li><a href="#">SRAM</a></li>
                                <li><a href="#">Dashboard</a></li>
                                <li class="active">Applicant List</li>
                            </ol>
                        </div>
                    </section>
                    <section class="main-content">
                        <div class="row">
                            <div class="col-md-12">

                                <div class="panel">

                                    <div class="panel-heading">

                                        <div class="listpanel">
                                            <b><u><button type="button"
                                                class="btn btn-link"> View Requirements</button></u></b>
                                            <button type="button"
                                                class="btn btn-primary"> Create Application
                                            </button>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 mb-0">
                                                <div class="note note-primary">
                                                    <b><h4>100</h4>
                                                    <p>All</p></b>
                                                </div>
                                            </div>

                                            <div class="col-md-6 mb-0">
                                                <div class="note note-success">
                                                    <b><h4>23</h4>
                                                    <p>For Interview</p></b>
                                                </div>
                                            </div>

                                            <div class="col-md-6 mb-0">
                                                <div class="note note-info">
                                                    <b><h4>75</h4>
                                                    <p>Accepted</p></b>
                                                </div>
                                            </div>

                                            <div class="col-md-6 mb-0">
                                                 <div class="note note-warning">
                                                     <b><h4 class="box-heading">37</h4>
                                                     <p>Rejected</p></b>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <!-- Table for applicants -->
                                    <div class="panel-body">
                                        <table id="datatables" class="table table-responsive table-striped table-bordered table-hover" >
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Last Name</th>
                                                    <th>First Name</th>
                                                    <th>Middle Name</th>
                                                    <th>Suffix</th>
                                                    <th>Email</th>
                                                    <th>Gender</th>
                                                    <th>AppChoiceID</th>
                                                    <th>AppTypeID</th>
                                                    <th>ApprovalID</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($applicants as $applicant)
                                                <tr>
                                                    <td>{{ $applicant->ApplicantID }}</td>
                                                    <td>{{ $applicant->AppLastName }}</td>
                                                    <td>{{ $applicant->AppFirstName }}</td>
                                                    <td>{{ $applicant->AppMiddleName }}</td>
                                                    <td>{{ $applicant->Suffix }}</td>
                                                    <td>{{ $applicant->Email }}</td>
                                                    <td>{{ $applicant->Gender }}</td>
                                                    <td>{{ $applicant->ApplicantChoiceID }}</td>
                                                    <td>{{ $applicant->ApplicantTypeID }}</td>
                                                    <td>{{ $applicant->ApprovalID }}</td>

                                                    <td>
                                                        
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                
                                    </div>
                                        <div>
                                        <h3 class="panel-title"></h3>
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

    <!-- Scripts -->
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