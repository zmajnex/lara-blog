<?php

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
Route::get('/posts', function (Post $post) {
    $articles = Post::paginate(5);
    return view('posts',['articles'=>$articles]);
})->name('posts');
Route::get('/{post:slug}', function (Post $post ) {
    //$post = Post::find($id);
    return view('post',['post'=>$post]);
})->name('post');
