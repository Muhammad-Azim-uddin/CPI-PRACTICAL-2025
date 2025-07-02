@extends('layouts.frontendlayout')
@section('title', 'Departments')
@section('content')


    <div class="container mt-5">
        <div class="row">

        <div class="col-12">
            <div class="section-title text-center position-relative mb-4">
                <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Department</h6>
                <h1 class="display-4">Checkout Departments</h1>
            </div>
        </div>
            <div class="col-lg-12">
                <h2 class="text-center mb-4">Departments</h2>
                <div class="row">
                    @foreach ($departments as $department)
                        <div class="col-lg-4 mb-4">
                            <div class="card h-100">
                                <img src="{{ asset($department->image) }}" class="card-img-top" alt="{{ $department->name }}">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $department->name }}</h5>
                                    <p class="card-text">{{ $department->description }}</p>

                                </div>

                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
@endsection