<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('index');
});
Route::prefix('admin')->group(function () { // routing uuntuk user tipe admin
    Route::get('/', function () {
        return view('admin/index');
    });
    Route::get('/car', [CarController::class, 'index'])->name('car.index');
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
    Route::post('/user', [TypeController::class, 'store'])->name('type.store');
    Route::get('/user/edit/{id_kategori}', [TypeController::class, 'edit'])->name('type.edit');
    Route::post('/user/update/{id_kategori}', [TypeController::class, 'update'])->name('type.update');
    Route::get('/user/delete/{id_kategori}', [TypeController::class, 'delete'])->name('type.delete');
});
Route::prefix('user')->group(function () { // routing uuntuk user tipe non admin
    Route::get('/', function () {
        return view('user/index');
    });
});