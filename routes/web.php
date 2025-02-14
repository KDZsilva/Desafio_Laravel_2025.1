<?php

use App\Http\Controllers\ProfileController;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Support\Facades\Route;
use Illuminate\View\Component;

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/navbar', function () {
    return view('components.navbar');
});


Route::get('/', function () {
    return view('public.home');
});


Route::get('/teste', function () {
    return view('teste');
});

Route::get('/testehelpers', function () {
    // dd(testeHelpers());
    $cpf = geradorCpf();
    dd($cpf, validadorCpf("15513543556"), validadorCpf($cpf));
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
