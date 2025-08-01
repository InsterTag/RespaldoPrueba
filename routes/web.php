<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;



Route::get('/', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::get('/home', [ProductController::class, 'index'])->name('home');

Route::get('/bar', function () {return view('layouts.navegacion');});

require __DIR__.'/auth.php';

Route::get('/homee', function(){
    return view('Homee');
})->name('homee');

Route::get('/products', function(){
    return view('Products');
})->name('products');

Route::get('/profile', function(){
    return view('Profile');
})->name('profile');