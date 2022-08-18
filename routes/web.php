<?php

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

Route::get('/', [\App\Http\Controllers\HomepageController::class, 'homepage'])->name('site.index');

Route::get('/login', [\App\Http\Controllers\LoginController::class, 'login'])->name('site.login');

Route::prefix('/app')->group(function() {
    Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'admin'])->name('app.admin');
});

/*
Route::get('/login/{nome}/{mensagem?}', function (string $nome, string $mensagem = 'mensagem não atribuida!') {
    echo "Login realizado com sucesso! <br/>";
    echo "Seja bem-vindo ".$nome."<br/>";
    echo "Essa é sua mensagem: ".$mensagem;
});
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