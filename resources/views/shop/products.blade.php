@extends('layouts.app')

@section('content')
<h1>جميع المنتجات</h1>

@foreach($products as $product)
    <div>
        <h2>{{ $product->name }}</h2>
        <p>{{ $product->description }}</p>
        <p>السعر: ${{ $product->price }}</p>
        <p>متاح للخصم: {{ $product->on_sale ? 'نعم' : 'لا' }}</p>
        <a href="{{ url('/products/' . $product->id . '/edit') }}">تعديل</a>

    </div>
    <form action="{{ url('/products/' . $product->id) }}" method="POST" onsubmit="return confirm('هل أنت متأكد من حذف المنتج؟')">
    @csrf
    @method('DELETE')
    <button type="submit">حذف</button>
</form>

    <hr>
@endforeach
@endsection
