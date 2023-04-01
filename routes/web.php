<?php

use App\Http\Controllers\ContohController;
use App\Http\Controllers\PegawaiController;
use Illuminate\Support\Facades\Route;

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

Route::get('/contoh', function () {
    return view('contoh');
});

Route::resource('contoh', ContohController::class);
Route::resource('pegawai', PegawaiController::class);
//Route get => pegawai => index
//Route get => pegawai/create => create
//Route Post => pegawai => store
//Route get => pegawai/{id} => show
//Route put/patch => pegawai/{id} => update
//Route delete => pegawai/{id} => delete  