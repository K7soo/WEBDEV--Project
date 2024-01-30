<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin | Courses</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="description">
    <meta content="" name="author">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400italic,400,300,700">
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Squada+One">
    <link type="text/css" rel="stylesheet" href="{{ asset('global/plugins/font-awesome/css/font-awesome.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('global/plugins/ionicons/css/ionicons.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('global/plugins/simple-line-icons/simple-line-icons.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('global/plugins/animate.css/animate.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('global/plugins/iCheck/skins/all.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/plugins/rickshaw/rickshaw.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css') }}">

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
                    <a href="{{ route('DashboardUI')}}" class="logo-text"><i>
                        </i> SRAM </a><a href="#" data-toggle="offcanvas" class="sidebar-toggle pull-right"><i class="fa fa-bars"></i></a>
                </div>

                <nav role="navigation" class="navbar navbar-static-top">
                    <form action="#" class="search-form navbar-left hidden-xs">
                    </form>
                </nav>
            </header><!--END HEADER-->

            <!--BEGIN WRAPPER-->
            <div class="wrapper row-offcanvas row-offcanvas-left"><!--BEGIN SIDEBAR-->
                <aside class="page-sidebar sidebar-offcanvas">
                    <section class="sidebar">

                        <ul class="sidebar-menu">

                            <li><a href="{{ route('DashboardUI')}}"><i class="icon-home"></i><span class="sidebar-text">Dashboard</span></a></li>

                            <li><a href="{{ route('ApplicantLists')}}"><i class="icon-notebook"></i><span class="sidebar-text">Applicant Lists</span></a></li>

                            <li class="active"><a href="#"><i class="icon-notebook"></i><span class="sidebar-text">Course List</span></a></li>

                            <li><a href="{{ route('Registration')}}"><i class="icon-notebook"></i><span class="sidebar-text">Registrations</span></a></li>
                        </ul>
                    </section>
                </aside><!--END SIDERBAR--><!--BEGIN CONTENT-->
                <div class="content">
                    <section class="content-header">
                        <h1 class="pull-left">Course List<small>View Courses</small></h1>
                        <div class="pull-right">
                        </div>
                    </section>

                    <section class="main-content">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-success">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">
                                            <strong class="text-uppercase"> List of Courses </strong>
                                        </h3>
                                    </div>
<<<<<<< Updated upstream
                                    <div class="card-body table-responsive">

                                        <div class="listpanel">
                                            <button type="button"
                                                class="btn btn-warning"> Add New Course
                                            </button>
                                        </div>

                                        <div class="row">
                                            <div class="col-12">
                                                <table class="table table-bordered" id="table1">
                                                    <thead>
                                                        <tr>
                                                            <th style="text-align:center;">Course Code</th>
                                                            <th style="text-align:center;">Description</th>
                                                            <th style="text-align:center;">Units Per Sem</th>
                                                            <th style="text-align:center;">Option</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td style="text-align:center;">BSIT</td>
                                                            <td>Bachelor of Science in Information Technology</td>
                                                            <td>23</td>
                                                            <td style="text-align:center;">
                                                                    <a href=""

                                                                    class="btn btn-sm btn-primary">Remove</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align:center;">BSENTREP</td>
                                                            <td>Bachelor of Science in Entrepreneurship</td>
                                                            <td>23</td>
                                                            <td style="text-align:center;"><a
                                                                    href="https://survey.pup.edu.ph/apps/ofes/survey/32021-00389-CM-0/106/1a1f04d1c68c53f186fe66010f262c2145988c4e"
                                                                    class="btn btn-sm btn-primary">Remove</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align:center;">BSBA-MM</td>
                                                            <td>Bachelor of Science in Business Administration major in Marketing Management</td>
                                                            <td>23</td>
                                                            <td style="text-align:center;"><a
                                                                    href="https://survey.pup.edu.ph/apps/ofes/survey/12021-00389-CM-0/106/452405be4697445340cdfbd8d4e545f142c6ac0a"
                                                                    class="btn btn-sm btn-primary">Remove</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align:center;">BPAPFM</td>
                                                            <td>Bachelor of Public Administration major in Public Financial Management</td>
                                                            <td>23</td>
                                                            <td style="text-align:center;"><a
                                                                    href="https://survey.pup.edu.ph/apps/ofes/survey/82021-00389-CM-0/106/f15b62616c775357120355a0b82dce13b622e4f4"
                                                                    class="btn btn-sm btn-primary">Remove</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td style="text-align:center;">BSBAHRM</td>
                                                            <td>Bachelor of Science in Business Administration major in Human Resource Management</td>
                                                            <td>23</td>
                                                            <td style="text-align:center;"><a
                                                                    href="https://survey.pup.edu.ph/apps/ofes/survey/62021-00389-CM-0/106/565ccba41d2f876aadace9890fe0e18b5bd2e24c"
                                                                    class="btn btn-sm btn-primary">Remove</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
