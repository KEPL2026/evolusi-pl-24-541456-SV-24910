<?php

use App\Http\Controllers\PlantController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LahanController;
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

Route::resource('plantd', PlantController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/abt', function () {
    return view('abt', [
        'name'=> 'Antony sansan',
        'email'=> 'elgasing@gmail.com',
    ]);
});

Route::get('/abt', [PlantController::class, 'index'])->name('abt.index');

Route::get('/abt', [PlantController::class, 'store'])->name('plantd.store');

Route::resource('plants', PlantController::class);
Route::get('/abt', [PlantController::class, 'index'])->name('abt.index');

Route::get('/abt', [PlantController::class, 'index'])->name('abt.index');

Route::get('/abt/addu', [PlantController::class, 'create'])->name('addu');


Route::get('/abt/{id}/edit', [PlantController::class, 'edit'])->name('plantd.edit');


Route::delete('/abt/{id}', [PlantController::class, 'destroy'])->name('plantd.destroy');
