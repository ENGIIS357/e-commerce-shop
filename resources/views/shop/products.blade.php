@extends('layouts.app')

@section('title', 'المنتجات')

@section('content')
    <h1>قائمة المنتجات</h1>

    <div class="product-list">
        @foreach ($products as $product)
            <div class="product-card">
                <h3>{{ $loop->index + 1 }}. {{ $product['name'] }}</h3>
                <p>السعر: {{ $product['price'] }}$</p>

                @if ($product['on_sale'])
                    <span style="color:red;">Sale!</span>
                @else
                    <span>Regular Price</span>
                @endif

                <p>{{ $product['description'] }}</p>
            </div>
        @endforeach
    </div>
@endsection