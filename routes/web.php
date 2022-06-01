<?php

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
Route::get('/driver', [\App\Http\Controllers\DriverController::class, 'index']);
Route::get('/transport', [\App\Http\Controllers\TransportController::class, 'index']);
Route::get('/relation', [\App\Http\Controllers\RelationDrTrController::class, 'index']);



