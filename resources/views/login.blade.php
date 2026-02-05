<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>SIIAC - Acceso Institucional</title>
    @vite(['resources/css/app.scss', 'resources/css/login.scss', 'resources/js/app.js', 'resources/js/login.js'])
</head>
<body class="bg-light font-family: 'Lexend', sans-serif" >
    <div class="container-fluid min-vh-100 p-0">
        <div class="row g-0 min-vh-100">
            <div class="col-lg-7 d-none d-lg-flex hero-section">
            <canvas id="particleCanvas" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; pointer-events: none; z-index: 0;"></canvas>                <div class="d-flex flex-column justify-content-between p-5 hero-content w-100">
                    <div class="d-flex align-items-center gap-3 animate__animated animate__fadeIn">
                        <div class="brand-logo shadow-lg">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
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

            <div class="col-lg-5 d-flex align-items-center justify-content-center p-4 bg-light-1 login-panel">
                <div class="w-100" style="max-width: 420px;">
                        <div class="d-flex d-lg-none align-items-center gap-3 mb-5">
                        <div class="brand-logo">
                            <i class="fa-solid fa-graduation-cap"></i>
                        </div>
                        <span class="fs-3 fw-bold text-primary">SIIAC</span>
                    </div>

                    <div class="login-header mb-5">
                        <h2 class="display-6 fw-bold mb-2 text-dark">Bienvenido</h2>
                        <p class="text-muted">Por favor, introduce tus credenciales institucionales.</p>
                    </div>

                    <form action="#" method="POST" class="needs-validation">
                        <div class="form-floating-label">
                            <input type="email" 
                                   class="form-control" 
                                   id="username"
                                   placeholder=" "
                                   required>
                            <label for="username" class="form-label">
                                <i class="fa-regular fa-envelope me-2"></i>Correo Institucional
                            </label>
                        </div>

                        <div class="form-floating-label">
                            <input type="password" 
                                   class="form-control" 
                                   id="password"
                                   placeholder=" "
                                   required>
                            <label for="password" class="form-label">
                                <i class="fa-solid fa-lock me-2"></i>Contraseña
                            </label>
                        </div>

                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="remember">
                                <label class="form-check-label text-muted small" for="remember">
                                    Recordarme
                                </label>
                            </div>
                            <a href="#" class="text-decoration-none small fw-semibold link-hover text-primary">
                                ¿Olvidaste tu contraseña?
                            </a>
                        </div>

                        <button type="submit" class="btn btn-primary w-100 mb-4 py-3">
                            <span>Ingresar al Portal</span>
                            <i class="fa-solid fa-arrow-right ms-2"></i>
                        </button>
                    </form>

                    <div class="text-center mt-5 p-4 rounded-4" style="background-color: #F3F7F4;">
                        <p class="text-muted small mb-0">
                            ¿Problemas de acceso? 
                            <a href="#" class="text-decoration-none fw-bold text-primary link-hover">
                                Contactar soporte técnico
                            </a>
                        </p>
                    </div>

                    <div class="d-flex justify-content-center gap-4 mt-5">
                        <a href="#" class="text-muted text-decoration-none extra-small link-hover">Privacidad</a>
                        <span class="text-black-50">•</span>
                        <a href="#" class="text-muted text-decoration-none extra-small link-hover">Términos</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>