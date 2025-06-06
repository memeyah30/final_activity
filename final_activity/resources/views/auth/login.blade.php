<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        form {
            width: 300px;
            margin: 100px auto;
        }
        input {
            width: 100%;
            padding: 8px;
            margin: 8px 0;
        }
        button {
            width: 100%;
            padding: 8px;
        }
    </style>
</head>
<body>

<h2 style="text-align:center;">Login</h2>

@if ($errors->any())
    <div style="color:red;text-align:center;">
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif

<form method="POST" action="/login">
    @csrf
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Login</button>
</form>

</body>
</html>
