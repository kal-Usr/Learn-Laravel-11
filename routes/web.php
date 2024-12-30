<?php

use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

$movies = [];

Route::group([
    // 'prefix'     => 'movie',
    'as'         => 'movie.'
], function () use ($movies) {

    Route::get('/movie', [MovieController::class, 'index']);

    Route::get('/movie/{id}', [MovieController::class, 'show']);

    Route::post('/movie',[MovieController::class, 'store']);

    Route::put('/movie/{id}', [MovieController::class, 'update']);

    Route::patch('/movie/{id}',[MovieController::class, 'update']);

    Route::delete('/movie/{id}', [MovieController::class, 'destroy']);

      
});



Route::get('/pricing-member', function () {
  return 'Silahkan bergabung member untuk bisa mengakses';
});

Route::get('/login', function () {
  return 'Login Page';
})->name('login');
