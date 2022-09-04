<?php

use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\LoginController;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;

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

Route::get('/', function () {
    return view('home', [
        "title" => "HOME",
        "active" => "HOME"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "ABOUT",
        "active" => "ABOUT",
        "name" => "Yae Miko",
        "email" => "yae@gmail.com",
        "image" => "yae.png"
    ]);
});


Route::get('/posts', [PostController::class, 'index']);

// Halaman Sigle Post
Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'active' => "CATEGORIES",
        'categories' => Category::all()
    ]);
});

Route::get('categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'title' => " Post By Category: $category->name",
        'active' => "CATEGORIES",
        'posts' => $category->posts->load('category', 'author')
    ]);
});

Route::get('authors/{author:username}', function (User $author) {
    return view('posts', [
        'title' => "Post By Author: $author->name",
        'active' => "CATEGORIES",
        'posts' => $author->posts->load('category', 'author')
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');


Route::resource('/dashboard/posts/', DashboardPostController::class)->except([
    'show', 'destroy', 'edit', 'update',
])->middleware('auth');
// Detail
Route::get('/dashboard/posts/{post:slug}', [DashboardPostController::class, 'show'])->middleware('auth');
// Delete
Route::delete('/dashboard/posts/{post:slug}', [DashboardPostController::class, 'destroy'])->middleware('auth');
// Edit
Route::get('/dashboard/posts/{post:slug}/edit', [DashboardPostController::class, 'edit'])->middleware('auth');

Route::put('/dashboard/posts/{post:id}', [DashboardPostController::class, 'update'])->middleware('auth');

Route::resource('dashboard/categories', AdminCategoryController::class)->middleware('admin');
