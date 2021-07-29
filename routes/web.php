<?php

use Illuminate\Support\Facades\Route;

// Controllers 
use App\Http\Controllers\HomeworkController;
use App\Http\Controllers\HomePageController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', HomePageController::class)->name('homework.home');

// Route::get('/tareas', [HomeworkController::class, 'index'])->name('homework.index');

// Route::get('/tareas/crear', [HomeworkController::class, 'create'])->name('homework.create');

// Route::post('/tareas', [HomeworkController::class, 'store'])->name('homework.store');

// Route::get('/tareas/{homework}', [HomeworkController::class, 'show'])->name('homework.show');

// Route::get('/tareas/{homework}/edit', [HomeworkController::class, 'edit'])->name('homework.edit');

// Route::put('/tareas/{homework}', [HomeworkController::class, 'update'])->name('homework.update');

// Route::delete('/tareas/{homework}', [HomeworkController::class, 'destroy'])->name('homework.destroy');

// Con esta linea de codigo hacemos exactamente lo mismo que con las anteriores siemore y cuando sigamos las convenciones y asi ahorramos y optimizamos nuestro codigo.
Route::resource('/tareas', HomeworkController::class)->parameters(['tareas' => 'homework'])->names('homework');
