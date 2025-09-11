<?php

// use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
// routes/web.php
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Models\Product;
use App\Models\Category;
Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/create', [ProductController::class, 'create']);
Route::post('/products/create', [ProductController::class, 'create']);
Route::post('/products', [ProductController::class, 'store']);
Route::get('/products/{id}/edit', [ProductController::class, 'edit']);
Route::put('/products/{id}', [ProductController::class, 'update']);
Route::delete('/products/{id}', [ProductController::class, 'destroy']);

Route::get('/', [ShopController::class, 'index'])->name('home');
Route::get('/about', [ShopController::class, 'about'])->name('about');
Route::get('/category', [ShopController::class, 'services'])->name('category');
Route::get('/product/{id}', [ShopController::class, 'product'])->name('product.show');
Route::get('/products', [ShopController::class, 'products'])->name('products');
Route::get('/cart', [ShopController::class, 'cart'])->name('cart');
Route::get('/checkout', [ShopController::class, 'checkout'])->name('checkout');
Route::get('/contact', [ShopController::class, 'contact'])->name('contact');
//Route::post('/contact', [ShopController::class, 'submit'])->name('contact.submit');
// Route::get('/search', [ShopController::class, 'index'])->name('search');



Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });
    Route::get('/products', function () {
        return view('admin.products', ['products' => Product::with('category')->get()]);
    });
    Route::get('/categories', function () {
        return view('admin.categories', ['categories' => Category::all()]);
    });
});

