<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiProjectController;
use App\Http\Controllers\ApiServiceController;

Route::get('/api/projects', [ApiProjectController::class, 'index'])->name('api.projects');

Route::get('api/services', [ApiServiceController::class, 'index'])->name('api.services');