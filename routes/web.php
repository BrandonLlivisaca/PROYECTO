<?php
use App\Http\Controllers\Tarea_Controller;
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

Route::get('tarea/registrar', [Tarea_Controller::class, 'create'])->name('tarea.create');
Route::post('tarea/guardar', [Tarea_Controller::class, 'store'])->name('tarea.store');
Route::get('tarea/listar', [Tarea_Controller::class, 'index'])->name('tarea.index');


Route::get('tarea/{tarea}/editar', [Tarea_Controller::class, 'edit'])->name('tarea.edit');
Route::put('tarea/{tarea}/actualizar',[Tarea_Controller::class, 'update'])->name('tarea.update');