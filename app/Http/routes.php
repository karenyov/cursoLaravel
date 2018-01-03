<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('inicio/{nome?}', function($nome = 'Aluno'){
    return view('inicio', ['nome' => $nome]);
     /* Variações
     * return view('inicio')->with('nome', $nome);
     * return view('inicio')->with(['nome' => $nome]);
     * return view('inicio')->withName($nome);
     */
})->where('nome', '[A-Za-z]+');

Route::get('lista', function(){

    $voluntarios = ['João', 'Juca', 'José', 'Joana', 'Jorge',];
  
    return view('lista', ['voluntarios' => $voluntarios]);
});

Route::group(['prefix' => 'institucional'], function() {

    Route::get('sobre', ['as' => 'sobre', function () {
        return view('sobre');
    }]);

    Route::get('contato', ['as' => 'contato', function () {
        return view('contato');
    }]);

    Route::post('contato', ['as' =>'contato.send', function () {
        return Request::all();
    }]);
});


