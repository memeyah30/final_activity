
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
                <th>Price (USD)</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>P {{ number_format($product->price, 2) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    <p style="text-align:center;">No products found.</p>
@endif



</body>
</html>