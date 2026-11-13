<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CatalogController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'index'])
    ->name('home');


Route::prefix('')->controller(CatalogController::class)->group(function () {

    Route::get('/mujer', 'index')
        ->defaults('section', 'mujer')
        ->name('catalog.women');

    Route::get('/hombre', 'index')
        ->defaults('section', 'hombre')
        ->name('catalog.men');

    Route::get('/novedades', 'index')
        ->defaults('section', 'novedades')
        ->name('catalog.new');

    Route::get('/ofertas', 'index')
        ->defaults('section', 'ofertas')
        ->name('catalog.offers');

    Route::get('/accesorios', 'index')
        ->defaults('section', 'accesorios')
        ->name('catalog.accessories');

});