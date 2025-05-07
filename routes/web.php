<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', [HomeController::class, 'home']);
Route::get('/index', [HomeController::class, 'index'])->name('index');
Route::get('/home', [HomeController::class, 'home'])->name('home');
Route::get('/users/create', [HomeController::class, 'create'])->name('users.create');
Route::post('/users/save', [HomeController::class, 'save'])->name('users.save');
Route::get('/users/delete/{userId}', [HomeController::class, 'delete'])->name('delete.users');
Route::get('/users/edit/{userId}', [HomeController::class, 'edit'])->name('edit.users');
Route::post('/users/update', [HomeController::class, 'update'])->name('update.users');
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/dologin', [LoginController::class, 'dologin'])->name('do.login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');