<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('mahasiswa', 'App\Http\Controllers\API\MahasiswaController@index');
Route::post('mahasiswa/store', 'App\Http\Controllers\API\MahasiswaController@store');
Route::get('mahasiswa/show/{id}', 'App\Http\Controllers\API\MahasiswaController@show');
Route::post('mahasiswa/update/{id}', 'App\Http\Controllers\API\MahasiswaController@update');
Route::delete('mahasiswa/delete/{id}', 'App\Http\Controllers\API\MahasiswaController@destroy');
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
