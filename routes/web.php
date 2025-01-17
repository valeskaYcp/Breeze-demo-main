<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TareaController;
use App\Http\Controllers\CategoriaController;

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
   Route::resource('tareas', TareaController::class);
   Route::resource('categorias', CategoriaController::class);
   Route::put('/tareas/{tarea}/toggle', [TareaController::class, 'toggle'])->name('tareas.toggle');
   Route::delete('/tareas/{tarea}', [TareaController::class, 'destroy'])->name('tareas.destroy');


});

require __DIR__.'/auth.php';

