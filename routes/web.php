<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PendudukController;
use App\Http\Controllers\KelahiranController;
use App\Http\Controllers\KematianController;
use App\Http\Controllers\PerpindahanController;


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
    


    return view('welcome');
});

//data penduduk
Route::get('/penduduk',[PendudukController::class, 'index' ])->name('penduduk')->middleware('auth');
Route::get('/tambahpenduduk',[PendudukController::class, 'tambahpenduduk' ])->name('tambahpenduduk');
Route::post('/insertpenduduk',[PendudukController::class, 'insertpenduduk' ])->name('insertpenduduk');
Route::get('/tampilkandata/{id}',[PendudukController::class, 'tampilkandata' ])->name('tampilkandata');
Route::get('/detail_penduduk/{id}',[PendudukController::class, 'detail_penduduk' ])->name('detail_penduduk');

//data kelahiran
Route::get('/kelahiran',[KelahiranController::class, 'index' ])->name('kelahiran')->middleware('auth');
Route::get('/tambahkelahiran',[KelahiranController::class, 'tambahkelahiran' ])->name('tambahkelahiran');
Route::post('/insertkelahiran',[KelahiranController::class, 'insertkelahiran' ])->name('insertkelahiran');
Route::get('/tampilkandata/{id}',[KelahiranController::class, 'tampilkandata' ])->name('tampilkandata');

//data kematian
Route::get('/kematian',[KematianController::class, 'index' ])->name('kematian')->middleware('auth');
Route::get('/tambahkematian',[KematianController::class, 'tambahkematian' ])->name('tambahkematian');
Route::post('/insertkelahiran',[KematianController::class, 'insertkematian' ])->name('insertkematian');
Route::get('/tampilkandata/{id}',[KematianController::class, 'tampilkandata' ])->name('tampilkandata');

//data perpindahan
Route::get('/perpindahan',[PerpindahanController::class, 'index' ])->name('perpindahan')->middleware('auth');
Route::get('/tambahperpindahan',[PerpindahanController::class, 'tambahperpindahan' ])->name('tambahperpindahan');
Route::post('/insertperpindahan',[PerpindahanController::class, 'insertperpindahan' ])->name('insertperpindahan');
Route::get('/tampilkandata/{id}',[PerpindahanController::class, 'tampilkandata' ])->name('tampilkandata');


Route::get('/login',[App\Http\Controllers\LoginController::class, 'login' ])->name('login');
Route::post('/loginproses',[App\Http\Controllers\LoginController::class, 'loginproses' ])->name('loginproses');


//menampilkan view register
Route::get('/register',[App\Http\Controllers\LoginController::class, 'register' ])->name('register');
//menyimpan data kedalam database
Route::post('/registeruser',[App\Http\Controllers\LoginController::class, 'registeruser' ])->name('registeruser');

Route::get('/logout',[App\Http\Controllers\LoginController::class, 'logout' ])->name('logout');