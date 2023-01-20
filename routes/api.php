<?php

use App\Http\Controllers\AutentifikacijaApiController;
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

Route::resource('banke', BankaController::class)->only('index', 'show');
Route::resource('korisnici', KorisnikController::class)->only('index', 'show');
Route::post('registracija', [AutentifikacijaApiController::class, 'register']);
Route::post('login', [AutentifikacijaApiController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('logout', [AutentifikacijaApiController::class, 'logout']);
    Route::resource('korisnici', KorisnikController::class)->only('update');
    Route::resource('banke', BankaController::class)->only('destroy');
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
