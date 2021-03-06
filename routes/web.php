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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
Route::group(['middleware' => 'auth'], function () {
    Route::get('/menu', [App\Http\Controllers\MenuController::class, 'index'])->name('menu.index');
    Route::get('/menuadd', [App\Http\Controllers\MenuController::class, 'create'])->name('menu.add');
    Route::post('/menustore', [App\Http\Controllers\MenuController::class, 'store'])->name('menu.store');
});