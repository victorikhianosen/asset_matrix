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
Route::get('policy/data', [PagesController::class, 'dataPolicy'])->name('policy.data');
Route::get('policy/mobile', [PagesController::class, 'mobilePolicy'])->name('policy.mobile');
Route::get('policy/amt', [PagesController::class, 'amt'])->name('policy.amt');
Route::get('policy/enduser', [PagesController::class, 'enduser'])->name('policy.enduser');
Route::get('internet', [PagesController::class, 'internet'])->name('internet');
Route::get('request', [PagesController::class, 'requestLoan'])->name('request.loan');
Route::post('process/loan', [PagesController::class, 'processLoan'])->name('process.loan');
