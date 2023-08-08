<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;



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


Route::get('/clear', function () {
    Artisan::call('view:clear');
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('route:clear');
    return "Successfully Cleared";
  });
  
  


Route::get('/', function () {return view('index');});
Route::get('home', [HomeController::class, 'index'])->name('home');
Route::get('404', function () {return view('404');});
Route::get('blog-details', function () {return view('blog-details-sidebar');});
Route::get('scholarships-by-countries/', [HomeController::class, 'scholarshipByCountry']);
Route::get('category/{slug?}/', [HomeController::class, 'showscholarshipCountry']);



Route::get('about', function () {return view('about');});
Route::get('contact', function () {return view('contact');});
Route::get('faq', function () {return view('faq');});

Route::get('{slug}/', [HomeController::class, 'ShowScholarDetails']);
Route::fallback(function () { return view('errors.404');});




// admin route

Route::group(['middleware'=>['IsLogin']],function () {

Route::get('panel/admin/login', function () {return view('admin.login');})->name('panel.admin.login');
Route::get('panel/admin/home', function () {return view('admin.index');})->name('panel.admin.home');
Route::get('panel/admin/show-country', [AdminController::class, 'showCountry'])->name('show-country');
Route::get('panel/admin/add-category', function () {return view('admin.add-category');})->name('panel.admin.add-category');
Route::get('panel/admin/add-blog', function () {return view('admin.add-blog');})->name('panel.admin.add-blog');
Route::get('panel/admin/add-degree', [AdminController::class, 'addDegree'])->name('add-degree');
Route::get('panel/admin/show-category', [AdminController::class, 'showCategory'])->name('panel.admin.show-category');
Route::get('panel/admin/add-scholarship', [AdminController::class, 'addScholarShip'])->name('panel.admin.add-scholarship');
Route::get('panel/admin/show-scholarship', [AdminController::class, 'ShowScholarShip'])->name('show-scholarship');
Route::get('panel/admin/del-degree', [AdminController::class, 'delDegree'])->name('del-degree');
Route::get('panel/admin/del-delscholarship', [AdminController::class, 'delScholarship'])->name('del-delscholarship');
Route::post('upload', [AdminController::class, 'upload'])->name('upload');
Route::post('add-scholarship', [AdminController::class, 'Addcholarship']);




});

// later use when register work start
// Route::get('login-design', function () {return view('login');});
// Route::get('account', function () {return view('my-account');});
// Route::get('register-design', function () {return view('register');});

Auth::routes();
