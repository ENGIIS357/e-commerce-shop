<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    private $products;
    private $about;

    public function __construct()
    {
        $this->products = [
            ['id' => 1, 'name' => 'تيشيرت كلاسيكي', 'price' => 29.99, 'on_sale' => true,  'description' => 'تيشيرت قطني عالي الجودة.'],
            ['id' => 2, 'name' => 'بنطال جينز',      'price' => 59.99, 'on_sale' => false, 'description' => 'بنطال جينز مريح وقوي.'],
            ['id' => 3, 'name' => 'حذاء رياضي',      'price' => 89.99, 'on_sale' => true,  'description' => 'حذاء مناسب للتمارين والرياضة.'],
        ];

        $this->about = [
            'title' => 'من نحن',
            'description' => 'نحن متجر إلكتروني متخصص في بيع منتجات عالية الجودة وبخدمة سريعة.',
            'rawHtml' => '<strong>مهم:</strong> التوصيل متاح لكافة المدن.',
        ];
    }

    public function products()
    {
        $products = $this->products;
        return view('shop.products', compact('products'));
    }

    public function productDetails($id)
    {
        $product = collect($this->products)->firstWhere('id', (int) $id);
        if (! $product) {
            abort(404);
        }
        return view('shop.product-details', compact('product'));
    }

    public function cart()
    {
        return view('shop.cart');
    }

    public function about()
    {
        $title = $this->about['title'];
        $description = $this->about['description'];
        $rawHtml = $this->about['rawHtml'];
        return view('shop.about-us', compact('title', 'description', 'rawHtml'));
    }

    public function contact()
    {
        return view('shop.contact');
    }
}
