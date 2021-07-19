<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Back\UserController;
use App\Http\Controllers\Back\AuthController;
use App\Http\Controllers\Back\NewsController;
use App\Http\Controllers\Back\BannerController;
use App\Http\Controllers\Back\CategoryController;
use App\Http\Controllers\HomeController;


Route::get('/' , [HomeController::class , 'home'])->name('home');
Route::get('/news/{slug}' , [HomeController::class , 'news'])->name('news.inner');
Route::get('/category/{cb_news_categories_id}' , [HomeController::class , 'category'])->name('category');
Route::get('/tag/{news_id}' , [HomeController::class , 'tag'])->name('tag');

Route::prefix('admin/')->middleware('isLogin')->group(function(){
    Route::view('login' , 'back.login')->name('admin.login');
    Route::post('login' , [AuthController::class , 'loginPost'])->name('admin.login.post');
});

Route::prefix('admin/')->middleware('isAdmin')->group(function(){
    Route::resource('users'  , UserController::class);
    Route::resource('news'  , NewsController::class);
    Route::resource('categories'  , CategoryController::class);
    Route::resource('banners'  , BannerController::class);
    Route::view('/' , 'back.home_admin')->name('home_admin');
    Route::get('logout' , [AuthController::class , 'logout'] )->name('logout');
});
