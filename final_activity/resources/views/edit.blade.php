<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
        }
        .container {
            width: 50%;
            margin: 60px auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 10px #ccc;
        }
        label {
            display: block;
            margin-top: 15px;
            color: #333;
        }
        input[type="text"], input[type="number"], textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }
        button {
            margin-top: 20px;
            padding: 10px;
            background: #3490dc;
            color: white;
            border: none;
            width: 100%;
            border-radius: 6px;
            font-size: 16px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Edit Product</h1>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="/products/{{ $product->id }}">
        @csrf
        @method('PUT')

        <label>Name:</label>
        <input type="text" name="name" value="{{ $product->name }}" required>

        <label>Description:</label>
        <textarea name="description" required>{{ $product->description }}</textarea>

        <label>Price (PHP):</label>
        <input type="number" step="0.01" name="price" value="{{ $product->price }}" required
               style="appearance: textfield; -moz-appearance: textfield; -webkit-appearance: none;">

        <button type="submit">Update Product</button>
    </form>

    <p style="text-align:center;"><a href="/">← Back to Product List</a></p>
</div>

</body>
</html>
