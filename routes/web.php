<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ParticipanteController;

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
    return view('home');
});

Route::post('/register', [ParticipanteController::class, 'store'])->name('register');
Route::get('/register', [ParticipanteController::class, 'cargarDepartamento'])->name('cargar.departamento');
Route::get('/municipios/{departamento}', [ParticipanteController::class, 'municipiosPorDepartamento'])->name('municipios.por.departamento');
Route::get('/exportar-participantes', [ParticipanteController::class, 'exportarParticipantes'])->name('exportar.participantes');

