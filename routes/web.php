<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\RoleController;

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
Route::get('/products', [ProductsController::class ,'index'])->name('products.index');
Route::get('/categories', [CategoriesController::class ,'index'])->name('categories.index');
Route::get('/role', [RoleController::class ,'index'])->name('role.index');

Route::resource('user', UserController::class);
