<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\PostsController;


Route::get('/', function () {
    return view('welcome');
});

Route::group([
    'prefix' => 'posts',
    'as' => 'posts.',
], function () {
    
    Route::get('/', [PostsController::class, 'index'])->name('index');

    Route::get('/profile', [PostsController::class, 'profile'])->name('profile');

    Route::get('/create', [PostsController::class, 'create'])->name('posts.create');

    Route::post('/store', [PostsController::class, 'store'])->name('posts.store');

    Route::get('/{id}', [PostsController::class, 'show'])->name('posts.show');

});

