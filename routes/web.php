<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\PedidoController;

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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/home', [CursoController::class, 'segundoindex'])->name('home');

//usuario
Route::get('/users/create',[UserController::class,'create'])->name('users.create');
Route::post('/users',[UserController::class,'store'])->name('users.store');
Route::get('/users',[UserController::class, 'index'])->name('users.index');
Route::get('/users/{user}',[UserController::class, 'show'])->name('users.show');
Route::get('/users/{user}/edit',[UserController::class, 'edit'])->name('users.edit');
Route::put('/users/{user}',[UserController::class,'update'])->name('users.update');
Route::delete('/users/{user}',[UserController::class,'destroy'])->name('users.delete');

//curso
Route::get('/cursos/create',[CursoController::class,'create'])->name('cursos.create');
Route::post('/cursos',[CursoController::class,'store'])->name('cursos.store');
Route::get('/cursos',[CursoController::class, 'index'])->name('cursos.index');
Route::get('/cursos/{curso}',[CursoController::class, 'show'])->name('cursos.show');
Route::get('/cursos/{curso}/edit',[CursoController::class, 'edit'])->name('cursos.edit');
Route::put('/cursos/{curso}',[CursoController::class,'update'])->name('cursos.update');
Route::delete('/cursos/{curso}',[CursoController::class,'destroy'])->name('cursos.delete');

//pedido
Route::get('/pedidos/create',[PedidoController::class,'create'])->name('pedidos.create');
Route::post('/pedidos',[PedidoController::class,'store'])->name('pedidos.store');
Route::get('/pedidos',[PedidoController::class, 'index'])->name('pedidos.index');
Route::get('/pedidos/{pedido}',[PedidoController::class, 'show'])->name('pedidos.show');
Route::get('/pedidos/{pedido}/edit',[PedidoController::class, 'edit'])->name('pedidos.edit');
Route::put('/pedidos/{pedido}',[PedidoController::class,'update'])->name('pedidos.update');
Route::delete('/pedidos/{pedido}',[PedidoController::class,'destroy'])->name('pedidos.delete');
