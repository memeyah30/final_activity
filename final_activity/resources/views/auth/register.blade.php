<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
<h2 style="text-align:center;">Register</h2>

<form method="POST" action="/register" style="width:300px;margin:auto;">
    @csrf
    <input type="text" name="name" placeholder="Name" required><br><br>
    <input type="email" name="email" placeholder="Email" required><br><br>
    <input type="password" name="password" placeholder="Password" required><br><br>
    <input type="password" name="password_confirmation" placeholder="Confirm Password" required><br><br>
    <button type="submit">Register</button>
</form>

<p style="text-align:center;"><a href="/login">Already have an account? Login</a></p>
</body>
</html>
