<?php

use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\admin\SliderController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\RegisterUpdateController;
use App\Http\Controllers\front\MainController;
use App\Http\Controllers\front\AboutController;
use App\Http\Controllers\front\CategoriesController;
use App\Http\Controllers\front\ContactController;
use App\Http\Controllers\front\SingleBlogController;
use App\Http\Controllers\SammekimControlleR;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Controller;
use App\Models\Sliders;


Route::get('/', [MainController::class, "getView"])->name('blog');


// Route::get('/', function () {
//     return view("front.pages.main");
// })->name('main');


Route::get('/about', [AboutController::class, "getView"])->name('about');

Route::get('/contact', [ContactController::class, "getView"])->name('contact');

Route::middleware('controlContact')->post('/contactdata', [ContactController::class, "postdata"])->name('contactdata');

// Route::get('/singleBloge', [SingleBlogController::class, "getView"])->name('singleBloge');
Route::get('/singleBloge', [SingleBlogController::class, "getView"])->name('singleBloge');

Route::get('/categories', [CategoriesController::class, "getView"])->name('categories');

// admin

Route::get('/admin', function () {
    return view("admin.pages.main");
})->name('main');

// Slider

Route::post('/admin/slidercreate', [SliderController::class, "store"])->name('slidercreate');
Route::get('/admin/slidercreate', [SliderController::class, "create"])->name('slidercreate');
Route::get('/admin/sliderlist', [SliderController::class, "index"])->name('sliderlist');
Route::get('/admin/deleteitem/{id}', [SliderController::class, "destroy"])->name('deleteitem');
Route::get('/admin/edititem/{id}', [SliderController::class, "edit"])->name('edititem');
Route::post('/admin/updateitem/{id}', [SliderController::class, "update"])->name('updateitem');
Route::get('/admin/detail/{id}', [SliderController::class, "show"])->name('detail');

// Blog routes

Route::get('/admin/blogList', [BlogController::class, "index"])->name('blogList');
Route::get('/admin/blogCreate', [BlogController::class, "create"])->name('blogCreate');
Route::post('/admin/blogCreate', [BlogController::class, "store"])->name('blogCreate');
// Route::get('/admin/deleteitem/{id}', [BlogController::class, "destroy"])->name('deleteitem');
// Route::get('/admin/edititem/{id}', [BlogController::class, "edit"])->name('edititem');
// Route::post('/admin/updateitem/{id}', [BlogController::class, "update"])->name('updateitem');
// Route::get('/admin/detail/{id}', [BlogController::class, "show"])->name('detail');

// ==================================

// User
Route::post('/admin/usercreate', [UserController::class, "store"])->name('usercreate');
Route::get('/admin/usercreate', [UserController::class, "create"])->name('usercreate');
Route::get('/admin/userlist', [UserController::class, "index"])->name('userlist');

// Category

Route::get('/category/{category}', [CategoriesController::class, "showPost"])->name('category');
Route::get('/singleBloge/{blog}', [SingleBlogController::class, "blogdetail"])->name('blogdetail');

Auth::routes();
//Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/login', [LoginController::class,'login'])->name('login');
Route::get('/logout', [LoginController::class,'logout'])->name('logout');
Route::post('/register', [RegisterController::class,'create'])->name('register');
// Route::post('/resetPassword', [PasswordController::class, 'update'])->name('resetPassword');
Route::get('/updateprofil/{user}', [RegisterUpdateController::class, 'index'])->name('updateprofil');
Route::patch('/updateProfil/{user}', [RegisterUpdateController::class, 'update'])->name('updateProfil');