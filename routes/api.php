<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BankaController;
use App\Http\Controllers\KorisnikController;

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

Route::resource('banke', BankaController::class)->only('index', 'show', 'destroy');
Route::resource('korisnici', KorisnikController::class)->only('index', 'show', 'update');


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
