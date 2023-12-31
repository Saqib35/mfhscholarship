<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SubscriberController;







Route::get('/clear', function () {
    Artisan::call('view:clear');
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('route:clear');
    return "Successfully Cleared";
  });
  


  Route::get('index.php', function () {
    
    return redirect('/', 301);
});

Route::get('/', [HomeController::class, 'index']);

Route::get('404', function () {return view('404');});
Route::get('blog-details', function () {return view('blog-details-sidebar');});
Route::get('scholarships-by-countries/', [HomeController::class, 'scholarshipByCountry']);
Route::get('category/{slug?}/', [HomeController::class, 'showscholarshipCountry']);
Route::get('category/blog/{slug?}', [HomeController::class, 'showBlogHome']);
Route::get('blogs', [HomeController::class, 'showAllBlogs']);

Route::get('feed', [HomeController::class, 'ShowFeed']);

Route::post('/subscribe', [SubscriberController::class, 'subscribe'])->name('subscribe');
Route::get('search', [HomeController::class, 'search'])->name('search');



Route::get('about', function () {return view('about');});
Route::get('contact', function () {return view('contact');});
Route::get('faq', function () {return view('faq');});
Route::get('disclaimer', function () {return view('disclaimer');});
Route::get('privacy-policy', function () {return view('privacy-policy');});
Route::get('terms-of-use', function () {return view('terms-of-use');});
Route::get('{slug}/', [HomeController::class, 'ShowScholarDetails']);



Route::fallback(function () { return view('errors.404');});




// admin route
Route::group(['middleware'=>['IsLogin']],function () {
Route::get('panel/admin/login', function () {return view('admin.login');})->name('panel.admin.login');
Route::get('panel/admin/home', function () {return view('admin.index');})->name('panel.admin.home');
Route::get('panel/admin/show-country', [AdminController::class, 'showCountry'])->name('show-country');
Route::get('panel/admin/show-subcribled', [AdminController::class, 'showSubcribled'])->name('show-subcribled');
Route::get('panel/admin/add-category', function () {return view('admin.add-category');})->name('panel.admin.add-category');
Route::get('panel/admin/add-blog', function () {return view('admin.add-blog');})->name('panel.admin.add-blog');
Route::get('panel/admin/show-blog', [AdminController::class, 'showBlog'])->name('show-blog');
Route::get('panel/admin/add-degree', [AdminController::class, 'addDegree'])->name('add-degree');
Route::get('panel/admin/show-category', [AdminController::class, 'showCategory'])->name('panel.admin.show-category');
Route::get('panel/admin/add-scholarship', [AdminController::class, 'addScholarShip'])->name('panel.admin.add-scholarship');
Route::get('panel/admin/add-country', [AdminController::class, 'addCountry'])->name('panel.admin.add-country');
Route::get('panel/admin/show-scholarship', [AdminController::class, 'ShowScholarShip'])->name('show-scholarship');
Route::get('panel/admin/edit/{id}', [AdminController::class, 'EditScholarShip']);
Route::get('panel/admin/edit/blog/{id}', [AdminController::class, 'EditScholarShipBlog']);
Route::get('panel/admin/del-degree', [AdminController::class, 'delDegree'])->name('del-degree');
Route::get('panel/admin/del-degrees', [AdminController::class, 'delDegrees'])->name('del-degrees');
Route::get('panel/admin/del-delscholarship', [AdminController::class, 'delScholarship'])->name('del-delscholarship');
Route::get('panel/admin/indexing-api-google', [AdminController::class, 'IndexingApi']);
Route::post('upload', [AdminController::class, 'upload'])->name('upload');
Route::post('add-scholarship', [AdminController::class, 'Addcholarship']);
Route::post('edit-scholarship', [AdminController::class, 'Editcholarship']);
Route::post('add-country', [AdminController::class, 'AddPCountry']);
Route::post('add-blogs', [AdminController::class, 'AddBlogs']);
Route::post('edit-blog', [AdminController::class, 'EditBlog']);
Route::post('panel-admin-submit-api-indexing-google', [AdminController::class, 'SubmitURL']);





});

// later use when register work start
// Route::get('login-design', function () {return view('login');});
// Route::get('account', function () {return view('my-account');});
// Route::get('register-design', function () {return view('register');});

Auth::routes();
