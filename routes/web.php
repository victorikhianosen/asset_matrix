<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('about', [PagesController::class, 'about'])->name('about');
Route::get('team',[PagesController::class, 'team'])->name('team');
Route::get('loan', [PagesController::class, 'loan'])->name('loan');
Route::get('savings', [PagesController::class, 'savings'])->name('savings');
Route::get('deposit', [PagesController::class, 'deposit'])->name('deposit');
