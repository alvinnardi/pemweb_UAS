<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FavoritController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardPostController;


Route::get('/', function () {
    return view('home.index', [
        "title" => "Home"
    ]);
});

Route::get('/profile', function () {
    return view('account.profile.index', [
        "title" => "Profile",
        "user" => User::find(auth()->user()->id)
    ]);
})->middleware('auth');

Route::get('/about', function () {
    return view('tentangKami.index', [
        'title' => 'Tentang Kami'
    ]);
});

Route::get('/favorit', [FavoritController::class, 'index'])->middleware('auth');

Route::get('/posts', [PostController::class, 'viewAllPosts']);
Route::get('/posts/{post:slug}', [PostController::class, 'viewPost']);

Route::get('/category', [CategoryController::class, 'viewAllCategory']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('admin');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('admin');
Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('admin');

Route::resource('/dashboard/categories', AdminCategoryController::class)->middleware('admin');