<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bestellingController;

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


Route::get('/bestelling', [App\Http\Controllers\bestellingController::class, 'index'])->name('create-bestelling');
Route::post('/create-bestelling', [App\Http\Controllers\bestellingController::class, 'createGerecht'])->name('process-create-gerecht');