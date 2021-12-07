<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
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

Route::get('/posts', function () {
    return view('posts',['articles'=> Post::all()]);
})->name('posts');

Route::get('/{post:slug}', function (Post $post ) {

    return view('post',['post'=>$post]);
})->name('post');

// Get all posts in category
Route::get('/categories/{category:category_name}', function (Category $category ) {
    return view('posts',['articles'=>$category->posts]);
})->name('categories');
// Get all post tagged
Route::get('/tags/{tag:tag_name}', function (Tag $tag ) {
    return view('posts',['articles'=>$tag->post]);
})->name('tags');

Route::get('admin/dash/', function () {
    return view('admin.dashboard');
})->name('dash');
