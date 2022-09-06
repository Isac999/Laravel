<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LogAcessoMiddleware;

/*
com middleware adicionado manualmente
Route::get('/', [\App\Http\Controllers\HomepageController::class, 'homepage'])
    ->name('site.index')
    ->middleware(LogAcessoMiddleware::class);
*/

Route::get('/', [\App\Http\Controllers\HomepageController::class, 'homepage'])->name('site.index')->middleware('log.acesso');

Route::get('/login', [\App\Http\Controllers\LoginController::class, 'login'])->name('site.login');
Route::post('/login', [\App\Http\Controllers\LoginController::class, 'insert'])->name('site.login');

Route::get('mensagem/{nome}/{comentario}', [\App\Http\Controllers\MensagemController::class, 'param']);

Route::prefix('/app')->group(function() {
    Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'admin'])
    ->name('app.admin')
    ->middleware('log.acesso','Autenticacao:parametro'); //encadeamento de middlewares
});

Route::fallback(function() {
    echo "Página não encontrada! <br/>";
    echo "<a href='".route('site.index')."'> Clique aqui para voltar para a página inicial. </a>";
});

/*
Route::get('/login/{nome}/{mensagem?}', function (string $nome, string $mensagem = 'mensagem não atribuida!') {
    echo "Login realizado com sucesso! <br/>";
    echo "Seja bem-vindo ".$nome."<br/>";
    echo "Essa é sua mensagem: ".$mensagem;
});

Route::redirect('paginaOrigem', 'paginaDestino');
*/
/*
Ao colocar a '?' após a variavel ela será uma variavel opcional;
No caso abaixo, as variaveis deverão ser passadas ou ocorrerá um erro;
Route::get('/login/{nome}/{idade}', function (string $nome, int $idade) {
    echo "Login realizado com sucesso! <br/>";
    echo "Seja bem-vindo ".$nome;
    echo "Você tem ".$idade. " anos?";
});
*/