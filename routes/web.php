<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\ResetPassword;
use App\Http\Controllers\ChangePassword;  
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\ProjectController;
use App\Http\Controllers\admin\NewsController;


Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact-submit', [ContactController::class, 'save'])->name('contact-submit');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/our-project', [HomeController::class, 'list'])->name('our-project');

    

Route::get('/admin/', function () {return redirect('/admin/dashboard');})->middleware('auth');
Route::group(['prefix'=>'admin'], function() {
    Route::get('/register', [RegisterController::class, 'create'])->middleware('guest')->name('register');
	Route::post('/register', [RegisterController::class, 'store'])->middleware('guest')->name('register.perform');
	Route::get('/login', [LoginController::class, 'show'])->middleware('guest')->name('login');
	Route::post('/login', [LoginController::class, 'login'])->middleware('guest')->name('login.perform');
	Route::get('/reset-password', [ResetPassword::class, 'show'])->middleware('guest')->name('reset-password');
	Route::post('/reset-password', [ResetPassword::class, 'send'])->middleware('guest')->name('reset.perform');
	Route::get('/change-password', [ChangePassword::class, 'show'])->middleware('guest')->name('change-password');
	Route::post('/change-password', [ChangePassword::class, 'update'])->middleware('guest')->name('change.perform');
	Route::get('/dashboard', [AdminController::class, 'index'])->name('home')->middleware('auth');

	Route::group(['middleware' => 'auth'], function () {
		Route::get('/project-listing', [ProjectController::class, 'index'])->name('project-list');
		Route::get('/project-add', [ProjectController::class, 'add'])->name('add-project');
		Route::post('/project-save', [ProjectController::class, 'save'])->name('create-project');
		Route::get('/project-edit/{id}', [ProjectController::class, 'edit'])->name('edit-project');
		Route::get('/project-delete/{id}', [ProjectController::class, 'destroy'])->name('delete-project');
		
		Route::get('/news-listing', [NewsController::class, 'index'])->name('news-list');
		Route::get('/news-add', [NewsController::class, 'add'])->name('add-news');
		Route::post('/news-save', [NewsController::class, 'save'])->name('create-news');
		Route::get('/news-edit/{id}', [NewsController::class, 'edit'])->name('edit-news');
		Route::get('/news-delete/{id}', [NewsController::class, 'destroy'])->name('delete-news');

		Route::get('/user-delete/{id}', [AdminController::class, 'destroy'])->name('delete-contact');
		Route::get('/user-management', [AdminController::class, 'contact_list'])->name('user-list');
		Route::get('/user-edit/{id}', [AdminController::class, 'edit'])->name('edit-contact');
		Route::post('/user-update', [AdminController::class, 'save'])->name('update-contact');
		Route::get('/user-data', [AdminController::class, 'filter'])->name('user-data');
		// Route::get('/virtual-reality', [PageController::class, 'vr'])->name('virtual-reality');
		
		// Route::get('/rtl', [PageController::class, 'rtl'])->name('rtl');
		// Route::get('/profile', [UserProfileController::class, 'show'])->name('profile');
		// Route::post('/profile', [UserProfileController::class, 'update'])->name('profile.update');
		// Route::get('/profile-static', [PageController::class, 'profile'])->name('profile-static'); 
		// Route::get('/sign-in-static', [PageController::class, 'signin'])->name('sign-in-static');
		// Route::get('/sign-up-static', [PageController::class, 'signup'])->name('sign-up-static'); 
		// Route::get('/{page}', [PageController::class, 'index'])->name('page');
		Route::post('logout', [LoginController::class, 'logout'])->name('logout');
	});
});
	
