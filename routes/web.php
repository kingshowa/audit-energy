<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\VentilationController;

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
    return view('create-ventilation');
});

Route::get('/ventilations', [VentilationController::class, 'index']);
Route::get('/ventilation/{id}', [VentilationController::class, 'getVentilationById']);
Route::post('/ventilation', [VentilationController::class, 'createVentilation'])->name('ventilation');
;
