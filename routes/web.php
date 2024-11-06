<?php
use App\Http\Controllers\GrupoEconomicoController;
use App\Http\Controllers\BandeiraController;
use App\Http\Controllers\UnidadeController;
use App\Http\Controllers\ColaboradorController;
use Illuminate\Routing\Route;

Route::get('/', function () {
    return view('welcome');
});

// Rotas para Grupo Econômico
Route::resource('grupos', GrupoEconomicoController::class);

// Rotas para Bandeira
Route::resource('bandeiras', BandeiraController::class);

// Rotas para Unidade
Route::resource('unidades', UnidadeController::class);

// Rotas para Colaborador
Route::resource('colaboradores', ColaboradorController::class);


?>
