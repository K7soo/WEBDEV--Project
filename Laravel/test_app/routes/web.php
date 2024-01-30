<?php

// List of Controllers
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ApplicantListsController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\RegistrationController;

use App\Http\Controllers\StudHomeController;
use App\Http\Controllers\StudQualController;
use App\Http\Controllers\StudRegFormsController;
use App\Http\Controllers\StudViewController;
<<<<<<< Updated upstream

=======
>>>>>>> Stashed changes

// Default Start-up page
Route::get('/', function () {
    return view('MainLogin');
});

Route::get('login', function () {
    return view('MainLogin');
});

/*      <-- Other Routes -->        */

Route::get('/DashboardUI', [DashboardController::class, 'index'])->name('DashboardUI');


// Routes for Admin Login Path

Route::get('/ApplicantLists', [ApplicantListsController::class, 'index'])->name('ApplicantLists');

<<<<<<< Updated upstream
Route::get('/CourseList', [CourseController::class, 'index'])->name('CourseList');

=======
// 
Route::get('/CourseList', [CourseController::class, 'index'])->name('CourseList');

Route::post('/CourseList', [CourseController::class, 'AddCourse'])->name('course.AddCourse');

Route::delete('/courses/delete/{id}', [CourseController::class, 'deleteCourse'])->name('course.DeleteCourse');
>>>>>>> Stashed changes


//
Route::get('/CourseListStud', );

<<<<<<< Updated upstream
=======
//
>>>>>>> Stashed changes
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
Route::get('/AdminLogin', function () {
    return view('AdminLogin');
});

Route::get('/StudentLogin', function () {
    return view('StudentLogin');
});

