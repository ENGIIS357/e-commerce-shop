<!DOCTYPE html>
<html>
<head>
    <title>Admin - Products</title>
</head>
<body>
    <h1>Product Management</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Category</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->category->name }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>