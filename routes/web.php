<?php

use App\Http\Controllers\CochesController;
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


Route::get('/cambiarCoche', [CochesController::class,'updateCoche']);
Route::get('/deleteCoche', [CochesController::class,'deleteCoche']);
Route::get('/formAddCar', [CochesController::class,'showFormularioAddCoche']);

Route::post('/addCoche', [CochesController::class,'addCocheFormulario'])->name('addCoche') ;
Route::get('/showCoches', [CochesController::class, 'showAllCoches'])->name('showCoches');

Route::get('/deleteCar/{id}' , [CochesController::class, 'deleteCar'])->name('deleteCar');

Route::get('/updateCarForm/{id}' , [CochesController::class, 'updateCarForm'])->name('updateCarForm');
Route::post('/updateCar' , [CochesController::class, 'updateCar'])->name('updateCar');

Route::get('/pruebas' , [CochesController::class, 'showPrueba'] );

Route::post('/showAllCochesBrand', [CochesController::class, 'showAllCochesBrand'])->name('showAllCochesBrand');
Route::post('/showAllCochesPower', [CochesController::class, 'showAllCochesPower'])->name('showAllCochesPower');
Route::post('/showAllCochesPowerIntervalo', [CochesController::class, 'showAllCochesPowerIntervalo'])->name('showAllCochesPowerIntervalo');

Route::get('/primerComponente', function () {
    return view('primerComponente');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
