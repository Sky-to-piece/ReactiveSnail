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
    return view('main_page');
});
Route::get('/driver', [\App\Http\Controllers\DriverController::class, 'index']);
Route::get('/driver/create', [\App\Http\Controllers\DriverController::class, 'create']);
Route::get('/driver/update', [\App\Http\Controllers\DriverController::class, 'update']);
Route::get('/driver/delete', [\App\Http\Controllers\DriverController::class, 'delete']);
Route::get('/driver/restore', [\App\Http\Controllers\DriverController::class, 'restore']);
Route::get('/driver/first_or_create', [\App\Http\Controllers\DriverController::class, 'firstOrCreate']);
Route::get('/driver/update_or_create', [\App\Http\Controllers\DriverController::class, 'updateOrCreate']);
Route::get('/transport', [\App\Http\Controllers\TransportController::class, 'index']);
Route::get('/relation', [\App\Http\Controllers\RelationDrTrController::class, 'index']);




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
