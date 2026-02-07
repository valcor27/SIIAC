@extends('layouts.app')

@section('title', 'Inicio')

@section('content')

    <div class="container py-5">
        <div class="cards-container">

            <div class="student-card theme-red">
                
                <div class="position-relative d-inline-block">
                    <img src="https://i.pravatar.cc/150?img=11" class="student-avatar" alt="Avatar">
                </div>

                <h5 class="student-name">Mateo Garcia</h5>
                <p class="student-id">ID: STU-2023-089</p>

                <div class="row w-100 px-3 mb-4 mt-3">
                    <div class="col-4 border-end border-secondary text-center">
                        <div class="stat-label">Grade</div>
                        <div class="stat-value">10th</div>
                    </div>
                    <div class="col-4 border-end border-secondary text-center">
                        <div class="stat-label">GPA</div>
                        <div class="stat-value">3.8</div>
                    </div>
                    <div class="col-4 text-center">
                        <div class="stat-label">Class</div>
                        <div class="stat-value">B-2</div>
                    </div>
                </div>

                <div class="d-flex justify-content-center gap-2 w-100 px-4">
                    <button class="btn btn-custom-edit flex-grow-1">
                        <i class="fa-solid fa-pen-to-square"></i> Edit
                    </button>
                    <button class="btn btn-custom-icon px-3">
                        <i class="fa-solid fa-trash"></i>
                    </button>
                </div>

            </div>
            </div>
    </div>

@endsection