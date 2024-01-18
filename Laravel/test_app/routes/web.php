<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ApplicantListsController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\StudRegFormsController;

Route::get('/', function () {
    return view('DashboardUI');
});

Route::get('/DashboardUI', [DashboardController::class, 'index'])->name('DashboardUI');
Route::get('/ApplicantLists', [ApplicantListsController::class, 'index'])->name('ApplicantLists');
Route::get('/Courses', [CoursesController::class, 'index'])->name('Courses');
Route::get('/Registration', [RegistrationController::class, 'index'])->name('Registration');
Route::get('/StudRegForms', [StudRegFormsController::class, 'index'])->name('StudRegForms');

