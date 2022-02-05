<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

// Route::group(['middleware' => ['auth']], function() {
//     Route::resource('users', UserController::class);
//     Route::resource('roles', RoleController::class);
//     Route::resource('permissions', PermissionController::class);
//     Route::resource('products', ProductController::class);
// });

Route::group(['prefix'=>'employee','middleware'=>['auth','role:employee']], function () { 
    Route::resource('product', ProductController::class);
});

Route::group(['prefix'=>'admin','middleware'=>['auth','role:admin']], function () { 

    Route::resource('users', UserController::class);
    Route::resource('roles', RoleController::class);
    Route::resource('permissions', PermissionController::class);
    Route::resource('product', ProductController::class);

});

