<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\backend\LoginController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\CoursesController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\StudentCornerControler;
use App\Http\Controllers\frontend\StudentWorksController;

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
Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    echo "Cache is cleared<br>";
    Artisan::call('route:clear');
    echo "route cache is cleared<br>";
    Artisan::call('config:clear');
    echo "config is cleared<br>";
    Artisan::call('view:clear');
    echo "view is cleared<br>";
});

Route::get('/admin-login', [LoginController::class, 'login'])->name('admin-login');
Route::post('auth-admin-login', [LoginController::class, 'auth_admin_login'])->name('auth-admin-login');


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('about', [AboutController::class, 'index'])->name('about');
Route::get('courses', [CoursesController::class, 'index'])->name('courses');
Route::get('courses-detail/{coursesname}', [CoursesController::class, 'courseDetail'])->name('courses-detail');
Route::get('contact', [ContactController::class, 'index'])->name('contact');
Route::post('contact-save', [ContactController::class, 'save'])->name('contact-save');
Route::get('about/student-works', [StudentWorksController::class, 'index'])->name('student-works');

Route::get('why-i-choose-elearning', [StudentCornerControler::class, 'chooseElearning'])->name('why-i-choose-elearning');
Route::get('placement-partners', [StudentCornerControler::class, 'placementPartners'])->name('placement-partners');




