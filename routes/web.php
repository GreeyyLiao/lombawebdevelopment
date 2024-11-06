<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\StudentController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',[IndexController::class, "indexTampilan"]);
Route::get('/kontak',function(){
    return view('indexTampilan.contact');
});
Route::get('/beranda',function(){
    return view('indexTampilan.beranda');
});

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/storeLogin', [AuthController::class, 'storeLogin']);
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/storeRegister', [AuthController::class, 'storeRegister']);

Route::middleware('auth')->group(function(){
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::middleware('checkUserLogin')->group(function(){
        Route::middleware('is.user')->group(function(){
            Route::get('/user', [UsersController::class, 'index']);
            Route::get('/{userID}/create', [UsersController::class, 'createLaporan']);
            Route::post('/{userID}/store', [UsersController::class, 'storeLaporan']);
            Route::get('/{reportID}/edit', [UsersController::class, 'edit']);
            Route::post('/{reportID}/update', [UsersController::class, 'update']);
            Route::get('/{reportID}/delete', [UsersController::class, 'delete']);
        });

        Route::middleware('is.admin')->group(function(){
            Route::get('/admin', [AdminController::class, 'index']);
            Route::get('/{reportID}/editAdmin', [AdminController::class, 'edit']);
            Route::post('/{reportID}/updateAdmin', [AdminController::class, 'update']);
            Route::get('/{reportID}/deleteAdmin', [AdminController::class, 'delete']);
        });
    });
});



