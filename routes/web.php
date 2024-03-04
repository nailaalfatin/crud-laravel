<?php

use App\Http\Controllers\FruitController;
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

Route::controller(FruitController::class)->group(function() {
    Route::get('/fruit', 'index')->name('buah.index');
    Route::get('/fruit/tambah', 'create')->name('buah.tambah');
    Route::post('/fruit/tambah/store', 'store')->name('buah.store');
    Route::get('/fruit/show/{id}', 'show')->name('buah.show');
    Route::get('/fruit/edit/{id}', 'edit')->name('buah.edit');
    Route::put('/fruit/update/{id}', 'update')->name('buah.update');
    Route::get('/fruit/delete/{id}', 'destroy')->name('buah.destroy');
});
