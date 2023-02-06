<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;


Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('users/profile', function () {
    return view('users/profile');
})->name('users/profile');

Route::get('/posts/{post}', function ( $id ) {
    $post = Post::findOrFail($id);
});


Route::resource('posts', PostController::class)->except([
    'index',
]);