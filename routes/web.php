<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;


Route::view('/admin-login', 'Auth.AdminLogin');
Route::post('/admin-login', [AdminController::class, 'login']);
Route::view('/admin-dashboard', 'Layout.AdminDashboard');
Route::get('/admin-dashboard', [AdminController::class, 'dashboard']);
Route::get('/admin-category', [AdminController::class, 'category']);
Route::get('/admin-logout', [AdminController::class, 'logout']);

// Category 

Route::post('/add-category' , [CategoryController::class , 'AddCategory']);

