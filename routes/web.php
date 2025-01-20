<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ThemController;
use App\Http\Controllers\SubscribersController;
use Illuminate\Support\Facades\Route;


// Public Routes
Route::controller(ThemController::class)->name('them.')->group(function(){
    Route::get('/', 'index')->name('index');
    Route::get('/category', 'category')->name('category');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/single-blog', 'singleBlog')->name('singleBlog');

});
// SUBSCRIBER STORE ROUTE
Route::post('/subscriber/store', [SubscribersController::class, 'store'])->name('subscriber.store');




// Authenticated Routes
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Authentication Routes (Breeze)
require __DIR__.'/auth.php';
