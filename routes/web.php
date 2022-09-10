<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\FrontendController;

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('wellcome');

Auth::routes();
Route::middleware('auth')->group(function(){
    
    Route::get('/post', [App\Http\Controllers\PostController::class, 'index'])->name('post');
    Route::get('/post-create', [App\Http\Controllers\PostController::class, 'create'])->name('create-post');
    Route::post('/post-store', [App\Http\Controllers\PostController::class, 'store'])->name('create-store');
    Route::get('edit-post-{id}', [App\Http\Controllers\PostController::class, 'edit'])->name('edit');
    Route::put('update-post/{id}', [App\Http\Controllers\PostController::class, 'update'])->name('update');
    Route::get('delete-post/{id}', [App\Http\Controllers\PostController::class, 'delete'])->name('delete-post');
    Route::get('post/{slug}', [App\Http\Controllers\PostController::class, 'slug'])->name('post-slug');
});




