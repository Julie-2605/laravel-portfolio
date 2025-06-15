<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\RegisterController;

Route::get('/', [PortfolioController::class, 'index'])->name('portfolio');

Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

Route::post('/quote/calculate', [QuoteController::class, 'calculate'])->name('quote.calculate');

Route::post('/quote', [QuoteController::class, 'submit'])->name('quote.submit');

Route::resource('projects', ProjectController::class);

Route::resource('services', ServiceController::class);

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    
    Route::get('/portfolio', [AdminController::class, 'portfolio'])->name('admin.portfolio');

    Route::get('/projects/{project}/edit', [ProjectController::class, 'edit'])->name('admin.projects.edit');
    Route::put('/projects/{project}', [ProjectController::class, 'update'])->name('admin.projects.update');

    Route::get('/statistiques', [AdminController::class, 'statistiques'])->name('admin.statistiques');

    Route::get('/services', [AdminController::class, 'services'])->name('admin.services');
    Route::get('/services/{service}/edit', [ServiceController::class, 'edit'])->name('admin.services.edit');
    Route::put('/services/{service}', [ServiceController::class, 'update'])->name('admin.services.update');
});

// Route::get('/dashboard', function () {
//     return view('admin.dashboard');
// })->middleware(['auth', 'verified'])->name('admin.dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Routes d'authentification
Route::get('/login', [LoginController::class, 'create'])->name('login')->middleware('guest');
Route::get('/register', [RegisterController::class, 'create'])->name('register')->middleware('guest');

Route::post('/login', [LoginController::class, 'login'])->name('login.attempt');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

// Route de redirection après connexion
Route::get('/auth/redirect', [AdminController::class, 'index'])->name('auth.redirect')->middleware('auth');

// Route pour mot de passe oublié
Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])->name('password.request');

// require __DIR__.'/auth.php';
