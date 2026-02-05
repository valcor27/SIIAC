<!DOCTYPE html>
<html>
<head>
    <title>Inicio</title>
</head>
<body>
    <h1>Bienvenido {{ auth()->user()->nombre }}</h1>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Cerrar sesión</button>
    </form>
</body>
</html>