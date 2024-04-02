<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PrincipalController;
use \App\Http\Controllers\SobreNosController;
use \App\Http\Controllers\ContatoController;
use \App\Http\Controllers\TesteController;
use \App\Http\Controllers\FornecedorController;

// Verbos http
// get
// post
// put
// patch
// delete
// options

//recebe um uri '/' , e recebe um funcao callback com parametros
//Route::get($uri, $callback)

//Route::get('/', function () {
//    return 'Olá seja bem vindo ao curso!';
//});

Route::get('/', [PrincipalController::class, 'principal'])
    ->name('site.index');

Route::get('/sobre-nos',[SobreNosController::class,'sobreNos'])
    ->name('site.sobrenos');

Route::get('/contato',[ContatoController::class,'contato'])
    ->name('site.contato');

Route::get('/login', function() { return 'Login'; })
    ->name('site.login');

//app
Route::prefix('/app')->group(function() {
    Route::get('/clientes', function() { return 'Clientes'; })->name('app.clientes');
    Route::get('/fornecedores', [FornecedorController::class,'index'])->name('app.fornecedores');
    Route::get('/produtos', function() { return 'Produtos'; })->name('app.produtos');
});

Route::get('/teste/{p1}/{p2}', [TesteController::class, 'teste']);

Route::fallback(function() {
    echo "A rota acessada não existe. <a href='" . route('site.index') . "'>Clique aqui!</a> para ser direcionado a página principal";
});
