<?php

use App\Http\Controllers\PostController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('home', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('home', [PostController::class, 'index'])->name('home');

Route::get('about', function () {
    return Inertia::render('About', [
        'name' => 'Walter',
        'curso' => 'inertia'
    ]);
})->name('about');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [PostController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/create', [PostController::class, 'create'])->name('dashboard.create');
    Route::post('/dashboard/store', [PostController::class, 'store'])->name('dashboard.store');
    // Crud
    Route::delete('/dashboard/destroy/{id}', [PostController::class, 'destroy'])->name('dashboard.destroy');
    Route::put('/dashboard/update/{id}', [PostController::class, 'update'])->name('dashboard.update');
    Route::get('/dashboard/edit/{id}', [PostController::class, 'edit'])->name('dashboard.edit'); // Alterar para GET
});


