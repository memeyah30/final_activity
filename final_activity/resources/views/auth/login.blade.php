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

<form method="POST" action="/login" style="width:300px;margin:auto;">
    @csrf
    <input type="email" name="email" placeholder="Email" required><br><br>
    <input type="password" name="password" placeholder="Password" required><br><br>
    <button type="submit">Login</button>
</form>

<p style="text-align:center;"><a href="/register">Don't have an account? Register</a></p>
</body>
</html>
