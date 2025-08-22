<?php

use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes(['register' => false]);

Route::get('/', [FrontendController::class, 'index'])->name('root');


// dashboard
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');




// profile

Route::get("/home/profile", [ProfileController::class, 'index'])->name('home.profile');
Route::post("/home/profile/name/update", [ProfileController::class, 'name_update'])->name('home.profile.name.update');
Route::post("/home/profile/password/update", [ProfileController::class, 'password_update'])->name('home.profile.password.update');
Route::post("/home/profile/image/update", [ProfileController::class, 'image_update'])->name('home.profile.image.update');



// expense

Route::get('/expenses/create', [ExpenseController::class, 'create'])->name('expenses.create');
Route::post('/expenses/store', [ExpenseController::class, 'store'])->name('expenses.store');
Route::get('/expenses/edit/{id}', [ExpenseController::class, 'edit'])->name('expenses.edit');
Route::get('/expenses/edit/{id}', [ExpenseController::class, 'edit'])->name('expenses.edit');
Route::post('/expenses/update/{id}', [ExpenseController::class, 'update'])->name('expenses.update');
Route::post('/expenses/{expense}', [ExpenseController::class, 'destroy'])->name('expenses.destroy');
