<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RegisterStepperController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('profiles', [HomeController::class, 'profile']);

Route::prefix('register-stepper')->group(function () {
    // Show a step
    Route::get('{step}', [RegisterStepperController::class, 'showStep'])
        ->where('step', '[0-9]+')
        ->name('register.step.show');

    // Store a step
    Route::post('{step}', [RegisterStepperController::class, 'storeStep'])
        ->where('step', '[0-9]+')
        ->name('register.step.store');

    // Completion page
    Route::get('complete', [RegisterStepperController::class, 'complete'])
        ->name('register.step.complete');
});

// web.php
// Route::get('/register-stepper', [RegisterController::class, 'showStep'])->name('register.stepper');
// Route::post('/register-stepper', [RegisterController::class, 'postStep'])->name('register.stepper.post');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
