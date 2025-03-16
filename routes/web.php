<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagSeguroController;
use App\Http\Controllers\User\ComprasController;
use App\Models\Category;
use App\Models\Subcategory;
use GuzzleHttp\Middleware;
use Illuminate\View\Component;
use App\Http\Middleware\AuthAdmin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\SalesController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\AdminsController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Auth\DashboardController;

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/navbar', function () {
    return view('components.navbar');
});

//página inicial
Route::get('/', [HomeController::class, 'index'])->name('home');

// Página do Produto
Route::get('/products/view/{product}', [HomeController::class, 'view'])->middleware('auth')->name('home.products.view');

Route::post('/products/chart/{product}', [HomeController::class, 'chartProduct'])->middleware('auth')->name('home.products.chart');

//checkout
Route::post('/checkout', [PagSeguroController::class, 'createCheckout'])->name('checkout.create');


Route::get('/teste', function () {
    return view('teste');
});

Route::get('/testehelpers', function () {
    // dd(testeHelpers());
    $cpf = geradorCpf();
    dd($cpf, validadorCpf("15513543556"), validadorCpf($cpf));
});

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
    Route::put('/users/{user}', [UsersController::class, 'update'])->middleware(AuthAdmin::class)->name('admin.users.update');
    // delete user (admin dashboard)
    Route::delete('/users/{user}', [UsersController::class, 'destroy'])->middleware(AuthAdmin::class)->name('admin.users.destroy');


    // Tabela de admins
    Route::get('/admins', [AdminsController::class, 'index'])->middleware(AuthAdmin::class)->name('admin.admins');
    // Página de criação de admin
    Route::get('/admins/create', [AdminsController::class, 'createPage'])->middleware(AuthAdmin::class)->name('admin.admins.createpage');
    // Criação de admin
    Route::post('/admins/create', [AdminsController::class, 'store'])->middleware(AuthAdmin::class)->name('admin.admins.store');
    // Página de visualização de admin
    Route::get('/admins/view/{admin}', [AdminsController::class, 'view'])->middleware(AuthAdmin::class)->name('admin.admins.view');
    // Página de update de admin
    Route::get('/admins/edit/{admin}', [AdminsController::class, 'editPage'])->middleware(AuthAdmin::class)->name('admin.admins.editpage');
    // update admin
    Route::put('/admins/{admin}', [AdminsController::class, 'update'])->middleware(AuthAdmin::class)->name('admin.admins.update');
    // delete admin
    Route::delete('/admins/{admin}', [AdminsController::class, 'destroy'])->middleware(AuthAdmin::class)->name('admin.admins.destroy');


    // Tabela de produtos
    Route::get('/products', [ProductsController::class, 'index'])->middleware(AuthAdmin::class)->name('admin.products');
    // Página de visualização de produto
    Route::get('/products/view/{product}', [ProductsController::class, 'view'])->middleware(AuthAdmin::class)->name('admin.products.view');
    // Página de update de produto
    Route::get('/products/edit/{product}', [ProductsController::class, 'editPage'])->middleware(AuthAdmin::class)->name('admin.products.editpage');
    // update produto
    Route::put('/products/{product}', [ProductsController::class, 'update'])->middleware(AuthAdmin::class)->name('admin.products.update');
    // delete produto
    Route::delete('/products/{product}', [ProductsController::class, 'destroy'])->middleware(AuthAdmin::class)->name('admin.products.destroy');
});

//Dashboard User
Route::get('/user/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::prefix('user')->group(function () {
    //Tabela de vendas
    Route::get('/sales', [SalesController::class, 'index'])->middleware(['auth', 'verified'])->name('user.sales');
    //Tabela de compras
    Route::get('/compras', [ComprasController::class, 'index'])->middleware(['auth', 'verified'])->name('user.compras');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/sales/pdf', [SalesController::class, 'pdf'])->middleware(['auth', 'verified'])->name('sales.pdf');
Route::get('/compras/pdf', [ComprasController::class, 'pdf'])->middleware(['auth', 'verified'])->name('compras.pdf');

require __DIR__.'/auth.php';
