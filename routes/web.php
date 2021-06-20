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

Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

use App\Http\Controllers\HomeController;  //Синтаксис для Laravel 8
Route::get('/', [ HomeController::class, 'index' ]);
Route::get('/aboutus', [ HomeController::class, 'aboutus' ]);

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


use App\Http\Controllers\ProductController;
  Route::group(['prefix' => '/products'], function() {
  Route::get('/', [ ProductController::class, 'index' ])->name('products.index');
  Route::get('/show/{product_id}', [ ProductController::class, 'show' ])->name('products.show');
  Route::get('/create', [ ProductController::class, 'create' ])->name('products.get.create');
  Route::post('/store', [ ProductController::class, 'store' ])->name('products.post.create');
  Route::get('/edit', [ ProductController::class, 'edit' ]);
  Route::get('/delete', [ ProductController::class, 'delete' ]);
});

use App\Http\Controllers\UserController;
Route::get('/users/login', [ UserController::class, 'login' ])->name('users.get.login');
Route::post('/users/profile', [ UserController::class, 'profile' ])->name('users.post.profile');
Route::get('/users/reg', [ UserController::class, 'reg' ])->name('users.get.reg');
Route::post('/users/store', [ UserController::class, 'store' ])->name('users.post.reg');
Route::get('/users/edit', [ UserController::class, 'edit' ]);
Route::get('/users/delete', [ UserController::class, 'delete' ]);

use App\Http\Controllers\FAQController;
Route::get('/faq', [ FAQController::class, 'index' ]);
Route::get('/faq/create', [ FAQController::class, 'create' ]);
Route::get('/faq/edit', [ FAQController::class, 'edit' ]);
Route::get('/faq/delete', [ FAQController::class, 'delete' ]);


/* 
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); */
