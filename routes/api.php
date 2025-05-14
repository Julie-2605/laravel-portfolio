<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiProjectController;

Route::get('/api/projects', [ApiProjectController::class, 'index'])->name('api.project');