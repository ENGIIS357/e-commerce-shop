<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index() {
        return view('shop.home');
    }

    public function services() {
        return view('shop.category');
    }

    public function cart() {
        return view('shop.cart');
    }

    public function about() {
        return view('shop.about');
    }

    public function contact() {
        return view('shop.contact');
    }
    
    public function product($id) {
        // تمرير id للصفحة لو تحتاج
        return view('shop.product-details', compact('id'));
    }
     public function products() {
        return view('shop.products');
    }
    public function checkout() {
        return view('shop.checkout');
    }

    public function submit(Request $request) {
        // هنا منطق إرسال رسالة contact
    }
}



// namespace App\Http\Controllers;

// use Illuminate\Http\Request;

// class ShopController extends Controller
// {
//     public function index()
//     {
//         return view('shop'); // هذا يعرض صفحة resources/views/shop.welcome.blade.php
//     }
// }