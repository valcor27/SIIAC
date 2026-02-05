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

                    <div class="form-floating-label position-relative">
                        

                        <input type="password" 
                                class="form-control" 
                                id="password"
                                placeholder=" "
                                required>

                        <label for="password" class="form-label">
                         
                            <i class="fa-solid fa-lock me-2"></i>Contraseña
                        </label>
                        
                        <button type="button" id="togglePassword" class="btn position-absolute top-50 translate-middle-y pe-3 text-muted" style="border: none; background: none; right: 5px; z-index: 10; cursor: pointer;">
                            <i class="fa-solid fa-eye"></i>
                        </button>
                      
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

                <div class="text-center mt-5 p-4 rounded-4" >
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