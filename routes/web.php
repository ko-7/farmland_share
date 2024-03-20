<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;  // 追記

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get(  '/users/signin',        [UserController::class, 'signinGet'  ]);
Route::post( '/users/signin',        [UserController::class, 'signinPost' ]);
Route::get(  '/users/signup',        [UserController::class, 'signupGet'  ]);
Route::post( '/users/signup',        [UserController::class, 'signupPost' ]);

Route::get( '/',                    [UserController::class, 'index'     ]);
Route::get( '/users',               [UserController::class, 'index'     ]);
Route::get( '/users/show/{usid}',   [UserController::class, 'show'      ]);
Route::get( '/users/addGet',        [UserController::class, 'addGet'    ]);
Route::post('/users/addPost',       [UserController::class, 'addPost'   ]);
Route::get( '/users/edit/{usid}',   [UserController::class, 'editGet'   ]);
Route::post('/users/edit',          [UserController::class, 'editPost'  ]);
Route::post('/users/delete',        [UserController::class, 'delete'    ]);

require __DIR__.'/auth.php';
