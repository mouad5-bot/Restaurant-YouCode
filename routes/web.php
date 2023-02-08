<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\User;


Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::get('users/profile/{user}', function (User $user) {
//     return view('users/profile', ['user'=>$user]);
// })->name('users/profile');
Route::get('users/profile/{user}', [UserController::class , 'show'])->name('users/profile');

// Route::get('/posts/{post}', function ( $id ) {
//     $post = Post::findOrFail($id);
// });

Route::get('users/profile/update', [UserController::class, 'update'])->name('users/profile/update');
Route::post('users/profile/update', [UserController::class, 'update'])->name('users/profile/update');

// Route::get('users/profile/{user}',  ['as' => 'users.edit', 'uses' => 'UserController@edit']);
// Route::patch('users/{user}/update',  ['as' => 'users.update', 'uses' => 'UserController@update']);
