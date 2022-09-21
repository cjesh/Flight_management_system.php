<?php

use App\Http\Controllers\PageController;
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

Route::get('/', [PageController::class,'welcome']);
Route::get('/flight1', [PageController::class,'flight2']);
Route::get('/create', [PageController::class,'create']);
Route::post('/create', [PageController::class,'store']);


