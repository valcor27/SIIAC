<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title', 'SIIAC')</title>
  <link rel="icon" type="image/png" href="{{ asset('images/logo_icon_white.png') }}">

  @vite(['resources/css/app.scss', 'resources/js/app.js'])

</head>

<body class="bg-dark text-light">
  

  <div class="d-flex w-100 h-100">

    <aside id="sidebar" class="glass-panel sidebar-container collapsed d-flex flex-column flex-shrink-0 z-2">

      <div class="sidebar-header mt-3" id="sidebarToggle" style="cursor: pointer;" title="Contraer/Expandir menú">
        <div class="logo-box">
          <img src="{{ asset('images/logo_siiac.png') }}" alt="SIIAC Logo" class="logo-image"
            style="width: 50px; height: 50px;" />
        </div>
        <div class="sidebar-text overflow-hidden">
          <h1 class="h6 fw-bold mb-0 tracking-wide">SIIAC</h1>
          <p class="small text-resaltado mb-0" style="font-size: 0.7rem; letter-spacing: 1px;">UI v1.0</p>
        </div>
      </div>

      <div class="py-3 flex-grow-1 overflow-y-auto overflow-x-hidden">
        <p class="small fw-semibold text-resaltado text-uppercase mb-2 sidebar-text-header"
          style="font-size: 0.75rem; letter-spacing: 1.5px;">Menu Principal</p>

        <nav class="nav flex-column">
          <a href="#" class="nav-link active">
            <i class="fa-solid fa-gauge-high"></i>
            <span class="sidebar-text">Dashboard</span>
          </a>
          <a href="#" class="nav-link">
            <i class="fa-solid fa-chart-pie"></i>
            <span class="sidebar-text">Analiticas</span>
          </a>
        </nav>
      </div>

      <div class="p-3 border-top border-light border-opacity-10">
        <div class="glass-card rounded-3 cursor-pointer user-card">
          <div class="rounded-circle border border-white border-opacity-10"
            style="width: 40px; height: 40px; background-image: url('{{ Avatar::create(Auth::user()->name ?? 'Invitado')->toBase64() }}'); background-size: cover;">
          </div>
          <div class="sidebar-text overflow-hidden">
            <p class="mb-0 small fw-semibold text-truncate">{{ Auth::user()->name ?? 'Invitado' }}</p>
            <p class="mb-0 small text-resaltado text-truncate" style="font-size: 0.75rem;">Product Designer</p>
          </div>
          <i class="fa-solid fa-chevron-up text-resaltado sidebar-text ms-2"></i>
        </div>
      </div>
    </aside>
    <div class="d-flex flex-column flex-grow-1" style="max-height: 100vh; overflow-y: auto;">

      <header
        class="glass-panel m-3 mx-4 p-3 rounded-4 sticky-top z-3 d-flex align-items-center justify-content-between">
        <div class="flex-grow-1" style="max-width: 400px;">
          <div class="position-relative">
            <i class="fa-solid fa-magnifying-glass search-icon fs-6"></i>
            <input type="text" class="form-control glass-input ps-5 py-2 rounded-3" placeholder="Busqueda...">
          </div>
        </div>

        <div class="d-flex align-items-center gap-2">
          <button class="btn-icon d-flex align-items-center justify-content-center">
            <i class="fa-solid fa-bell"></i>
          </button>
          <button class="btn-icon d-flex align-items-center justify-content-center">
            <i class="fa-solid fa-gear"></i>
          </button>
        </div>
      </header>

      <main class="px-4 pb-4">
        @yield('content')
      </main>

    </div>
  </div>


</body>

</html>