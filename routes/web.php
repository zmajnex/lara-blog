<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
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

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::resource('posts', PostController::class)->parameters([
    'posts' => 'post:slug',
]);
Route::resource('categories', CategoryController::class)->parameters([
    'categories' => 'category:category_name',
]);
Route::resource('tags', TagController::class)->parameters([
    'tags' => 'tag:tag_name',
]);

Route::get('admin/dash/', function () {
    return view('admin.dashboard');
})->name('dash');
Route::get('admin/settings/', function () {
    return view('admin.settings');
})->name('settings');
/*Route::get('admin/posts/', function () {
    return view('admin.posts');
})->name('admin-posts');*/
Route::get('admin/posts/', [PostController::class, 'indexAdmin'])->name('admin-posts');
