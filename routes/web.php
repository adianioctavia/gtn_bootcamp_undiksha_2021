<?php

use App\Http\Controllers\Produksi\Produksi;
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

Route::get('/', [Produksi::class, "index"])
    ->name('produksi');

Route::post('dataTable', [Produksi::class, "dataTable"])
    ->name('dataTable');
