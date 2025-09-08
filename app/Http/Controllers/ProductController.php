<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
   use App\Models\Product;

public function index()
{
    $products = Product::all(); // استرجاع جميع المنتجات
    return view('shop.products', compact('products'));
}
public function show($id)
{
    $product = Product::findOrFail($id); // البحث عن المنتج حسب الـ ID
    return view('shop.product-details', compact('product'));
}

}
