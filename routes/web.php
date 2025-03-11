<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('pages.dashboard');
});

Route::get('/create', function () {
    return view('pages.create');
});
Route::get('/dashboard', [TaskController::class, 'index'])->name('task.dashboard');
Route::get('/create', [TaskController::class, 'create'])->name('task.create');
Route::get('/completed', [TaskController::class, 'completed'])->name('task.complete');
Route::post('/store', [TaskController::class, 'store'])->name('task.store');
Route::delete('/task/{id}', [TaskController::class, 'destroy'])->name('task.delete');
Route::PUT('/task/{id}', [TaskController::class, 'complete'])->name('task.complete');


