<!DOCTYPE html>
<<<<<<< HEAD
<html>
<head>
    <title>Login Test</title>
</head>
<body>
=======
<html lang="es">
<head >
    <link rel="icon" type="image/png" href="{{ asset('images/logo_icon_white.png') }}">
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>SIIAC - Acceso Institucional</title>
    @vite(['resources/css/app.scss', 'resources/css/login.scss', 'resources/js/app.js', 'resources/js/login.js'])
</head>
<body class="bg-light font-family: 'Lexend', sans-serif" >
    <div class="container-fluid min-vh-100 p-0">
        <div class="row g-0 min-vh-100">
            <div class="col-lg-7 d-none d-lg-flex hero-section">
            <canvas id="particleCanvas" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; pointer-events: none; z-index: 0;"></canvas>                
            <div class="d-flex flex-column justify-content-between p-5 hero-content w-100">
                <div class="d-flex align-items-center gap-3 animate__animated animate__fadeIn">
                        <img src="{{ asset('images/logo_siiac.png') }}" alt="SIIAC Logo" class="img-fluid" style="width: 100px; height: 100px; border-radius: 10%;">
                    
                    <span class="fs-2 fw-bold text-white tracking-tight">SIIAC</span>
                </div>
                
                <div class="py-5">
                    <h1 class="display-3 fw-bold text-white mb-4 mt-5" style="line-height: 1.1;">
                        <span class="text-resaltado">Tu portal académico</span> <span class="text-white">Reimaginado</span>
                    </h1>
                    <p class="fs-5 text-white mb-5" style="opacity: 0.85; max-width: 500px;">
                        Acceso Institucional Seguro para la gestión académica de estudiantes, docentes y personal.
                    </p>
                    
                    
                </div>
                
                <div class="text-white-50 small">
                    © 2026 Sistema Integral de Inscripción y Administración Curricular.
                </div>
            </div>
        </div>
>>>>>>> df0fbe32545c0d17a632106ac795c4a4de8152ed

<form method="POST" action="{{ route('login.post') }}">
    @csrf

    <input type="email" name="email" placeholder="email"><br><br>
    <input type="password" name="password" placeholder="password"><br><br>

    <button type="submit">Entrar</button>
</form>

</body>
</html>