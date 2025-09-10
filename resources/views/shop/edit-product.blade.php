@extends('layouts.app')

@section('content')
<h1>تعديل المنتج</h1>

<form action="{{ url('/products/' . $product->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div>
        <label>اسم المنتج:</label>
        <input type="text" name="name" value="{{ $product->name }}" required>
    </div>
    <div>
        <label>الوصف:</label>
        <textarea name="description" required>{{ $product->description }}</textarea>
    </div>
    <div>
        <label>السعر:</label>
        <input type="number" step="0.01" name="price" value="{{ $product->price }}" required>
    </div>
    <div>
        <label>في الخصم:</label>
        <input type="checkbox" name="on_sale" value="1" {{ $product->on_sale ? 'checked' : '' }}>
    </div>
    <div>
        <label>صورة المنتج:</label>
        <input type="file" name="image">
    </div>
    <button type="submit">تحديث المنتج</button>
</form>
@endsection
