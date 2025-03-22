<?php

use App\Http\Controllers\PublicController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'inicio'])->name('inicio');
Route::get('/contacto', [PublicController::class, 'contacto'])->name('contacto');
Route::get('/servicios', [PublicController::class, 'servicios'])->name('servicios');
Route::get('/recursos', [PublicController::class, 'recursos'])->name('recursos');
Route::get('/faq', [PublicController::class, 'faq'])->name('faq');
Route::get('/nosotros', [PublicController::class, 'nosotros'])->name('nosotros');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
