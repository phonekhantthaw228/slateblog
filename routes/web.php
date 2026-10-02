<?php

use Illuminate\Support\Facades\Route;


Route::get('blogposts/{id}', [App\Http\Controllers\PostsController::class, 'postIndividual'])->name('post-Individual');
Route::get('/',[App\Http\Controllers\HomeController::class, 'home'])->name('home-page');
Route::get('/admin', [App\Http\Controllers\AdminDashboard::class, 'admin'])->name('admindashboard');
Route::get('/category/{id}', [App\Http\Controllers\HomeController::class, 'postCategory'])->name('post-category');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
