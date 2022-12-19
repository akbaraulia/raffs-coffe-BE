<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Auth\Events\Logout;
use App\Models\Menu;


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

Route::get('/', function () {
    return view('index');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/order-kamu', function () {
    return view('order-kamu');
});

Route::get('/takeaway', function () {
    return view('_index');
});

Route::get('/detail-product', function () {
    return view('detail-product');
});

Route::resource('login', LoginController::class);
Route::get('/logout', [LoginController::class, 'logout']);


Route::middleware('login')->group(function() {
    Route::get('/admin', function() {
        return view('pages.admin.index');
    })->middleware('admin')->name('admin.index');
    Route::resource('register', RegisterController::class)->middleware('admin');
    Route::resource('userview', UserController::class)->middleware('admin');
    Route::resource('profile', ProfileController::class)->middleware('admin');
    // Route::resource('register', RegisterController::class)->middleware('admin');

    // Route::resource('admin.register', 'RegisterController');
    // Route::PUT('admin/register/edit/{id}', 'RegisterController@update')->middleware('admin');
    // Route::put('admin/register/edit/{id}','RegisterController@update');

    Route::get('/kasir', function() {
        return view('pages.kasir.index');
    })->middleware('kasir')->name('kasir.index');
    Route::resource('menu', MenuController::class)->middleware('kasir');
    Route::resource('menu', MenuController::class)->middleware('kasir');
    Route::get('/kasir/laporan', function() {
        return view('pages.kasir.laporan.index');
    })->middleware('kasir');
    // Route::get('/get-transaksi', [TransaksiController::class, 'filtering']); 

    // Route::get('/transaksi_pdf', [TransaksiController::class, 'cetak_pdf'])->middleware('kasir');


    // route untuk dashboard User
    Route::get('/user', function() {
        return view('user.index');
    })->middleware('user')->name('user.index');
    
    // Route::get('/user', function() {
    //     return view('user.index');
    // })->middleware('user')->name('user.index');
    // Route::resource('user/pembelian', TransaksiController::class)->middleware('user');
});