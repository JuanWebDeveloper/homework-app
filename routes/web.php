<?php

use App\Http\Controllers\ContactController;
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

Route::resource('/tareas', HomeworkController::class)->parameters(['tareas' => 'homework'])->names('homework');

Route::view('/nosotros', 'about')->name("homework.about");

Route::get('/contactanos', [ContactController::class, "index"])->name("contact.index");

Route::post('/contactanos', [ContactController::class, "store"])->name("contact.store");
