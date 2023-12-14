<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Todo\TodoListController;
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
// route register
Route::get('/', [RegisterController::class, 'register'])->name('register');
Route::post('/register', [RegisterController::class, 'doRegister'])->name('doRegister');
// route login
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'doLogin'])->name('doLogin');
// logout
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Todo
Route::get('/todo', [TodoListController::class, 'index'])->name('todo');
Route::post('/todo', [TodoListController::class, 'create'])->name('createTodo');
