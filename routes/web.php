<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aqui você registra as rotas web da aplicação. Todas as rotas
| são carregadas pelo RouteServiceProvider e atribuídas ao grupo
| de middleware 'web'. Crie algo extraordinário!
|
*/

// Rota para a página inicial
Route::get('/', [PageController::class, 'home'])->name('home');

// Rota para a página "Sobre a Escola"
Route::get('/sobre', [PageController::class, 'about'])->name('about');

// Rota para a página de cursos
Route::get('/cursos', [PageController::class, 'courses'])->name('courses');

// Rota para a página de contato
Route::get('/contato', [PageController::class, 'contact'])->name('contact');
