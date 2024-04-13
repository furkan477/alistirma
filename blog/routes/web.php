<?php

use App\Http\Controllers\BlogCrudController;
use App\Models\Blogcrud;
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

Route::get('/', [BlogCrudController::class , 'listView'])->name('listView');

Route::get('/blogadd', [BlogCrudController::class , 'addView'])->name('addView');

Route::get('/blogupdate/{id}', [BlogCrudController::class , 'updateView'])->name('updateView');



Route::post('/blogadd', [BlogCrudController::class , 'Blogadd'])->name('add');

Route::post('/blogupdate/{id}' , [BlogCrudController::class , 'Blogupdate'])->name('update');

Route::get('blogdelete/{id}' , [BlogCrudController::class , 'Blogdelete'])->name('delete');