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

/*Route::get('/', function () {
    return view('welcome');
});*/

//Route::get('/posts', 'HomeController@posts'); *Синтаксис до Laravel 8*
/*Так как у меня установилась 8-версия Laravel, пришлось писать по новому синтаксису*/

/* Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); */

use App\Http\Controllers\HomeController;  
Route::get('/', [ HomeController::class, 'index' ])->name('main');
Route::get('/aboutus', [ HomeController::class, 'aboutus' ]);

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
Route::group(['prefix' => '/auth'], function () {
    Route::get('/registration', [ RegisterController::class, 'getRegister' ])->name('auth.get.register');
    Route::post('/registration', [ RegisterController::class, 'postRegister' ])->name('auth.post.register');
    Route::get('/login', [ LoginController::class, 'getLogin' ])->name('auth.get.login');
    Route::post('/login', [ LoginController::class, 'postLogin' ])->name('auth.post.login');
    Route::get('/logout', [ LoginController::class, 'Logout' ])->name('auth.logout');
});

use App\Http\Controllers\PostController;
Route::group(['prefix' => '/posts'], function () {
    Route::get('/', [ PostController::class, 'index' ])->name('posts.index');
    Route::get('/show/{post_id}', [ PostController::class, 'show' ])->name('posts.show');
    Route::get('/create', [ PostController::class, 'create' ])->name('posts.get.create');
    Route::post('/', [ PostController::class, 'store' ])->name('posts.post.create');
    Route::get('/update/{post_id}', [ PostController::class, 'update' ])->name('posts.get.update');
    Route::post('/update/{post_id}', [ PostController::class, 'restore' ])->name('posts.post.update');
    Route::get('/delete/{post_id}', [ PostController::class, 'delete' ])->name('posts.delete');
});

use App\Http\Controllers\CommentController;
Route::group(['prefix' => '/comments'], function () {
    Route::post('/', [ CommentController::class, 'store' ])->name('comments.create');
    Route::get('/update/{comment_id}', [ CommentController::class, 'update' ])->name('comments.get.update');
    Route::post('/update/{comment_id}', [ CommentController::class, 'restore' ])->name('comments.post.update');
    Route::get('/delete/{comment_id}/{post_id}', [ CommentController::class, 'delete' ])->name('comments.delete');
});

use App\Http\Controllers\CategoryController;
Route::get('/categories', [ CategoryController::class, 'index' ])->name('categories.index');
Route::get('/categories/show/{category_id}', [ CategoryController::class, 'show' ])->name('categories.show');
Route::get('/categories/create', [ CategoryController::class, 'create' ])->name('categories.get.create');
Route::post('/categories', [ CategoryController::class, 'store' ])->name('categories.post.create');
Route::get('/categories/update/{category_id}', [ CategoryController::class, 'update' ])->name('categories.get.update');
Route::post('/categories/update/{category_id}', [ CategoryController::class, 'restore' ])->name('categories.post.update');
Route::get('/categories/delete/{category_id}', [ CategoryController::class, 'delete' ])->name('categories.delete');

/* use App\Http\Controllers\UserController;
Route::group(['prefix' => '/users'], function () {
    Route::get('/', [ UserController::class, 'index' ])->name('users.index');
    Route::get('/show/{user_id}', [ UserController::class, 'show' ])->name('users.show');
    Route::get('/create', [ UserController::class, 'create' ])->name('users.get.create');
    Route::post('/', [ UserController::class, 'store' ])->name('users.post.create');
    Route::get('/update/{user_id}', [ UserController::class, 'update' ])->name('users.get.update');
    Route::post('/update/{user_id}', [ UserController::class, 'restore' ])->name('users.post.update');
    Route::get('/delete/{user_id}', [ UserController::class, 'delete' ])->name('users.delete');
}); */

/* use App\Http\Controllers\UserController;
Route::get('/users', [ UserController::class, 'index' ])->name('users.index');
Route::get('/users/login', [ UserController::class, 'login' ])->name('users.get.login');
Route::post('/users/profile', [ UserController::class, 'profile' ])->name('users.post.profile');
Route::get('/users/reg', [ UserController::class, 'reg' ])->name('users.get.reg');
Route::post('/users/store', [ UserController::class, 'store' ])->name('users.post.reg');
Route::get('/users/edit', [ UserController::class, 'edit' ]);
Route::get('/users/delete', [ UserController::class, 'delete' ]); */


use App\Http\Controllers\FAQController;
Route::get('/faq', [ FAQController::class, 'index' ]);
Route::get('/faq/create', [ FAQController::class, 'create' ]);
Route::get('/faq/edit', [ FAQController::class, 'edit' ]);
Route::get('/faq/delete', [ FAQController::class, 'delete' ]);
