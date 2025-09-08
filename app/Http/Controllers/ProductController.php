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
public function create()
{
    return view('shop.create-product');
}

public function store(Request $request)
{
    $data = $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'price' => 'required|numeric',
        'on_sale' => 'sometimes|boolean',
        'image' => 'nullable|image|max:2048'
    ]);

    // التعامل مع رفع الصورة
    if($request->hasFile('image')){
        $data['image'] = $request->file('image')->store('products', 'public');
    }

    Product::create($data);

    return redirect('/products')->with('success', 'تم إضافة المنتج بنجاح!');
}

}
