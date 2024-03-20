<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;  // 追記

Route::get('/', function () {
    return view('welcome');
});

Route::get( '/users/signin',        [UserController::class, 'signin'    ]);

Route::get( '/users',               [UserController::class, 'index'     ]);
Route::get( '/users/show/{usid}',   [UserController::class, 'show'      ]);
Route::get( '/users/add',           [UserController::class, 'add'       ]);
Route::post('/users/create',        [UserController::class, 'create'    ]);
Route::get( '/users/edit/{usid}',   [UserController::class, 'edit'      ]);
Route::post('/users/update',        [UserController::class, 'update'    ]);
Route::post('/users/delete',        [UserController::class, 'delete'    ]);
// Route::post('/users/delete/{usid}',       [UserController::class, 'delete'   ]);