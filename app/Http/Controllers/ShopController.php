<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    //
    public function index() {
    return view('shop.welcome');
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