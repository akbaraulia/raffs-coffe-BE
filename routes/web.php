<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Auth\Events\Logout;

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

Route::get('/bacot-sia', function () {
    return view('_index');
});

Route::get('/detail-product', function () {
    return view('detail-product');
});

Route::resource('login', LoginController::class);
Route::get('/logout', [LoginController::class, 'logout']);


Route::middleware('login')->group(function() {
    Route::get('/admin', function() {
        return view('admin.index');
    })->middleware('admin')->name('admin.index');
    Route::resource('admin/register', RegisterController::class)->middleware('admin');

    // Route::get('/belidong', function() {
    //     $menu = Menu::latest()->simplePaginate(5);
        
    //     return view('user.belidong.index',  ['menu' => $menu]);
    // })->middleware('user')->name('daftarmenu.index');
    
    Route::get('/kasir', function() {
        return view('kasir.index');
    })->middleware('kasir')->name('kasir.index');
    // Route::resource('kasir/menu', MenuController::class)->middleware('kasir');
    // Route::get('/kasir/laporan', function() {
    //     return view('kasir.laporan.index');
    // })->middleware('kasir');
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