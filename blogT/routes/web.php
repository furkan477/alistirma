<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogCrudController;
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

Route::get('/',[BlogCrudController::class, 'read'])->name('read');

Route::get('/create',[BlogCrudController::class, 'createnew'])->name('create');
Route::post('/create',[BlogCrudController::class, 'Blogadd'])->name('add');

Route::get('/update/{id}',[BlogCrudController::class, 'update'])->name('update');
Route::post('/update/{id}' , [BlogCrudController::class , 'updateBlog'])->name('updateBlog');

Route::get('/delete/{id}',[BlogCrudController::class, 'delete'])->name('delete');


Route::get('/login' , [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'UserAuth'])->name('UserAuth');

Route::get('/register' , [AuthController::class, 'register'])->name('register');
Route::post('/register' , [AuthController::class, 'UserRegister'])->name('userregister');

Route::get('/logout', [AuthController::class, 'UserLogout'])->name('logout');