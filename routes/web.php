<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\WebsiteController@home');

Route::get('/catalogo', function () {
    return view('Catalogo');
});

Route::get('/checkout', function () {
    return view('Checkout');
});

Route::get('/contato', function () {
    return view('Contato');
});

Route::get('/produto', function () {
    return view('produto');
});

Route::get('/carrinho', function () {
    return view('Carrinho');
});

Route::prefix ('/admin')->group(function () {

    Route::get('/', function () {
        return view('admin.index');
    });
    Route::get('/clientes', function () {
        return view('admin.clientes');
    });
    Route::get('/configuracoes', function () {
        return view('admin.configuracoes');
    });
    Route::get('/index', function () {
        return view('admin.index');
    });
    Route::get('/pedidos', function () {
        return view('admin.pedidos');
    });
    Route::get('/produtos', function () {
        return view('admin.produtos');
    });
    


});

