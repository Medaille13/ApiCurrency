<?php

use App\Http\Controllers\AuthController;
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

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('privateInformations', function () {
    return response()->json([
        'information' => 'Hello World!'
    ]);
})
->middleware('auth:sanctum');*/

//partie admin
//Route::post('api/admin/',"App\Http\Controllers\AdminController@read")->name("admininscription");
//Route::post('api/admin/connect',"App\Http\Controllers\AdminController@inscription")->name("adminconnect");

//youtube
Route::post('login', [AuthController::class, 'authenticate']);

Route::get('dashboard', [AuthController::class, 'dashboard'])
    ->middleware('auth:sanctum');