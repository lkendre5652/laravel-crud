<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!|
*/


Route::get('/', function () {
    return view('welcome');
});


Route::get('todo-show/', [TodoController::class, 'show']);
Route::get('/todo-remove/{id}',[TodoController::class,'destroy']);
Route::get('/todo-update/{id}',[TodoController::class,'update']);
Route::post('update-action/',[TodoController::class,'update_action']);
Route::get('todo-create/',[TodoController::class,'create']);
Route::post('create-action',[TodoController::class,'create_action']);
