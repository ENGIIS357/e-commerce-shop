@extends('layouts.app')

@section('content')
<h1>إضافة منتج جديد</h1>

<form action="{{ url('/products') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        <label>اسم المنتج:</label>
        <input type="text" name="name" required>
    </div>
    <div>
        <label>الوصف:</label>
        <textarea name="description" required></textarea>
    </div>
    <div>
        <label>السعر:</label>
        <input type="number" step="0.01" name="price" required>
    </div>
    <div>
        <label>في الخصم:</label>
        <input type="checkbox" name="on_sale" value="1">
    </div>
    <div>
        <label>صورة المنتج:</label>
        <input type="file" name="image">
    </div>
    <button type="submit">إضافة المنتج</button>
</form>
@endsection
