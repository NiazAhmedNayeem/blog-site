<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserAuthController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/blog-detail/{id}', [HomeController::class, 'detail'])->name('blog.detail');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/add-blog', [BlogController::class, 'index'])->name('add.blog');
    Route::get('/manage-blog', [BlogController::class, 'manage'])->name('manage.blog');
    Route::get('/detail-blog/{id}', [BlogController::class, 'detail'])->name('detail.blog');
    Route::post('/create-blog', [BlogController::class, 'create'])->name('create.blog');
    Route::get('/edit-blog/{id}', [BlogController::class, 'edit'])->name('edit.blog');
    Route::get('/update-status-blog{id}', [BlogController::class, 'updateStatus'])->name('update.status-blog');
    Route::post('/update-blog/{id}', [BlogController::class, 'update'])->name('update.blog');
    Route::get('/delete-blog/{id}', [BlogController::class, 'delete'])->name('delete.blog');


    Route::get('/add-user', [UserAuthController::class, 'index'])->name('add.user');
    Route::post('/create-user', [UserAuthController::class, 'create'])->name('create.user');
    Route::get('/manage-user', [UserAuthController::class, 'manage'])->name('manage.user');


});


