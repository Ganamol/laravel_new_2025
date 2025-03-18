<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'home']);
Route::get('/users/create', [HomeController::class, 'create'])->name('users.create');
Route::post('/users/save', [HomeController::class, 'save'])->name('users.save');

