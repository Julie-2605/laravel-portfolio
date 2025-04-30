<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectController;

Route::get('/portfolio', function () {
    return view('portfolio');
})->name('portfolio');

Route::post('/contact', function () {
    return redirect()->back()->with('success', 'Message envoyé avec succès!');
})->name('contact.submit');

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
    
    Route::get('/portfolio', function () {
        return view('admin.portfolio');
    })->name('admin.portfolio');
    
    // Ajoutez d'autres routes pour les statistiques et les produits
    Route::get('/statistiques', function () {
        return view('admin.statistiques');
    })->name('admin.statistiques');
    
    Route::get('/produits', function () {
        return view('admin.produits');
    })->name('admin.produits');
});

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


// Route::get('/', [PortfolioController::class, 'index'])->name('home');
// Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
// Route::get('/portfolio', [ProjectController::class, 'index'])->name('portfolio');
// Route::get('/login', [ConnexionController::class, 'index'])->name('login');
// Route::get('/redirection-login', [ConnexionController::class, 'redirection'])->name('redirection-login');
// Route::get('/admin', [AdminController::class, 'index'])->name('admin');
