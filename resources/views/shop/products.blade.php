@extends('layouts.app')

@section('content')
<h1>جميع المنتجات</h1>

@foreach($products as $product)
    <div>
        <h2>{{ $product->name }}</h2>
        <p>{{ $product->description }}</p>
        <p>السعر: ${{ $product->price }}</p>
        <p>متاح للخصم: {{ $product->on_sale ? 'نعم' : 'لا' }}</p>
        <a href="{{ url('/products/' . $product->id) }}">عرض التفاصيل</a>
    </div>
    <hr>
@endforeach
@endsection
