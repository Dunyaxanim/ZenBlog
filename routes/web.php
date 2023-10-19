<?php

use App\Http\Controllers\admin\SliderController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\front\MainController;
use App\Http\Controllers\front\AboutController;
use App\Http\Controllers\front\CategoriesController;
use App\Http\Controllers\front\ContactController;
use App\Http\Controllers\front\SingleBlogController;
use App\Models\Category;
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

Route::get('/singleBloge', [SingleBlogController::class, "getView"])->name('singleBloge');

Route::get('/categories', [CategoriesController::class, "getView"])->name('categories');

// admin

Route::get('/admin', function () {
    return view("admin.pages.main");
})->name('main');

// slider

Route::post('/admin/slidercreate', [SliderController::class, "store"])->name('slidercreate');
Route::get('/admin/slidercreate', [SliderController::class, "create"])->name('slidercreate');
Route::get('/admin/sliderlist', [SliderController::class, "index"])->name('sliderlist');
Route::get('/admin/deleteitem/{id}', [SliderController::class, "destroy"])->name('deleteitem');
Route::get('/admin/edititem/{id}', [SliderController::class, "edit"])->name('edititem');
Route::post('/admin/updateitem/{id}', [SliderController::class, "update"])->name('updateitem');
Route::get('/admin/detail/{id}', [SliderController::class, "show"])->name('detail');


Route::post('/admin/usercreate', [UserController::class, "store"])->name('usercreate');
Route::get('/admin/usercreate', [UserController::class, "create"])->name('usercreate');
Route::get('/admin/userlist', [UserController::class, "index"])->name('userlist');
// Route::get('/admin/deleteitem/{id}', [UserController::class, "destroy"])->name('deleteitem');
// Route::get('/admin/edititem/{id}', [UserController::class, "edit"])->name('edititem');
// Route::post('/admin/updateitem/{id}', [UserController::class, "update"])->name('updateitem');
// Route::get('/admin/detail/{id}', [UserController::class, "show"])->name('detail');

// Category

// Route::post('/category', [CategoriesController::class, "showPost"])->name('category');
Route::get('/category/{category}', [CategoriesController::class, "showPost"])->name('category');