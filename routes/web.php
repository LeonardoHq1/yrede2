<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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


Route::get('/teste', function () {
    return "TESTADO!!!";
});

Route::get('/lista-usuarios', function () {
    $usuarios = User::all();

    return view('listaUsuarios', compact('usuarios'));

})->name('lista-usuarios');

Route::view('/cadastrousuario','cadastro'); 

Route::post('/salva-usuario', function(request $request){

$usuario = new User();
$usuario->usuario = $request->input('usuario');

$usuario->nome = $request->input('nome');

$usuario->bio = $request->input('bio');

$usuario->email = $request->input('email');

$usuario->senha = $request->input('senha');

$usuario->save();

return "Salvo com sucesso";




})->name('salva-usuario');

Route::view('/login','login');

Route::post('logar', function (Request $request) {
    
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'senha' => ['required'],
    ]);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();

        //return redirect()->intended('dashboard');
        return "Logado com sucesso";
    }

   return "Erro ao logar!!! Usuario ou Senha ivalidos";   
  
});


