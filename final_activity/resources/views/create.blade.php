<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add New Product</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f9fc;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 500px;
            margin: 60px auto;
            padding: 30px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 25px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }

        input[type="text"],
        input[type="number"],
        textarea {
            width: 100%;
            padding: 10px 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 6px;
            box-sizing: border-box;
        }

        button {
            background-color: #3490dc;
            color: white;
            padding: 12px;
            border: none;
            width: 100%;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #2779bd;
        }

        .back-link {
            display: block;
            margin-top: 20px;
            text-align: center;
        }

        .back-link a {
            color: #3490dc;
            text-decoration: none;
        }

        .back-link a:hover {
            text-decoration: underline;
        }

        .error {
            color: red;
            font-size: 14px;
            margin-bottom: 10px;
        }

       
input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0;
}

input[type=number] {
    -moz-appearance: textfield;
    appearance: textfield;
}
    </style>
</head>
<body>

<div class="container">
    <h1>Add New Product</h1>

    {{-- Display Validation Errors --}}
    @if ($errors->any())
        <div class="error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/products" method="POST">
        @csrf

        <label for="name">Product Name:</label>
        <input type="text" name="name" id="name" placeholder="Enter product name" required>

        <label for="description">Description:</label>
        <textarea name="description" id="description" rows="4" placeholder="Enter product description" required></textarea>

       <label for="price">Price (PHP):</label>
       <input type="number" step="0.01" name="price" id="price" placeholder="e.g. 149.99" required style="appearance: textfield; -moz-appearance: textfield; -webkit-appearance: none;">

        <button type="submit">➕ Add Product</button>
    </form>

    <div class="back-link">
        <a href="/">← Back to Product List</a>
    </div>
</div>

</body>
</html>