=======

                                    <div class="panel">
                                        <div class="panel-body">
                                            <button type="button" id=" " class="btn btn-warning" onclick="AddCourseModal()"> Add New Course</button>
                                            <table id="datatables" class="table table-bordered mbn">
                                                <thead class="bg-default">
                                                    <th>Course ID</th>
                                                    <th>Course Name</th>
                                                    <th>Course Code</th>
                                                    <th>Remove</th>
                                                </thead>
                                                <tbody>
                                                    @foreach($courses as $course)
                                                    <tr row-id="row-{{ $course->id }}">
                                                        <td>{{ $course->CourseID }}</td>
                                                        <td>{{ $course->CourseName }}</td>
                                                        <td>{{ $course->CourseCode }}</td>
                                                        <td>
                                                            <form action="{{ route('course.DeleteCourse', ['id' => $course->CourseID]) }}" method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-sm btn-danger">Remove</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
>>>>>>> Stashed changes
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

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
<<<<<<< Updated upstream
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
=======
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

    <!-- Add Course Modal -->
    <div id="addCourseModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add New Course</h4>
                </div>
                <div class="modal-body">
                    <form id="addCourseForm" action="{{ route('course.AddCourse') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="CourseName">Course Name:</label>
                            <input type="text" class="form-control" name="CourseName">
                        </div>
                        <div class="form-group">
                            <label for="courseCode">Course Code:</label>
                            <input type="text" class="form-control" name="CourseCode">
                        </div>
                        <button type="submit" class="btn btn-primary">Add Course</button>
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Course Modal -->
    <div id="deleteCourseModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content -->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Delete Course</h4>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete this course?</p>
                </div>
                <div class="modal-footer">
                    <!-- Button to delete course -->
                    <button type="button" class="btn btn-danger" onclick="deleteCourse()">Delete</button>
                    <!-- Button to close the modal -->
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <script src="global/js/jquery.js"></script>
    <script src="assets/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"></script>
    <script src="assets/js/table-datatables.js"></script>

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
    <!-- <script src="assets/js/index.js"></script> -->
    <script>
            $('#datatables').dataTable();

            // Function to display the Add Course modal
            function AddCourseModal() {
                $('#addCourseModal').modal('show');
            }

            // Function to display the Delete Course modal and pass the course ID
            function DeleteCourseModal(courseId) {
                // Set the course ID in the delete button's data attribute
                $('#deleteCourseModal').find('.btn-delete-course').attr('data-course-id', courseId);
                $('#deleteCourseModal').modal('show');
            }

            // Event listener for the Delete button in the modal
            $(document).on('click', '.btn-delete-course', function() {
                var courseId = $(this).data('course-id');
                deleteCourse(courseId);
                // Close the modal
                $('#deleteCourseModal').modal('hide');
            });

            // Event listener for the Add New Course button
            $(document).on('click', '.btn-add-course', function() {
                AddCourseModal();
            });

            $('')

            // Event listener for the View button
            $(document).on('click', '.btn-view-course', function() {
                var courseId = $(this).data('course-id');
                DeleteCourseModal(courseId);
            });

            // Function to delete the course
            function deleteCourse(courseId) {
                $.ajax({
                    url: '{{ url("/courses/delete") }}/' + courseId,
                    type: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        // Handle success, e.g., remove the row from the table
                        $('#row-' + courseId).remove();
                    },
                    error: function(error) {
                        // Handle error
                        console.error('Error deleting course:', error);
                    }
                });
            }
    </script>


>>>>>>> Stashed changes
</body>

</html>