<?php

use App\Http\Controllers\InvestorController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

// direciona para a função de cadastar
Route::post('/investors', [InvestorController::class, 'store'])->name('investors.store');
// direciona para a função de listar todos
Route::get('/investors/showall', [InvestorController::class, 'showall'])->name('investors.showall');
// direciona para a função de exibir determinado dado
Route::get('/investors/{id}', [InvestorController::class, 'show'])->name('investors.show');
// direciona para a função de alterar
Route::put('/investors/{id}', [InvestorController::class, 'update'])->name('investors.update');
// direciona para a função de deletar
Route::delete('/investors/{id}', [InvestorController::class, 'destroy'])->name('investors.delete');