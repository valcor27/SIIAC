@extends('layouts.app')

@section('title', 'Componentes')

@section('content')
<div class="container-fluid py-5">
    <div class="row mb-5">
        <div class="col-12">
            <h1 class="display-4 fw-bold text-dark mb-2">
                <i class="fa-solid fa-palette me-3"></i>Biblioteca de Componentes
            </h1>
            <p class="fs-5 text-muted">Todos los componentes reutilizables del sistema SIIAC</p>
            <hr class="my-4">
        </div>
    </div>

    <!-- BOTONES -->
    <div class="row mb-5">
        <div class="col-12">
            <h2 class="fs-3 fw-bold text-dark mb-4">
                <i class="fa-solid fa-square me-2"></i>Botones
            </h2>
        </div>
        <div class="col-12">
            <div class="card border-0 shadow-sm">
                <div class="card-body p-4">
                    <button type="button" class="btn btn-primary me-2 mb-2">
                        <span>Botón Primario</span>
                        <i class="fa-solid fa-arrow-right ms-2"></i>
                    </button>
                    <button type="button" class="btn btn-secondary me-2 mb-2">
                        Botón Secundario
                    </button>
                    <button type="button" class="btn btn-outline-primary me-2 mb-2">
                        Botón Outline
                    </button>
                    <button type="button" class="btn btn-link text-primary me-2 mb-2" style="border: none; background: none;">
                        <i class="fa-solid fa-eye"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- INPUTS / FORM ELEMENTS -->
    <div class="row mb-5">
        <div class="col-12">
            <h2 class="fs-3 fw-bold text-dark mb-4">
                <i class="fa-solid fa-input-text me-2"></i>Campos de Formulario
            </h2>
        </div>
        <div class="col-md-6">
            <div class="card border-0 shadow-sm">
                <div class="card-body p-4">
                    <h5 class="card-title mb-3">Input con Floating Label</h5>
                    <div class="form-floating-label mb-3">
                        <input type="email" 
                                class="form-control" 
                                id="demo-email"
                                placeholder=" "
                                required>
                        <label for="demo-email" class="form-label">
                            <i class="fa-regular fa-envelope me-2"></i>Correo Institucional
                        </label>
                    </div>
                    <div class="form-floating-label position-relative">
                        <input type="password" 
                                class="form-control" 
                                id="demo-password"
                                placeholder=" "
                                required>
                        <label for="demo-password" class="form-label">
                            <i class="fa-solid fa-lock me-2"></i>Contraseña
                        </label>
                        <button type="button" class="btn position-absolute top-50 translate-middle-y pe-3 text-muted" style="border: none; background: none; right: 5px; z-index: 10; cursor: pointer;">
                            <i class="fa-solid fa-eye"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card border-0 shadow-sm">
                <div class="card-body p-4">
                    <h5 class="card-title mb-3">Checkboxes & Radio</h5>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="demo-check1">
                        <label class="form-check-label" for="demo-check1">
                            Recordarme
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="demo-check2">
                        <label class="form-check-label" for="demo-check2">
                            Aceptar términos y condiciones
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ENLACES -->
    <div class="row mb-5">
        <div class="col-12">
            <h2 class="fs-3 fw-bold text-dark mb-4">
                <i class="fa-solid fa-link me-2"></i>Enlaces
            </h2>
        </div>
        <div class="col-12">
            <div class="card border-0 shadow-sm">
                <div class="card-body p-4">
                    <a href="#" class="text-decoration-none fw-semibold link-hover text-primary me-4">
                        Enlace Primario
                    </a>
                    <a href="#" class="text-muted text-decoration-none extra-small link-hover">
                        Enlace Secundario
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- TARJETAS -->
    <div class="row mb-5">
        <div class="col-12">
            <h2 class="fs-3 fw-bold text-dark mb-4">
                <i class="fa-solid fa-rectangle-list me-2"></i>Tarjetas
            </h2>
        </div>
        <div class="col-md-6">
            <div class="card border-0 shadow-sm">
                <div class="card-body p-4">
                    <h5 class="card-title">Tarjeta Básica</h5>
                    <p class="card-text text-muted">Contenido de ejemplo para la tarjeta. Puede contener texto, imágenes u otros componentes.</p>
                    <button class="btn btn-primary btn-sm">Acción</button>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card border-0 shadow-sm">
                <div class="card-body p-4">
                    <div class="d-flex align-items-start">
                        <i class="fa-solid fa-circle-check text-success fs-5 me-3 mt-1"></i>
                        <div>
                            <h5 class="card-title mb-1">Tarjeta con Icono</h5>
                            <p class="card-text text-muted small mb-0">Tarjeta con icono y contenido alineado.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- BADGES & ETIQUETAS -->
    <div class="row mb-5">
        <div class="col-12">
            <h2 class="fs-3 fw-bold text-dark mb-4">
                <i class="fa-solid fa-tag me-2"></i>Etiquetas
            </h2>
        </div>
        <div class="col-12">
            <div class="card border-0 shadow-sm">
                <div class="card-body p-4">
                    <span class="badge bg-primary me-2">Primaria</span>
                    <span class="badge bg-secondary me-2">Secundaria</span>
                    <span class="badge bg-success me-2">Éxito</span>
                    <span class="badge bg-danger me-2">Peligro</span>
                    <span class="badge bg-warning text-dark me-2">Advertencia</span>
                    <span class="badge bg-info">Información</span>
                </div>
            </div>
        </div>
    </div>

    <!-- ALERTAS -->
    <div class="row mb-5">
        <div class="col-12">
            <h2 class="fs-3 fw-bold text-dark mb-4">
                <i class="fa-solid fa-bell me-2"></i>Alertas
            </h2>
        </div>
        <div class="col-12">
            <div class="alert alert-primary alert-dismissible fade show mb-3" role="alert">
                <i class="fa-solid fa-circle-info me-2"></i>
                <strong>Información:</strong> Esto es una alerta informativa.
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            <div class="alert alert-success alert-dismissible fade show mb-3" role="alert">
                <i class="fa-solid fa-circle-check me-2"></i>
                <strong>Éxito:</strong> La operación se completó correctamente.
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            <div class="alert alert-warning alert-dismissible fade show mb-3" role="alert">
                <i class="fa-solid fa-triangle-exclamation me-2"></i>
                <strong>Advertencia:</strong> Hay algo que debes considerar.
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i class="fa-solid fa-circle-exclamation me-2"></i>
                <strong>Error:</strong> Algo salió mal.
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        </div>
    </div>

    <!-- ICONOS -->
    <div class="row mb-5">
        <div class="col-12">
            <h2 class="fs-3 fw-bold text-dark mb-4">
                <i class="fa-solid fa-icons me-2"></i>Iconos (Font Awesome)
            </h2>
        </div>
        <div class="col-12">
            <div class="card border-0 shadow-sm">
                <div class="card-body p-4">
                    <div class="row g-3">
                        <div class="col-6 col-md-3 col-lg-2 text-center">
                            <i class="fa-solid fa-graduation-cap fs-2 text-primary mb-2"></i>
                            <p class="small">Graduación</p>
                        </div>
                        <div class="col-6 col-md-3 col-lg-2 text-center">
                            <i class="fa-solid fa-envelope fs-2 text-primary mb-2"></i>
                            <p class="small">Correo</p>
                        </div>
                        <div class="col-6 col-md-3 col-lg-2 text-center">
                            <i class="fa-solid fa-lock fs-2 text-primary mb-2"></i>
                            <p class="small">Contraseña</p>
                        </div>
                        <div class="col-6 col-md-3 col-lg-2 text-center">
                            <i class="fa-solid fa-eye fs-2 text-primary mb-2"></i>
                            <p class="small">Ver</p>
                        </div>
                        <div class="col-6 col-md-3 col-lg-2 text-center">
                            <i class="fa-solid fa-arrow-right fs-2 text-primary mb-2"></i>
                            <p class="small">Siguiente</p>
                        </div>
                        <div class="col-6 col-md-3 col-lg-2 text-center">
                            <i class="fa-solid fa-user fs-2 text-primary mb-2"></i>
                            <p class="small">Usuario</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- LAYOUT -->
    <div class="row mb-5">
        <div class="col-12">
            <h2 class="fs-3 fw-bold text-dark mb-4">
                <i class="fa-solid fa-border-all me-2"></i>Layouts
            </h2>
        </div>
        <div class="col-12">
            <div class="card border-0 shadow-sm">
                <div class="card-body p-4">
                    <h5 class="card-title mb-3">Grid Sistema (12 columnas)</h5>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="p-3 bg-light rounded">
                                <code>.col-md-6</code> - 50% ancho en md
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-3 bg-light rounded">
                                <code>.col-md-6</code> - 50% ancho en md
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="p-3 bg-light rounded">
                                <code>.col-lg-4</code>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="p-3 bg-light rounded">
                                <code>.col-lg-4</code>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="p-3 bg-light rounded">
                                <code>.col-lg-4</code>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- TIPOGRAFÍA -->
    <div class="row mb-5">
        <div class="col-12">
            <h2 class="fs-3 fw-bold text-dark mb-4">
                <i class="fa-solid fa-type me-2"></i>Tipografía
            </h2>
        </div>
        <div class="col-12">
            <div class="card border-0 shadow-sm">
                <div class="card-body p-4">
                    <h1 class="display-1">Display 1 (h1)</h1>
                    <h2 class="display-3 my-3">Display 3 (h2)</h2>
                    <h3 class="fs-3 my-3">fs-3 (h3)</h3>
                    <h4 class="fs-4 my-3">fs-4 (h4)</h4>
                    <p class="fs-5 text-muted">fs-5 (párrafo grande)</p>
                    <p class="fs-6">fs-6 (párrafo normal)</p>
                    <p class="small text-muted">Small (texto pequeño)</p>
                    <p class="extra-small text-muted">extra-small (texto muy pequeño)</p>
                </div>
            </div>
        </div>
    </div>

    <!-- COLORES -->
    <div class="row mb-5">
        <div class="col-12">
            <h2 class="fs-3 fw-bold text-dark mb-4">
                <i class="fa-solid fa-palette me-2"></i>Paleta de Colores
            </h2>
        </div>
        <div class="col-md-6">
            <div class="card border-0 shadow-sm">
                <div class="card-body p-4">
                    <h5 class="card-title mb-3">Colores del Sistema</h5>
                    <div class="mb-3">
                        <div class="color-box mb-2" style="background: #830734; height: 60px; border-radius: 8px;"></div>
                        <p class="mb-0"><strong>Principal:</strong> #830734</p>
                        <p class="small text-muted mb-0">$principal</p>
                    </div>
                    <div class="mb-3">
                        <div class="color-box mb-2" style="background: #B94558; height: 60px; border-radius: 8px;"></div>
                        <p class="mb-0"><strong>Adicional 6:</strong> #B94558</p>
                        <p class="small text-muted mb-0">$color-adicional-6 (Secondary)</p>
                    </div>
                    <div class="mb-3">
                        <div class="color-box mb-2" style="background: #A4795C; height: 60px; border-radius: 8px;"></div>
                        <p class="mb-0"><strong>Adicional 2:</strong> #A4795C</p>
                        <p class="small text-muted mb-0">$color-adicional-2 (Success)</p>
                    </div>
                    <div class="mb-3">
                        <div class="color-box mb-2" style="background: #948EA3; height: 60px; border-radius: 8px;"></div>
                        <p class="mb-0"><strong>Adicional 5:</strong> #948EA3</p>
                        <p class="small text-muted mb-0">$color-adicional-5 (Info)</p>
                    </div>
                    <div class="mb-3">
                        <div class="color-box mb-2" style="background: #1D2131; height: 60px; border-radius: 8px;"></div>
                        <p class="mb-0"><strong>Adicional 3:</strong> #1D2131</p>
                        <p class="small text-muted mb-0">$color-adicional-3 (Warning/Dark)</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card border-0 shadow-sm">
                <div class="card-body p-4">
                    <h5 class="card-title mb-3">Colores Bootstrap Mapeados</h5>
                    <div class="d-flex gap-2 flex-wrap">
                        <div style="background: #830734; width: 60px; height: 60px; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: white; font-weight: bold; font-size: 12px; text-align: center;" title="Primary - #830734">
                            <span>Primary</span>
                        </div>
                        <div style="background: #B94558; width: 60px; height: 60px; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: white; font-weight: bold; font-size: 12px; text-align: center;" title="Secondary - #B94558">
                            <span>Secondary</span>
                        </div>
                        <div style="background: #A4795C; width: 60px; height: 60px; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: white; font-weight: bold; font-size: 12px; text-align: center;" title="Success - #A4795C">
                            <span>Success</span>
                        </div>
                        <div style="background: #948EA3; width: 60px; height: 60px; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: white; font-weight: bold; font-size: 12px; text-align: center;" title="Info - #948EA3">
                            <span>Info</span>
                        </div>
                        <div style="background: #1D2131; width: 60px; height: 60px; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: white; font-weight: bold; font-size: 12px; text-align: center;" title="Warning - #1D2131">
                            <span>Warning</span>
                        </div>
                        <div style="background: #830734; width: 60px; height: 60px; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: white; font-weight: bold; font-size: 12px; text-align: center;" title="Danger - #830734">
                            <span>Danger</span>
                        </div>
                    </div>
                    <div class="mt-4">
                        <h6 class="fw-bold">Otros Colores</h6>
                        <div class="mb-2">
                            <div class="color-box mb-2" style="background: #ECECE1; height: 40px; border-radius: 8px; border: 1px solid #ddd;"></div>
                            <p class="small mb-0"><strong>Adicional 1:</strong> #ECECE1 (Blanco suave)</p>
                        </div>
                        <div class="mb-2">
                            <div class="color-box mb-2" style="background: #FAFAFA; height: 40px; border-radius: 8px; border: 1px solid #ddd;"></div>
                            <p class="small mb-0"><strong>Background:</strong> #FAFAFA</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
