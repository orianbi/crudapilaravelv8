<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\DosenController;
use App\Http\Controllers\API\MahasiswaController;

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
Route::get('dosen', [DosenController::class, 'index']);
Route::post('dosen/store', [DosenController::class, 'store']);

Route::get('mahasiswa', [MahasiswaController::class, 'index']);
Route::post('mahasiswa/store', [MahasiswaController::class, 'store']);
Route::get('mahasiswa/show/{id}', [MahasiswaController::class, 'show']);
Route::post('mahasiswa/update/{id}', [MahasiswaController::class, 'update']);
Route::get('mahasiswa/destroy/{id}', [MahasiswaController::class, 'destroy']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
