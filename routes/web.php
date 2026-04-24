<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

use App\Http\Controllers\GradeController;

Route::middleware('auth')->group(function () {
    Route::get('/grades', [GradeController::class, 'index'])->name('grades.index');
    Route::post('/grades', [GradeController::class, 'store'])->name('grades.store');
});

require __DIR__.'/auth.php';

use App\Http\Controllers\StudyGroupController;
Route::middleware('auth')->group(function () {
    Route::get('/groups', [StudyGroupController::class, 'index'])->name('groups.index');
    Route::post('/groups', [StudyGroupController::class, 'store'])->name('groups.store');
});
