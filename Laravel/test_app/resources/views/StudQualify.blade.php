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
                        <h1 class="pull-left">Pre Qualifications</h1>
                        <div class="pull-right"></div>
                    </section>
                    <section class="main-content">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel">
                                    <div class="panel-body form">
                                        <form id="wizard-option1" action="" method="post" class="form-horizontal">
                                            <div class="form-body">
                                                <ul class="bwizard-steps nav nav-pills mbxl">
                                                    <li><a href="#tab1" data-toggle="tab"><span
                                                                class="step-number">1</span><span class="step-desc">Step
                                                                1<br /><small>Personal Information</small></span></a></li>
                                                    <li><a href="#tab2" data-toggle="tab"><span
                                                                class="step-number">2</span><span class="step-desc">Step
                                                                2<br /><small>Contact Information</small></span></a></li>
                                                    <li><a href="#tab3" data-toggle="tab"><span
                                                                class="step-number">3</span><span class="step-desc">Step
                                                                3<br /><small>Educational Background</small></span></a></li>
                                                    <li><a href="#tab4" data-toggle="tab"><span
                                                                class="step-number">4</span><span class="step-desc">Step
                                                                4<br /><small>Parent/Guardian Information</small></span></a></li>
                                                </ul>
                                                <div class="tab-content mbn pan">
                                                    <div id="tab1" class="tab-pane">
                                                        <h4 class="mbl">Your Account Information</h4>
                                                        <div class="form-group">
                                                            <div class="col-md-4"><input type="text" placeholder="username"
                                                                    class="input-dark form-control" /><label
                                                                class="control-label col-md-3"><span
                                                                    class="required">*</span></label>
                                                                    <span class="help-block">This field is required.</span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group last"><label
                                                                class="control-label col-md-3">Password <span
                                                                    class="required">*</span></label>
                                                            <div class="col-md-4"><input type="password" name="password"
                                                                    class="input-dark form-control" /><span
                                                                    class="help-block">Provide your password</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="tab2" class="tab-pane">
                                                        <h4 class="mbl">Your Profile Information</h4>
                                                        <div class="form-group"><label
                                                                class="control-label col-md-3">Fullname <span
                                                                    class="required">*</span></label>
                                                            <div class="col-md-4"><input type="text" name="fullname"
                                                                    class="input-dark form-control" /><span
                                                                    class="help-block">Provide your fullname</span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group"><label
                                                                class="control-label col-md-3">Gender <span
                                                                    class="required">*</span></label>
                                                            <div class="col-md-4">
                                                                <div class="radio"><label><input type="radio"
                                                                            name="gender" value="m" />Male</label></div>
                                                                <div class="radio"><label><input type="radio"
                                                                            name="gender" value="f" />Female</label>
                                                                </div><span class="help-block">Provide your
                                                                    gender</span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group"><label
                                                                class="control-label col-md-3">Address <span
                                                                    class="required">*</span></label>
                                                            <div class="col-md-4"><input type="text" name="address"
                                                                    class="input-dark form-control" /><span
                                                                    class="help-block">Provide your street
                                                                    address</span></div>
                                                        </div>
                                                    </div>
                                                    <div id="tab3" class="tab-pane">
                                                        <h4 class="mbl">Your Billing Information</h4>
                                                        <div class="form-group"><label
                                                                class="control-label col-md-3">Card Number <span
                                                                    class="required">*</span></label>
                                                            <div class="col-md-4"><input type="text" name="cardnmber"
                                                                    class="input-dark form-control" /><span
                                                                    class="help-block">Provide your card number</span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group last"><label
                                                                class="control-label col-md-3">Expiration <span
                                                                    class="required">*</span></label>
                                                            <div class="col-md-4"><input type="text" name="expiration"
                                                                    class="input-dark form-control" /><span
                                                                    class="help-block">Provide your expiration</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="tab4" class="tab-pane">
                                                        <h4 class="mbl">Finish</h4>
                                                        <div class="form-group"><label
                                                                class="control-label col-md-3">Email</label>
                                                            <div class="col-md-4"><input type="text" name="cardnmber"
                                                                    class="input-dark form-control" /></div>
                                                        </div>
                                                        <div class="form-group"><label
                                                                class="control-label col-md-3"></label>
                                                            <div class="col-md-4">
                                                                <div class="checkbox"><label><input type="checkbox"
                                                                            name="terms" value="1" />I agree to the
                                                                        terms of service</label></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-actions">
                                                <ul class="pager wizard man">
                                                    <li style="display: none;" class="previous first"><a
                                                            href="javascript:;">First</a></li>
                                                    <li class="previous"><a href="javascript:;">Previous</a></li>
                                                    <li style="display: none;" class="next last"><a
                                                            href="javascript:;">Last</a></li>
                                                    <li class="next"><a href="javascript:;">Next</a></li>
                                                </ul>
                                            </div>
                                        </form>
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