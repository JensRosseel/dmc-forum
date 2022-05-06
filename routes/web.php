<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [Controller::class, 'home'])->name('home');
Route::get('/login', [Controller::class, 'login'])->name('login');
Route::get('/register', [Controller::class, 'register'])->name('register');
Route::post('/checkLogin', [UserController::class, 'checkLogin'])->name('checkLogin');
Route::post('/handleRegister', [UserController::class, 'handleRegister'])->name('handleRegister');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');
Route::get('/postmaker', [Controller::class, 'postmaker'])->name('postmaker');
Route::post('/makePost', [PostController::class, 'makePost'])->name('makePost');
