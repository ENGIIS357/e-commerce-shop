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
public function edit($id)
{
    $product = Product::findOrFail($id);
    return view('shop.edit-product', compact('product'));
}

public function update(Request $request, $id)
{
    $product = Product::findOrFail($id);

    $data = $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'price' => 'required|numeric',
        'on_sale' => 'sometimes|boolean',
        'image' => 'nullable|image|max:2048'
    ]);

    if($request->hasFile('image')){
        $data['image'] = $request->file('image')->store('products', 'public');
    }

    $product->update($data);

    return redirect('/products')->with('success', 'تم تعديل المنتج بنجاح!');
}
public function destroy($id)
{
    $product = Product::findOrFail($id);
    $product->delete();

    return redirect('/products')->with('success', 'تم حذف المنتج بنجاح!');
}



}
