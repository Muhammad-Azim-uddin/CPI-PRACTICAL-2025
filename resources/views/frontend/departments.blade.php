@extends('layouts.frontendlayout')
@section('title', 'Departments')
@push('css')
    <style>
        #department {
            height: 500px !important;
            width: auto;
        }

        @media (max-width: 768px) {
            #department {
                height: 400px !important;
                width: auto;
            }

            #card {
                border: none;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
                transition: all 0.3s ease-in-out;
            }

            #card:hover {
                box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
                transform: scale(1.03);
            }

            #card img {
                transition: transform 0.3s ease-in-out;
            }

            #card:hover img {
                transform: scale(1.02);
            }

        }
    </style>
@endpush

@section('content')

    <div class="container mt-5">
        <div class="row">

            <div class="col-12">
                <div class="section-title text-center position-relative mb-4">
                    <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Department</h6>
                    <h1 class="display-4">Checkout Departments</h1>
                </div>
            </div>
            <div class="container py-5">
                <div class="col-lg-12">
                    <h2 class="text-center mb-4">Departments</h2>
                    <div class="row g-4">
                        @foreach ($departments as $department)
                            <div class="col-md-6 col-lg-4" id="card">
                                <div class="card border-0  h-100">
                                    <img src="{{ asset($department->image) }}" class="card-img-top img-fluid"
                                        alt="{{ $department->name }}" style="height: 220px; object-fit: cover;">
                                    <div class="card-body bg-light">
                                        <h5 class="card-title text-primary">{{ $department->name }}</h5>
                                        <p class="card-text text-muted">{{ Str::limit($department->long_description, 120) }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection