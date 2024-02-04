<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin | Students</title>
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
                        <i></i> SRAM</a>
                    <a href="#" data-toggle="offcanvas" class="sidebar-toggle pull-right"><i class="fa fa-bars"></i></a>
                </div>

                <nav role="navigation" class="navbar navbar-static-top">
                    <div class="navbar-right">
                        <ul class="nav navbar-nav">
                            <li class="dropdown dropdown-user menu-user">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                                    <img src="global/images/PHP/account icon.png" alt="User Image" class="img-circle" />
                                    <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href=""><i class="icon-key"></i>Log Out</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>

            <!--BEGIN WRAPPER-->
            <div class="wrapper row-offcanvas row-offcanvas-left"><!--BEGIN SIDEBAR-->
                <aside class="page-sidebar sidebar-offcanvas">
                    <section class="sidebar">

                        <!-- Sidebar with routes to different web pages -->
                        <ul class="sidebar-menu">
                            <li><a href="{{ route('DashboardUI')}}"><i class="icon-home"></i><span class="sidebar-text">Dashboard</span></a></li>

                            <li><a href="{{ route('ApplicantLists')}}"><i class="icon-notebook"></i><span class="sidebar-text">Applicant Lists</span></a></li>

                            <li><a href="{{ route('CourseList')}}"><i class="icon-notebook"></i><span class="sidebar-text">Course List</span></a></li>

                            <li><a href="{{ route('Registration')}}"><i class="icon-notebook"></i><span class="sidebar-text">Registrations</span></a></li>

                            <li><a href="{{ route('Admission')}}"><i class="icon-notebook"></i><span class="sidebar-text">Admission</span></a></li>

                            <li class="active"><a href="#"><i class="icon-notebook"></i><span class="sidebar-text">Students</span></a></li>
                        </ul>
                    </section>
                </aside>
                <!--END SIDERBAR--><!--BEGIN CONTENT-->
                <div class="content">

                    <section class="content-header">
                        <h1 class="pull-left">Student Record</h1>
                        <div class="pull-right">
                        </div>
                    </section>
                    <section class="main-content">
                        <div class="panel-body">
                            <div class="col-md-12">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">
                                            <strong class="text-uppercase">Students</strong>
                                        </h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="panel">
                                            <button type="button" id="addStudentButton" class="btn btn-warning" onclick="openAddStudentModal()"> Add Student </button>
                                        </div>
                                        <div class="panel">
                                            <table id="datatables" class="table table-bordered mbn">
                                                <thead>
                                                    <tr>
                                                        <!-- <th>ID</th> -->
                                                        <th>Student Number</th>
                                                        <th>Full Name</th>
                                                        <th>Email</th>
                                                        <th>Course</th>
                                                        <th>Year</th>
                                                        <th>Section</th>
                                                        <th>Status</th>
                                                        <th>Edit</th>
                                                        <th>Delete</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($students as $student)
                                                    <tr>
                                                        <!-- <td>{{ $student->StudentID }}</td> -->
                                                        <td>{{ $student->StudentNo }}</td>
                                                        <td>
                                                            {{ $student->StudLastName }},
                                                            {{ $student->StudFirstName }}
                                                            {{ $student->StudMiddleName }}
                                                            {{ $student->Suffix }}
                                                        </td>
                                                        <td>{{ $student->account->Email }}</td>
                                                        <td>{{ $student->course->CourseCode }}</td>
                                                        <td>{{ $student->yearlevels->YearLevelName }}</td>
                                                        <td>{{ $student->section->SectionNo }}</td>
                                                        <td>{{ $student->status->Status }}</td>
                                                        <td>
                                                            <div>
                                                                <button type="button" class="btn btn-sm btn-warning btn-edit-student" data-student-id="{{ $student->StudentID }}">Edit</button>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div>
                                                                <button type="button" class="btn btn-sm btn-danger btn-delete-student" data-student-id="{{ $student->StudentID }}">Delete</button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            <div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    </section>

                </div><!-- END CONTENT -->
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

    <!-- View Student Modal -->
    <div id="viewStudentModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Student Details</h4>
                </div>
                <div class="modal-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Student Number</th>
                                <th>Full Name</th>
                                <th>Email</th>
                                <th>Course</th>
                                <th>Year</th>
                                <th>Section</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="studentDetailsTableBody">
                            @foreach($students as $student)
                            <td>{{ $student->StudentNo }}</td>
                            <td>
                                {{ $student->StudLastName }},
                                {{ $student->StudFirstName }}
                                {{ $student->StudMiddleName }}
                                {{ $student->Suffix }}
                            </td>
                            <td>{{ $student->account->Email }}</td>
                            <td>{{ $student->course->CourseCode }}</td>
                            <td>{{ $student->yearlevels->YearLevelName }}</td>
                            <td>{{ $student->section->SectionNo }}</td>
                            <td>{{ $student->status->Status }}</td>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Student Modal -->
    <div id="addStudentModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add Student</h4>
                </div>
                <div class="modal-body">
                    <form id="addStudentForm" action="" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="StudentNo">Student Number:</label>
                            <input type="text" class="form-control" id="StudentNo" name="StudentNo">
                        </div>

                        <div class="form-group">
                            <label for="StudLastName">Last Name:</label>
                            <input type="text" class="form-control" id="StudLastName" name="StudLastName">

                            <label for="StudFirstName">First Name:</label>
                            <input type="text" class="form-control" id="StudFirstName" name="StudFirstName">

                            <label for="StudMiddleName">Middle Name:</label>
                            <input type="text" class="form-control" id="StudMiddleName" name="StudMiddleName">

                            <label for="Suffix">Suffix:</label>
                            <input type="text" class="form-control" id="Suffix" name="Suffix">
                        </div>

                        <div class="form-group">
                            <label for="Gender">Gender:</label>
                            <select class="form-control" id="Gender" name="Gender">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="StatusID">Status:</label>
                            <select class="form-control" id="StatusID" name="StatusID">
                                <option value="Regular">Regular</option>
                                <option value="Irregular">Irregular</option>
                                <option value="Transferee">Transferee</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="Email">Account Email:</label>
                            <input class="form-control" id="Email" name="Email">

                            <label for="Password">Account Password:</label>
                            <input class="form-control" id="Password" name="Password">

                            <label for="accountType">Account for:</label>
                            <select class="form-control" id="accountType" name="accountType">
                                <option value="Student" selected>Student</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="YearLevelID">Year Level:</label>
                            <select class="form-control" id="YearLevelID" name="YearLevelID">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="CourseID">Course:</label>
                            <select class="form-control" id="CourseID" name="CourseID">
                                <option value="1">Bachelor of Science in Information Technology</option>

                            </select>
                        </div>

                        <div class="form-group">
                            <label for="SectionID">Section:</label>
                            <select class="form-control" id="SectionID" name="SectionID">
                                <option value="1">1</option>
                                <option value="2">2</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-success">Add Student</button>
                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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

        function viewStudentDetails(studentId) {

            var studentDetails = getStudentDetails(StudentID);

            $('#studentDetailsTableBody').html(studentDetails);

            $('#viewStudentModal').modal('show');
        }


        function getStudentDetails(studentId) {
            var details = ''; // Replace this with actual details

            $.ajax({
                url: '/api/students/' + studentId,
                method: 'GET',
                async: false, // Synchronous for simplicity, consider async in production
                success: function(response) {
                    details = response.data; // Update with your actual data structure
                },
                error: function(error) {
                    console.error('Error fetching student details:', error);
                    details = 'Failed to fetch student details.';
                }
            });

            return details;
        }

        function openAddStudentModal() {
            // Clear the form fields when opening the modal
            $('#addStudentForm')[0].reset();
            $('#addStudentModal').modal('show');
        }

        function submitAddStudentForm() {
            // Collect form data
            var formData = $('#addStudentForm').serialize();

            // Make an AJAX request to add the student to the database
            $.ajax({
                url: '/api/students', // Update with your API endpoint for adding students
                method: 'POST',
                data: formData,
                success: function(response) {
                    // Handle success, e.g., close the modal and refresh the student list
                    $('#addStudentModal').modal('hide');
                    // You might want to reload the student list or perform other actions
                },
                error: function(error) {
                    // Handle error, e.g., display an error message
                    console.error('Error adding student:', error);
                    // You might want to show an error message to the user
                }
            });
        }
    </script>
</body>

</html>