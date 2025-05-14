<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\ServiceController;

Route::get('/', [PortfolioController::class, 'index'])->name('portfolio');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.submit');

Route::resource('projects', ProjectController::class);

Route::resource('services', ServiceController::class);

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    
    Route::get('/portfolio', [ProjectController::class, 'portfolio'])->name('admin.portfolio');

    Route::get('/projects/{project}/edit', [ProjectController::class, 'edit'])->name('admin.projects.edit');
    Route::put('/projects/{project}', [ProjectController::class, 'update'])->name('admin.projects.update');

    // Ajoutez d'autres routes pour les statistiques et les produits
    Route::get('/statistiques', function () {
        return view('admin.statistiques');
    })->name('admin.statistiques');

    Route::get('/services', [AdminController::class, 'services'])->name('admin.services');
    Route::get('/services/{service}/edit', [ServiceController::class, 'edit'])->name('admin.services.edit');
    Route::put('/services/{service}', [ServiceController::class, 'update'])->name('admin.services.update');
});

Route::get('/quote', [QuoteController::class, 'submit'])->name('quote.request');

Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    // Routes d'administration...
});


// Routes d'authentification
Route::get('/login', function () {
    return view('auth.login');
})->name('login')->middleware('guest');

Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login.attempt');
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

// Route de redirection après connexion
Route::get('/auth/redirect', function () {
    return view('auth.redirect');
})->name('auth.redirect')->middleware('auth');

// Route pour mot de passe oublié
Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->name('password.request');