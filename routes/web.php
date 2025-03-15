<?php

use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Auth\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\AuthAdmin;
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
})->name('home');


Route::get('/teste', function () {
    return view('teste');
});

Route::get('/testehelpers', function () {
    // dd(testeHelpers());
    $cpf = geradorCpf();
    dd($cpf, validadorCpf("15513543556"), validadorCpf($cpf));
});


Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function (){
        return view('admin.dashboard');
    })->middleware(AuthAdmin::class)->name('admin.dashboard');
    Route::get('/users', [UsersController::class, 'index'])->middleware(AuthAdmin::class)->name('admin.users');
    Route::get('/users/{user}', [UsersController::class, 'view'])->middleware(AuthAdmin::class)->name('admin.users.view');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
