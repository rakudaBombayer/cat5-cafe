<?php

use App\Http\Controllers\Admin\AdminBlogController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});


// お問い合わせフォーム
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'sendMail']);
Route::get('/contact/complete', [ContactController::class, 'complete'])->name('contact.complete');

//ブログ
Route::get('/admin/blogs',[AdminBlogController::class, 'index'])->name(name: 'admin.blogs.index');
Route::get('/admin/blogs/create',[AdminBlogController::class, 'create'])->name(name: 'admin.blogs.create');
Route::post('/admin/blogs',[AdminBlogController::class, 'store'])->name(name: 'admin.blogs.store');