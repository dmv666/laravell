<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\CategoriaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [ProductoController::class, 'index'])->name('home');
Route::post('/home/add', [ProductoController::class, 'createProducto'])->name('add_product');
Route::get('/home/edit/{id}', [ProductoController::class, 'updateProducto'])->name('editProduct');
Route::get('/home/delete/{id}', [ProductoController::class, 'deleteProducto'])->name('deleteProduct');




Route::get('/proveedor', [ProveedorController::class, 'index'])->name('proveedor');
Route::post('/proveedor/add', [ProveedorController::class, 'createProveedor'])->name('add_proveedor');
Route::get('/proveedor/edit/{id}', [ProveedorController::class, 'updateProveedor'])->name('editProveedor');
Route::get('/proveedor/delete/{id}', [ProveedorController::class, 'deleteProveedor'])->name('deleteProveedor');


Route::get('/categoria', [CategoriaController::class, 'index'])->name('categoria');
Route::post('/categoria/add', [CategoriaController::class, 'createCategories'])->name('add_categoria');
Route::get('/categoria/edit/{id}', [CategoriaController::class, 'setCategories'])->name('editCategoria');
Route::get('/categoria/delete/{id}', [CategoriaController::class, 'deleteCategories'])->name('deleteCategoria');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('home', [HomeController::class, 'home']) -> name('home');
// });

require __DIR__.'/auth.php';
