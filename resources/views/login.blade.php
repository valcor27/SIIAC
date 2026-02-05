<!DOCTYPE html>
<html>
<head>
    <title>Login Test</title>
</head>
<body>

<form method="POST" action="{{ route('login.post') }}">
    @csrf

    <input type="email" name="email" placeholder="email"><br><br>
    <input type="password" name="password" placeholder="password"><br><br>

    <button type="submit">Entrar</button>
</form>

</body>
</html>