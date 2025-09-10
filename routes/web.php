<?php

// use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
// routes/web.php
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ProductController;

Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/create', [ProductController::class, 'create']);
Route::post('/products', [ProductController::class, 'store']);
Route::get('/products/{id}/edit', [ProductController::class, 'edit']);
Route::put('/products/{id}', [ProductController::class, 'update']);

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

// Account routes
// Route::get('/account/profile', [AccountController::class, 'profile'])->name('account.profile');
// Route::get('/account/orders', [AccountController::class, 'orders'])->name('account.orders');
// Route::get('/account/wishlist', [AccountController::class, 'wishlist'])->name('account.wishlist');
// Route::get('/account/settings', [AccountController::class, 'settings'])->name('account.settings');

// // Auth routes
// Auth::routes();
