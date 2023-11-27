<?php

use App\Http\Controllers\admin\BootcampController;
use App\Http\Controllers\admin\BootcampMemoController;
use App\Http\Controllers\admin\CourseCateController;
use App\Http\Controllers\admin\CourseController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\DiplomaController;
use App\Http\Controllers\admin\HighlightController;
use App\Http\Controllers\admin\SponsorController;
use App\Http\Controllers\admin\ToolsController;
use App\Http\Controllers\admin\UniversityController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/',UserController::class.'@index')->name('home');
Route::get('course_detail/{slug}',UserController::class.'@course_detail')->name('course_detail');

Route::get('bootcamp_details/{slug}',UserController::class.'@bootcamp_detail')->name('bootcamp_details');
Route::post('bootcamp_details/{slug}',UserController::class.'@joinus_save')->name('store_bootcamp_details');

Route::get('contact-us',UserController::class.'@contact')->name('contact');
Route::post('storeContact',UserController::class.'@storeContact')->name('storeContact');

Route::get('diploma_details/{slug}',UserController::class.'@diploma_details')->name('diploma_details');
Route::post('diploma_details/{slug}',UserController::class.'@joinus_save')->name('store_diploma_details');



Auth::routes();
Route::group(['prefix' => 'admin','middleware' => 'authadmin'], function () {
	// Admin Dashboard
	Route::get('/dashboard',DashboardController::class .'@index')->name('admin.dashboard');
	Route::resource('courses',CourseController::class);
	Route::resource('category',CourseCateController::class);
	Route::resource('highlight',HighlightController::class);
	Route::resource('tools',ToolsController::class);
	Route::resource('bootcamps',BootcampController::class);
	Route::resource('memos',BootcampMemoController::class);
	Route::resource('sponsors',SponsorController::class);
	Route::resource('partner-associate',UniversityController::class);
	Route::resource('diploma',DiplomaController::class);
});

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
