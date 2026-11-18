<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserManagementController;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //User management route
    Route::get('/users/index', [UserManagementController::class, 'index'])->name('user.index');
    Route::get('users/create', [UserManagementController::class, 'create'])->name('user.create');
    Route::post('user/store', [UserManagementController::class, 'store'])->name('user.store');

});

require __DIR__.'/auth.php';

