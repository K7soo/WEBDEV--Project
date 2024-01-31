<?php

// List of Controllers
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ApplicantListsController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\RegistrationController;
<<<<<<< Updated upstream

use App\Http\Controllers\StudHomeController;
=======
use App\Http\Controllers\AdmissionController;

>>>>>>> Stashed changes
use App\Http\Controllers\StudQualController;
use App\Http\Controllers\StudRegFormsController;

use App\Http\Controllers\StudViewController;
use App\Models\Course;

/*      <-- Login Routes -->        */

// Landing Page
Route::get('/', function () {
    return view('MainLogin');
});

Route::get('login', function () {
    return view('MainLogin');
});

<<<<<<< Updated upstream
/*      <-- Other Routes -->        */

Route::get('/DashboardUI', [DashboardController::class, 'index'])->name('DashboardUI');


// Routes for Admin Login Path

Route::get('/ApplicantLists', [ApplicantListsController::class, 'index'])->name('ApplicantLists');


// 
Route::get('/CourseList', [CourseController::class, 'index'])->name('CourseList');

Route::post('/CourseList', [CourseController::class, 'AddCourse'])->name('course.AddCourse');


Route::get('/CourseListStud', );


Route::get('/Registration', [RegistrationController::class, 'index'])->name('Registration');

// Routes for Student Login Path
Route::get('/StudRegForms', [StudRegFormsController::class, 'index'])->name('StudRegForms');

Route::get('/StudQualify', [StudQualController::class, 'index'])->name('StudQualify');

// Route::get('/StudHomePage.index', [StudHomeController::class, 'index'])->name('StudHomePage.index');
Route::get('/StudHomePage',  function() {
    return view('StudHomePage');
});

Route::get('/StudViewApp', [StudViewController::class, 'index'])->name('StudViewApp');

// Login Routes
=======
>>>>>>> Stashed changes
Route::get('/AdminLogin', function () {
    return view('AdminLogin');
});

Route::get('/StudentLogin', function () {
    return view('StudentLogin');
});


/*      <-- Admin Side -->        */

// Dashboard
Route::get('/DashboardUI', [DashboardController::class, 'index'])->name('DashboardUI');

// Applicants -> List
Route::get('/ApplicantLists', [ApplicantListsController::class, 'index'])->name('ApplicantLists');

// Course
Route::get('/CourseList', [CourseController::class, 'index'])->name('CourseList');
Route::post('/CourseList', [CourseController::class, 'AddCourse'])->name('course.AddCourse');
Route::delete('/courses/delete/{id}', [CourseController::class, 'DeleteCourse'])->name('course.DeleteCourse');

//
Route::get('/CourseListStud', );

// Registration
Route::get('/Registration', [RegistrationController::class, 'index'])->name('Registration');

// Admission
Route::get('/Admission', [AdmissionController::class, 'index'])->name('Admission');



/*      <-- Student Side -->        */

// 
Route::get('/StudRegForms', [StudRegFormsController::class, 'index'])->name('StudRegForms');
Route::get('/StudQualify', [StudQualController::class, 'index'])->name('StudQualify');

Route::get('/StudHomePage',  function() {
    return view('StudHomePage');
});

Route::get('/StudViewApp', [StudViewController::class, 'index'])->name('StudViewApp');
