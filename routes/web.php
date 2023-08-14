<?php

use App\Http\Controllers\CepController;
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

Route::get('/', [CepController::class, 'index'])->name('index');
Route::post('/consulta-cep', [CepController::class, 'consultaCep'])->name('consulta-cep');
Route::post('/export-csv', [CepController::class, 'exportCsv'])->name('export-csv');
Route::post('/limpar-tabela', [CepController::class, 'limparTabela'])->name('limpar-tabela');
