<?php

use App\Http\Controllers\ChoiseController;
use App\Http\Controllers\ConnectionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JoinController;
use App\Http\Controllers\ThankYouController;
use App\Http\Controllers\VerificationController;
use App\Http\Controllers\ProfileController;


Route::get('/loading', function () {
    return view('loading'); 
});

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/join', [JoinController::class, 'join'])->name('join');

Route::post('/join/store', [JoinController::class, 'store'])->name('join.store');

Route::get('/thankyou',[ThankYouController::class,'thankyou'])->name('thankyou');

Route::get('/home',[HomeController::class,'index'])->name('home');

Route::get('/verification',[VerificationController::class,'verification'])->name('verification');

Route::get('/connection', [ConnectionController::class, 'connection'])->name('connection');

Route::post('/connection', [ConnectionController::class, 'login'])->name('login');

Route::get('/choise',[ChoiseController::class,'choise'])->name('choise');

Route::get('/profile', [ProfileController::class, 'show'])->name('profile');

Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');

Route::put('/profile/update/{id}', [ProfileController::class, 'update'])->name('profile.update');

Route::get('/profile/confirm-delete', [ProfileController::class, 'destroy'])->name('confirm-delete');

Route::delete('/profile/destroy', [ProfileController::class, 'delete'])->name('profile.destroy');

