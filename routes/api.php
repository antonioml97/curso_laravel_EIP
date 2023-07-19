<?php

use App\Http\Controllers\CochesController;
use App\Http\Middleware\miPrimerMiddeleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/showCochesAPI', [CochesController::class , 'showCochesAPI']);
Route::get('/showCochesAPIID/{id}', [CochesController::class , 'showCochesAPIID']);
Route::post('/showCochesAPIID_POST', [CochesController::class , 'showCochesAPIID_POST']);


Route::post('/addCarAPI', [CochesController::class , 'addCarAPI'])->middleware(miPrimerMiddeleware::class);

Route::post('/findBrand' , [CochesController::class , 'findBrand'])->middleware(miPrimerMiddeleware::class);

