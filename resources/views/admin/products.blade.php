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
                <th>Actions</th> <!-- Added column for actions -->
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->category->name }}</td>
                <td>
                    @can('update', $product)
                    <button>Edit</button>
                    @endcan
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>