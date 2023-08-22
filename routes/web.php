<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\convertYT as convert;

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

Route::get('/', [convert::class, 'index'])->name('home');

Route::get('convert-video', [convert::class, 'convert'])->name('convert.video');
