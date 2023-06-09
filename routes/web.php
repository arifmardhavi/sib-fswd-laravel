<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SliderController;
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

Route::get('/', [LandingController::class, 'index'])->name('landing');
Route::get('/product/show/{id}', [ProductsController::class, 'show'])->name('products.show');

Route::get('/register', [RegisterController::class ,'index'])->name('register');
Route::post('/register', [RegisterController::class ,'store'])->name('register.store');

Route::get('/login', [LoginController::class ,'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('authenticate');

Route::middleware('auth')->group(function () {
    // logout
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    // dashboard
    Route::get('/dashboard', [DashboardController::class ,'index'])->name('dashboard');

    Route::middleware('role:Admin|Staff|User')->group(function () {
        // Product
        Route::get('/products', [ProductsController::class ,'index'])->name('products.index');
        Route::get('/products/create', [ProductsController::class ,'create'])->name('products.create');
        Route::post('/products', [ProductsController::class ,'store'])->name('products.store');
        Route::get('/products/edit/{id}', [ProductsController::class ,'edit'])->name('products.edit');
        Route::put('/products/{id}', [ProductsController::class, 'update'])->name('products.update');
        Route::delete('products/{id}', [ProductsController::class ,'destroy'])->name('products.destroy');
    });
    Route::middleware('role:Admin|Staff')->group(function () {
        // Category
        Route::get('/categories', [CategoriesController::class ,'index'])->name('categories.index');
        Route::get('/categories/create', [CategoriesController::class ,'create'])->name('categories.create');
        Route::post('/categories', [CategoriesController::class ,'store'])->name('categories.store');
        Route::get('/categories/edit/{id}', [CategoriesController::class, 'edit'])->name('categories.edit');
        Route::put('/categories/{id}', [CategoriesController::class, 'update'])->name('categories.update');
        Route::delete('/categories/{id}', [CategoriesController::class, 'destroy'])->name('categories.destroy');
    });

    Route::middleware('role:Admin')->group(function () {

        // Slider
        Route::get('/sliders', [SliderController::class, 'index'])->name('slider.index');
        Route::get('/sliders/create', [SliderController::class, 'create'])->name('slider.create');
        Route::post('/sliders', [SliderController::class, 'store'])->name('slider.store');
        Route::get('/sliders/edit/{id}', [SliderController::class, 'edit'])->name('slider.edit');
        Route::put('/sliders/{id}', [SliderController::class, 'update'])->name('slider.update');
        Route::delete('/sliders/{id}', [SliderController::class, 'destroy'])->name('slider.destroy');

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
    });

});
