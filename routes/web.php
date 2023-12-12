<?php

use Illuminate\Support\Facades\Route;

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
});
Route::prefix('user')->group(function () { // routing uuntuk user tipe non admin
    Route::get('/', function () {
        return view('user/index');
    });
});