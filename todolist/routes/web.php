<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [AuthController::class , 'login'])->name('login_');
Route::get('/register', [AuthController::class , 'register'])->name('register_');


Route::post('/register', [AuthController::class , 'Authregister'])->name('register');
Route::post('/login', [AuthController::class , 'Authlogin'])->name('login');


Route::get('/list',[TaskController::class, 'list'])->name('list_');
Route::get('/add',[TaskController::class, 'add'])->name('add_');
Route::get('/update/{id}',[TaskController::class, 'update'])->name('update_');


Route::post('/add',[TaskController::class, 'Taskadd'])->name('add');
Route::post('/update/{id}',[TaskController::class, 'Taskupdate'])->name('update');
Route::get('/delete/{id}',[TaskController::class, 'TaskDelete'])->name('delete');