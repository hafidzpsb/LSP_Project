<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\CarterController;
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

Route::prefix('/user')->middleware('auth','isUser')->group(function(){
    Route::get('/booktravel', [BookController::class, 'booktravel']);
    Route::get('/profile', [UserController::class, 'profile']);
    Route::get('/updateprofile', [UserController::class, 'updateprof']);
    Route::put('/saveupdate', [UserController::class, 'save']);

    Route::get('/updatepw', [UserController::class, 'updatepw']);
    Route::put('/updatepassword', [UserController::class, 'updatepassword']);

    Route::get('/bookcarter', [CarterController::class, 'bookcarter']);
    Route::get('/{id_mobil}', [CarterController::class, 'sewa_create']);
    Route::post('/{id_carter}', [CarterController::class, 'sewa']);
    Route::get('/riwayat/index', [CarterController::class, 'riwayat']);
    Route::post('/pengembalian/{id_carter}', [CarterController::class, 'pengembalian']);
});




Route::prefix('admin')->middleware('auth','isAdmin')->group(function(){

    Route::get('/', [AdminController::class, 'index']);
    Route::get('/adduser', [AdminController::class, 'adduser']);
    Route::post('/addusr', [AdminController::class, 'addusr']);
    Route::delete('/deleteuser/{id}', [AdminController::class, 'deleteuser']);
    Route::post('/updateuser/{id}', [AdminController::class, 'updateuser']);
    Route::post('updateuser/saveupdateuser/{id}', [AdminController::class, 'saveupdate']);

    Route::get('/car/create', [CarController::class, 'create']);
    Route::post('/car/store', [CarController::class, 'store']);
    Route::get('/car/edit/{id_mobil}', [CarController::class, 'edit']);
    Route::post('/car/update/{id_mobil}', [CarController::class, 'update']);
    Route::get('/car/delete/{id_mobil}', [CarController::class, 'delete']);

    Route::post('/carter/konfirmasi_pengembalian/{id_carter}', [CarterController::class, 'konfirmasi_pengembalian']);
    Route::get('/carter/delete/{id_carter}', [CarterController::class, 'delete']);

    Route::get('/type', [TypeController::class, 'index'])->name('type.index');
    Route::post('/type', [TypeController::class, 'store'])->name('type.store');
    Route::get('/type/edit/{id_kategori}', [TypeController::class, 'edit'])->name('type.edit');
    Route::post('/type/update/{id_kategori}', [TypeController::class, 'update'])->name('type.update');
    Route::get('/type/delete/{id_kategori}', [TypeController::class, 'delete'])->name('type.delete');

    Route::get('/user', [UserController::class, 'index'])->name('user.index');
});
