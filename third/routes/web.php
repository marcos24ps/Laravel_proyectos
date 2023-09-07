<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TareaController;
use Illuminate\Support\Facades\Route;
use App\Models\Tarea;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('tareas', ['tareas' => Tarea::all()]);
});

Route::get('view', function () {
    return view('tareas', ['tareas' => Tarea::all()]);
});

Route::post('view', function () {
    return view('tareas', ['tareas' => Tarea::all()]);
});



Route::post(
    '/nueva',
    [TareaController::class, 'create']
   )->name('tarea.create');


Route::delete(
'/main/{id}',
[TareaController::class, 'delete']
)->name('tarea.delete');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

