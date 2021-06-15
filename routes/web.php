<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/index',[TodoController::class, 'index'])->name('todo.index');
Route::get('/create',[TodoController::class, 'create'])->name('todo.create');
Route::post('/upload',[TodoController::class, 'upload']);
Route::get('/edit/{id}',[TodoController::class, 'edit'])->name('todo.edit');
Route::patch('/update',[TodoController::class, 'update']);
Route::get('/completed/{id}',[TodoController::class, 'completed'])->name("todo.completed");
Route::get('/delete/{id}',[TodoController::class, 'delete'])->name("todo.delete");
