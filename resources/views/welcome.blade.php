@extends('layouts.app')

@section('title', 'Inicio')



@section('content')

    <div class="container mt-4">
        <div class="row">
        <div class="col-12">
            <div class="glass-card p-4 rounded-4">
            <h2 class="mb-4">Bienvenido a SIIAC {{ auth()->user()->nombre }} </h2>
            <p class="lead">Esta es la página de inicio de la aplicación SIIAC.</p>
            <p>Aquí puedes encontrar información relevante y acceder a las diferentes secciones de la aplicación.</p>
            </div>
        </div>
        </div>
    </div>


@endsection
