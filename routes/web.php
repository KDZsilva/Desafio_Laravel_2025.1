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
    // Dashboard admin
    Route::get('/dashboard', function (){
        return view('admin.dashboard');
    })->middleware(AuthAdmin::class)->name('admin.dashboard');

    // Tabela de usuários
    Route::get('/users', [UsersController::class, 'index'])->middleware(AuthAdmin::class)->name('admin.users');

    // Página de criação de usuário
    Route::get('/users/create', [UsersController::class, 'createPage'])->middleware(AuthAdmin::class)->name('admin.users.createpage');

    // Criação de usuário
    Route::post('/users/create', [UsersController::class, 'store'])->middleware(AuthAdmin::class)->name('admin.users.store');

    // Página de visualização de usuário
    Route::get('/users/view/{user}', [UsersController::class, 'view'])->middleware(AuthAdmin::class)->name('admin.users.view');

    // Página de update de usuário
    Route::get('/users/edit/{user}', [UsersController::class, 'editPage'])->middleware(AuthAdmin::class)->name('admin.users.editpage');

    // update user (admin dashboard)
    Route::put('users/{user}', [UsersController::class, 'update'])->middleware(AuthAdmin::class)->name('admin.users.update');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
