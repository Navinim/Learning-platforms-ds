<?php

use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\admin\BootcampController;
use App\Http\Controllers\admin\BootcampMemoController;
use App\Http\Controllers\admin\ContactController;
use App\Http\Controllers\admin\CourseCateController;
use App\Http\Controllers\admin\CourseController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\DiplomaController;
use App\Http\Controllers\admin\FaqController;
use App\Http\Controllers\admin\HighlightController;
use App\Http\Controllers\admin\InquiryController;
use App\Http\Controllers\admin\InterviewCateController;
use App\Http\Controllers\admin\InterviewController;
use App\Http\Controllers\admin\NetworkController;
use App\Http\Controllers\admin\PracticeCateController;
use App\Http\Controllers\admin\PracticeController;
use App\Http\Controllers\admin\ProfileController;
use App\Http\Controllers\admin\SliderController;
use App\Http\Controllers\admin\SponsorController;
use App\Http\Controllers\admin\TagController;
use App\Http\Controllers\admin\TestimonialController;
use App\Http\Controllers\admin\ToolsController;
use App\Http\Controllers\admin\UniversityController;
use App\Http\Controllers\admin\YourDreamController;
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
Route::post('store_save',UserController::class.'@store_contact')->name('storeContact');

//join us form
Route::get('diploma_details/{slug}',UserController::class.'@diploma_details')->name('diploma_details');
Route::post('diploma_details/{slug}',UserController::class.'@joinus_save')->name('store_diploma_details');
Route::get('interview-details/{slug}',UserController::class.'@interview_detail')->name('interview_detail');

Route::get('all-blog-in-grid',UserController::class.'@grid_blog')->name('grid_blog');
Route::get('all-interviewed',UserController::class.'@interview')->name('interview');
Route::get('faq',UserController::class.'@faqs')->name('faq');
Route::get('general-practice',UserController::class.'@practice')->name('practice');

Auth::routes();
Route::group(['prefix' => 'admin','middleware' => 'authadmin'], function () {
	// Admin Dashboard
	Route::get('/dashboard',DashboardController::class .'@index')->name('admin.dashboard');
	Route::resource('profile', ProfileController::class);
	// Route::resource('contact-details', ProfileController::class);
	Route::resource('courses',CourseController::class);
	Route::resource('category',CourseCateController::class);
	Route::resource('highlight',HighlightController::class);
	Route::resource('tools',ToolsController::class);
	Route::resource('bootcamps',BootcampController::class);
	Route::resource('memos',BootcampMemoController::class);
	Route::resource('sponsors',SponsorController::class);
	Route::resource('partner-associate',UniversityController::class);
	Route::resource('diploma',DiplomaController::class);
	Route::resource('blog',BlogController::class);
	Route::resource('tags',TagController::class);
	Route::resource('faqs',FaqController::class);
	Route::resource('slider',SliderController::class);
	Route::resource('practices',PracticeController::class);
	Route::resource('practice-cates',PracticeCateController::class);
	Route::resource('interviews',InterviewController::class);
	Route::resource('interview-cates',InterviewCateController::class);
	Route::resource('dream',YourDreamController::class);
	Route::resource('network',NetworkController::class);
	Route::resource('testimonial',TestimonialController::class);
	Route::post('/updateContent/{id}',FaqController::class.'@updateContent')->name('updateContent');

	Route::resource('contacts',ContactController::class);
	Route::get('contact/{id}', ContactController::class.'@show')->name('show');

	Route::resource('inquiries',InquiryController::class);
	Route::get('inquiry/{id}', InquiryController::class.'@show')->name('show');

});

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
