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
    Route::get('/type', [TypeController::class, 'index'])->name('type.index');
    Route::get('/user', [UserController::class, 'index'])->name('user.index');
});
Route::prefix('user')->group(function () { // routing uuntuk user tipe non admin
    Route::get('/', function () {
        return view('user/index');
    });
});