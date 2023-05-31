<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\RoleController;
use App\Models\Category;
use App\Models\Product;
use App\Models\Role;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('landing');
});

Route::get('/dashboard', [DashboardController::class ,'index'])->name('dashboard');

// Product
Route::get('/products', [ProductsController::class ,'index'])->name('products.index');
Route::get('/products/create', [ProductsController::class ,'create'])->name('products.create');
Route::post('/products', [ProductsController::class ,'store'])->name('products.store');
Route::get('/products/edit/{id}', [ProductsController::class ,'edit'])->name('products.edit');
Route::put('/products/{id}', [ProductsController::class, 'update'])->name('products.update');
Route::delete('products/{id}', [ProductsController::class ,'destroy'])->name('products.destroy');

// Category
Route::get('/categories', [CategoriesController::class ,'index'])->name('categories.index');
Route::get('/categories/create', [CategoriesController::class ,'create'])->name('categories.create');
Route::post('/categories', [CategoriesController::class ,'store'])->name('categories.store');
Route::get('/categories/edit/{id}', [CategoriesController::class, 'edit'])->name('categories.edit');
Route::put('/categories/{id}', [CategoriesController::class, 'update'])->name('categories.update');
Route::delete('/categories/{id}', [CategoriesController::class, 'destroy'])->name('categories.destroy');

// Role
Route::get('/role', [RoleController::class ,'index'])->name('role.index');
Route::get('/role/create', [RoleController::class ,'create'])->name('role.create');
Route::post('/role', [RoleController::class ,'store'])->name('role.store');
Route::get('/role/edit/{id}', [RoleController::class, 'edit'])->name('role.edit');
Route::put('/role/{id}', [RoleController::class, 'update'])->name('role.update');
Route::delete('role/{id}', [RoleController::class ,'destroy'])->name('role.destroy');

// User
Route::get('/user', [UserController::class ,'index'])->name('user.index');
Route::get('/user/create', [UserController::class ,'create'])->name('user.create');
Route::post('/user', [UserController::class ,'store'])->name('user.store');
Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
Route::put('/user/{id}', [UserController::class, 'update'])->name('user.update');
Route::delete('user/{id}', [UserController::class ,'destroy'])->name('user.destroy');
