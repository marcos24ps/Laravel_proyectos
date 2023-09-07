<?php

use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;
use app\Models\Producto;

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
    return view('welcome');
});


Route::get('/martes', function () {
 return view('martes');
});

Route::post(
    '/productos',
    [ProductoController::class, 'create']
   )->name('producto.create');

   Route::get('/productos', function () {
    return view('productos');
   })->name('productos');


   Route::post('/productoss', function () {
    $productos=Producto::all();
    return view('productoss', ['producto' => $productos]);
   })->name('productos');

   Route::get('/productoss', function () {
    $productos=Producto::all();
    return view('productoss', ['producto' => $productos]);
   })->name('productos');


