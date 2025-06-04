<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SalaryController;

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
Route::get('/salary/create', [SalaryController::class, 'create'])->name('salary.create');
Route::post('/salary/save', [SalaryController::class, 'save'])->name('salary.save');
Route::get('/salary/index', [SalaryController::class, 'index'])->name('salary.index');
Route::get('/salary/edit/{id}', [SalaryController::class, 'edit'])->name('salary.edit');
Route::get('/file/create', [FileController::class, 'create'])->name('file.create');
Route::post('/upload', [FileController::class, 'store'])->name('file.upload');
Route::get('/File/index', [FileController::class, 'index'])->name('file.index');
Route::get('/File/edit/{id}', [FileController::class, 'edit'])->name('file.edit');
Route::post('/File/update', [FileController::class, 'update'])->name('file.update');