<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'home']);
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/users/create', [HomeController::class, 'create'])->name('users.create');
Route::post('/users/save', [HomeController::class, 'save'])->name('users.save');
Route::get('/users/delete/{userId}', [HomeController::class, 'delete'])->name('delete.users');
Route::get('/users/edit/{userId}', [HomeController::class, 'edit'])->name('edit.users');
Route::post('/users/update', [HomeController::class, 'update'])->name('update.users');