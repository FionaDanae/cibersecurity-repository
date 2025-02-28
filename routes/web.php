<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

Route::controller(PublicController::class)->group(function(){
    Route::get('/', 'inicio')->name('inicio');
});

Route::controller(PublicController::class)->group(function(){
    Route::get('/contacto', 'contacto')->name('contacto');
});

Route::controller(PublicController::class)->group(function(){
    Route::get('/servicios', 'servicios')->name('servicios');
});

Route::controller(PublicController::class)->group(function(){
    Route::get('/recursos', 'recursos')->name('recursos');
});

Route::controller(PublicController::class)->group(function(){
    Route::get('/faq', 'faq')->name('faq');
});