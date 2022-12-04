<?php

use App\Http\Controllers\MarkerController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::prefix('markers')->middleware(['auth'])->group(function () {
    Route::get('/', [MarkerController::class, 'index'])->name('markers');
    Route::get('/create', [MarkerController::class, 'create'])->name('markers-create');
    Route::post('/store', [MarkerController::class, 'store'])->name('markers-store');
    Route::delete('/delete/{marker}', [MarkerController::class, 'destroy'])->name('markers-delete');
});

require __DIR__.'/auth.php';
