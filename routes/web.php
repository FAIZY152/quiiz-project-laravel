<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;


Route::view('/admin-login', 'Auth.AdminLogin');
Route::post('/admin-login', [AdminController::class, 'login']);
// Route::post('/admin-dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
