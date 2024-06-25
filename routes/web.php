<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $nome = 'Fulano de Tal';
    $array = ['Fulano', 'Ciclano', 'Beltrano'];
    return view('welcome', ['nome'=> $nome, 'array' => $array]);
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/products', function () {

    return view('products');
});

Route::get('/products', function () {

    $busca = request('search');

    return view('products', ['busca' => $busca]);
});

Route::get('/products/{id}', function ($id) {
    return view('products', ['id' => $id]);
});

Route::get('/produtos_teste/{id?}', function ($id = null) {
    return view('products', ['id' => $id]);
});
