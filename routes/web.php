<?php

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

use App\Http\Controllers\ClienteControlador;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

//Rotas com controlador
Route::get('produtos', 'App\Http\Controllers\MeuControlador@produtos');
Route::get('nome', 'App\Http\Controllers\MeuControlador@getNome');
Route::get('multiplicar/{n1}/{n2}', 'App\Http\Controllers\MeuControlador@multiplicar');

Route::resource('clientes', ClienteControlador::class);


/* Trabalhando com Rotas */

// Route::get('/rotaTeste', function () {
//     echo "Rota de Teste";
// });

// Route::get('/ola/{nome?}', function ($nome=null) {
//     if(isset($nome))
//         return "Olá! Seja bem vindo, {$nome}.";
//     return "Você não informou o parâmetro nome";
// });

// Route::get('/rota2/{param1}/{param2}', function ($p1, $p2) {
//     echo "Os parametros segue a ordem em que foram implementados e não precisam usar o mesmo nome <br> Parametro 1 = {$p1}<br> Parametro 2 = {$p2}";
// });

// Route::get('/rotacomregras/{nome}/{n}', function ($nome, $n) {
//     for($i=1;$i<=$n;$i++)
//         echo "{$i}-{$nome}<br/>";
// })->where('nome', '[A-Za-z ]+')
//   ->where('n','[0-9]+');

// Route::prefix('/aplicacao')->group(function () {

//     Route::get('/', function () {
//         return view('app');
//     })->name('app');

//     Route::get('/user', function () {
//         return view('user');
//     })->name('app.user');

//     Route::get('/profile', function () {
//         return view('profile');
//     })->name('app.profile');

// });

// Route::get('/produtos', function(){
//     echo "<h1> Produtos </h1>";
//     echo "<ol>";
//     echo "<li>Notebook</li>";
//     echo "<li>Impressora</li>";
//     echo "<li>Mouse</li>";
//     echo "</ol>";
//     echo "<a href=".route('app')."> << Voltar</a>";
// })->name('produtos');

// //Redirecionar Rotas
// Route::redirect('todosprodutos', 'produtos', 301);
// Route::get('/todosprodutos2', function(){
//     return redirect()->route('produtos');
// });


// Route::post('/testerequisicoes', function (Request $request) {
//    return 'Hello POST';
// });

// Route::delete('/testerequisicoes', function (Request $request) {
//    return 'Hello DELETE';
// });

// Route::put('/testerequisicoes', function (Request $request) {
//    return 'Hello PUT';
// });

// Route::patch('/testerequisicoes', function (Request $request) {
//    return 'Hello PATCH';
// });
