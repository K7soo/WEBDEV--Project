<?php

// List of Controllers
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ApplicantListsController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\StudRegFormsController;

// Default Start-up page
Route::get('/', function () {
    return view('MainLogin');
});

Route::get('login', function () {
    return view('MainLogin');
});

/*      <-- Other Routes -->        */

Route::get('/DashboardUI', [DashboardController::class, 'index'])->name('DashboardUI');

//This is the default route for Applicant Lists Blade File
Route::get('/ApplicantLists', [ApplicantListsController::class, 'index'])->name('ApplicantLists');

Route::get('/CourseList', [CourseController::class, 'index'])->name('CourseList');

Route::get('/Registration', [RegistrationController::class, 'index'])->name('Registration');

Route::get('/StudRegForms', [StudRegFormsController::class, 'index'])->name('StudRegForms');

// Login Routes
Route::get('/AdminLogin', function () {
    return view('AdminLogin');
});

Route::get('/StudentLogin', function () {
    return view('StudentLogin');
});






