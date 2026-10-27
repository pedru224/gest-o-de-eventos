<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn () => redirect()->route('events.index'));

// Autenticação
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

// PROVISÓRIAS: serão trocadas depois
Route::get('/register', fn () => 'Cadastro (provisório)')->name('register');
Route::post('/logout', fn () => 'Logout (provisório)')->name('logout');
Route::get('/events', fn () => 'Lista de eventos (provisório)')->name('events.index');
Route::get('/registrations', fn () => 'Minhas inscrições (provisório)')->name('registrations.index');

// Área administrativa: precisa estar logado E ser admin
Route::get('/admin/events', fn () => 'Área do administrador')
    ->middleware(['auth', 'admin'])
    ->name('admin.events.index');

Route::middleware(['auth', 'admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::resource('categories', CategoryController::class)->except('show');
    });