<?php

use App\Http\Controllers\Api\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\MarkerController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/auth/login', [AuthController::class, 'loginUser']);

Route::prefix('markers')->group(function () {
    Route::get('/', [MarkerController::class, 'index'])->name('api-markers');
    Route::middleware('auth:sanctum')->group(function () {
        Route::get('/search/{marker:mobile}', [MarkerController::class, 'search'])->name('api-markers-search');
        Route::post('/store', [MarkerController::class, 'store'])->name('api-markers-store');
        Route::delete('/delete/{marker}', [MarkerController::class, 'destroy'])->name('api-markers-delete');
    });
});
