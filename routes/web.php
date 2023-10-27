<?php

use App\Http\Controllers\Soal2Controller;
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
    return view('welcome');
});

Route::get('/soal1', function () {
    return view('Soal.Soal1');
});

Route::get('/soal2', [Soal2Controller::class, 'index']);
