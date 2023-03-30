<?php
use App\Http\Controllers\Roles_Controller;
use App\Http\Controllers\User_Controller;

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

Route::get('rol/registrar',[Roles_Controller::class, 'create'])->name('roles.create');
Route::post('rol/guardar', [Roles_Controller::class, 'store'])->name('roles.store');
Route::get('rol/listar', [Roles_Controller::class, 'index'])->name('roles.index');


Route::get('user/registrar',[User_Controller::class, 'create'])->name('user.create');
Route::get('user/listar', [User_Controller::class, 'index'])->name('user.index');