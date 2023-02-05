<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('users/profile', function () {
    return view('users/profile');
})->name('users/profile');

// _______________________________________________________

Route::get('/posts/{post}', function ( $id ) {
    $post = Post::findOrFail($id);
});