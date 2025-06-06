
<!DOCTYPE html>
<html>
<head>
    <title>Product List</title>
    <style>
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            background-color: #f4f4f4;
            text-align: left;
        }
    </style>
</head>
<body>
    <form method="POST" action="/logout" style="text-align:right; margin: 10px;">
    @csrf
    <button type="submit">Logout</button>
</form>


    <p style="text-align:center;">
    <a href="/products/create">➕ Add New Product</a>
</p>


<h1 style="text-align:center;">Product List</h1>

@if($products->count())
  <table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Price (PHP)</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td>P {{ number_format($product->price, 2) }}</td>
                <td>
                    <a href="/products/{{ $product->id }}/edit">✏️ Edit</a>
                    <form action="/products/{{ $product->id }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Are you sure?')">🗑️ Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@else
    <p style="text-align:center;">No products found.</p>
@endif



</body>
</html>