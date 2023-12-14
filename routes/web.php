<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', function () {
    return view('user/index');
});
Route::get('/services', [UserController::class, 'services']);

Route::prefix('user')->middleware('auth','isUser')->group(function(){
    Route::get('/booktravel', [BookController::class, 'booktravel']);
    Route::get('/profile', [UserController::class, 'profile']);
});
Route::prefix('admin')->middleware('auth','isAdmin')->group(function(){
    Route::get('/', function () {
        return view('admin/index');
    });
    Route::get('/car', [CarController::class, 'index']);
    Route::post('/car', [CarController::class, 'store'])->name('car.store');
    Route::get('/car/edit/{id_mobil}', [CarController::class, 'edit'])->name('car.edit');
    Route::post('/car/update/{id_mobil}', [CarController::class, 'update'])->name('car.update');
    Route::get('/car/delete/{id_mobil}', [CarController::class, 'delete'])->name('car.delete');

    Route::get('/type', [TypeController::class, 'index'])->name('type.index');
    Route::post('/type', [TypeController::class, 'store'])->name('type.store');
    Route::get('/type/edit/{id_kategori}', [TypeController::class, 'edit'])->name('type.edit');
    Route::post('/type/update/{id_kategori}', [TypeController::class, 'update'])->name('type.update');
    Route::get('/type/delete/{id_kategori}', [TypeController::class, 'delete'])->name('type.delete');

    Route::get('/user', [UserController::class, 'index'])->name('user.index');
});
