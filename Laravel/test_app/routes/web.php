<?php

// List of Controllers
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ApplicantListsController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\RegistrationController;

use App\Http\Controllers\StudHomeController;
use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\StudQualController;
use App\Http\Controllers\StudRegFormsController;
use App\Http\Controllers\StudViewController;


/*      <-- Login Routes -->        */

// Landing Page
Route::get('/', function () {
    return view('MainLogin');
});

Route::get('login', function () {
    return view('MainLogin');
});

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
