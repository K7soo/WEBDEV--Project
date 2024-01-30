<!DOCTYPE html>
<html lang="en">

<head>
    <title>Student | Pre Qualifications</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="description">
    <meta content="" name="author">
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400italic,400,300,700">
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Squada+One">
    <link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
                <nav role="navigation" class="navbar navbar-static-top">
                </nav>
            </header>
            
            <!--BEGIN WRAPPER-->
            <div class="wrapper row-offcanvas row-offcanvas-left"><!--BEGIN SIDEBAR-->
                <aside class="page-sidebar sidebar-offcanvas">
                    <section class="sidebar">
                        <!-- Sidebar with routes to different web pages -->
                        <ul class="sidebar-menu">

                            <li class="active"><a href="#"><i class="icon-home"></i><span
                                        class="sidebar-text">Home Page</span></a></li>
                                </ul>
                            </li>

                        </ul>
                    </section>
                </aside>
                <!--END SIDERBAR--><!--BEGIN CONTENT-->
                <div class="content">
                    <section class="content-header">
                        <h1 class="pull-left">Registration</h1>
                        <div class="pull-right">
                            <ol class="breadcrumb">
                                <li><a href="#">Home</a></li>
                                <li><a href="active">Home Page</a></li>
                            </ol>
                        </div>
                    </section>
                    
                    <section class="main-content">
                        <div class="row">
                            <div class="col-md-10">
                                <div class="panel">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><strong
                                             class="text-uppercase text-success">Personal Information</strong></h3>
                                    </div>
                                    <div class="panel-body">
                                        <form action="#" class="form-horizontal">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <input type="text" placeholder="Surname" class="form-control" />
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-3"><input type="text" placeholder="First name"
                                                            class="form-control" />
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-1"><input type="text" placeholder="M.I."
                                                                class="form-control" />
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-md-1"><input type="text" placeholder="Ext."
                                                                    class="form-control" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-md-3">
                                                    <div class="input-group"><input id="daterangepicker_single"
                                                            type="text" value="Date Of Birth"
                                                            class="form-control" /><span class="input-group-addon"><i
                                                                class="icon-calendar"></i></span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-1 control-label">Gender</label>
                                                    <div class="col-md-4">
                                                        <label class="radio-inline">
                                                            <input type="radio" name="gender" value="0" checked />Male
                                                        </label>
                                                        <label class="radio-inline">
                                                            <input type="radio" name="gender" value="1" />Female
                                                        </label>
                                                        <label class="radio-inline">
                                                            <input type="radio" name="gender" value="2" />Others
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-2"><input type="text" placeholder="Birth of Place"
                                                        class="form-control" /></div>
                                                <div class="form-group">
                                                    <div class="col-md-3"><input type="text" placeholder="Nationality"
                                                            class="form-control" /></div>
                                                    <div class="form-group">
                                                        <div class="col-md-3"><select name="color" class="form-control">
                                                                <option value="">Status</option>
                                                                <option value="blue">Single</option>
                                                                <option value="green">Married</option>
                                                                <option value="red">Divorced</option>
                                                                <option value="yellow">Others</option>
                                                            </select></div>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <div class="panel">
                                                            <div class="panel-heading">
                                                                <h3 class="panel-title"><strong
                                                                        class="text-uppercase text-success">Contact
                                                                        Information</strong></h3>
                                                            </div>
                                                            <div class="form-group"></div>
                                                            <div class="col-md-6"><input type="text"
                                                                    placeholder="Home Address" class="form-control" />
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-md-4"><input type="text"
                                                                        placeholder="Street" class="form-control" />
                                                                </div>
                                                            </div>
                                                            <div class="form-group"></div>
                                                            <div class="col-md-4"><input type="text" placeholder="City"
                                                                    class="form-control" />
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-md-4"><input type="text"
                                                                        placeholder="State/Province"
                                                                        class="form-control" /></div>
                                                                <div class="form-group">
                                                                    <div class="col-md-2"><input type="text"
                                                                            placeholder="ZIP Code"
                                                                            class="form-control" /></div>
                                                                    <div class="form-group"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-5"><input type="text"
                                                                    placeholder="Phone Number" class="form-control" />
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-md-5"><input type="text"
                                                                        placeholder="Email Address"
                                                                        class="form-control" /></div>
                                                            <div class="col-md-10">
                                                                <div class="panel">
                                                                    <div class="panel-heading">
                                                                        <h3 class="panel-title"><strong
                                                                                class="text-uppercase text-success">Educational Background</strong></h3>
                                                                    </div>
                                                                    <div class="form-group"></div>
                                                                    <div class="col-md-6"><input type="text"
                                                                            placeholder="Previous School Name"
                                                                            class="form-control" />
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <div class="col-md-4"><input type="text"
                                                                                placeholder="Year Graduated"
                                                                                class="form-control" /></div>
                                                                    </div>
                                                                        <div class="form-group"></div>
                                                                        <div class="col-md-5"><select name="color" class="form-control">
                                                                            <option value="">Current Educational Level</option>
                                                                            <option value="blue">Freshmman</option>
                                                                            <option value="green">College/Tertiary</option>
                                                                            <option value="red">Masteral</option>
                                                                            <option value="yellow">Transferee</option>
                                                                        </select></div>
                                                            <div class="form-group">
                                                                <div class="col-md-4"><input type="text"
                                                                        placeholder="Number of Units" class="form-control" />
                                                                </div>
                                                                <div class="col-md-10">
                                                                    <div class="panel">
                                                                        <div class="panel-heading">
                                                                            <h3 class="panel-title"><strong
                                                                                    class="text-uppercase text-success">Parent/Guardian Information</strong></h3>
                                                                        </div>
                                                                        <div class="form-group"></div>
                                                            <div class="col-md-5"><input type="text" placeholder="Father's Name"
                                                                    class="form-control" />
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-md-4"><input type="text"
                                                                        placeholder="Number"
                                                                        class="form-control" /></div>
                                                                <div class="form-group">
                                                                    <div class="col-md-3"><input type="text"
                                                                            placeholder="Work"
                                                                            class="form-control" /></div>
                                                                    <div class="form-group"></div>
                                                                </div>
                                                            </div>
                                                                <div class="form-group"></div>
                                                            <div class="col-md-5"><input type="text" placeholder="Mother's Name"
                                                                    class="form-control" />
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-md-4"><input type="text"
                                                                        placeholder="Number"
                                                                        class="form-control" /></div>
                                                                <div class="form-group">
                                                                    <div class="col-md-3"><input type="text"
                                                                            placeholder="Work"
                                                                            class="form-control" /></div>
                                                                    <div class="form-group"></div>
                                                                    <div class="form-group"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-5"><input type="text" placeholder="Guardian's Name"
                                                                    class="form-control" />
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-md-4"><input type="text"
                                                                        placeholder="Number"
                                                                        class="form-control" /></div>
                                                                <div class="form-group">
                                                                    <div class="col-md-3"><input type="text"
                                                                            placeholder="Work"
                                                                            class="form-control" />
                                                                    </div>
                                                                <div class="form-group">
                                                            </div>
                                        </form>
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

    <script>
    $(document).ready(function(){
        $("#myModal").modal('show');
    });
    </script>
    
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