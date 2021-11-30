<?php

use App\Models\Category;
use App\Models\Post;
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
});

Route::get('/posts', function () {
    //dd(Post::paginate(5)->all());
    return view('posts',['articles'=> Post::all()]);
})->name('posts');

Route::get('/{post:slug}', function (Post $post ) {
    return view('post',['post'=>$post]);
})->name('post');

// Get all posts in category
Route::get('categories/{category:category_name}', function (Category $category ) {
    return view('posts',['articles'=>$category->posts]);
})->name('categories');
