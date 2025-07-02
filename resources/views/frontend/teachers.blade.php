@extends('layouts.frontendlayout')
@section('title', 'Departments')
@section('content')
    @push('css')
        <style>
            .fixed-card {
                height: 450px;              
                display: flex;
                flex-direction: column;
            }

            .fixed-card .card-img-top {
                flex-shrink: 0;
                max-height: 250px;
                object-fit: cover;
            }

            .fixed-card .card-body {
                flex-grow: 1;
                display: flex;
                flex-direction: column;
                justify-content: space-between;
            }
        </style>
    @endpush


    <div class="col-12 my-3">
        <div class="section-title text-center position-relative mb-4">
            <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Instructor</h6>
            <h1 class="display-4">Our Instructors </h1>
        </div>
    </div>

    <section class="container py-5">
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm h-100">
                    <img src="{{ asset('frontend/assets/img/instructor/cst instructor.jpeg') }}"
                        class="card-img-top img-fluid" alt="Mohammad Mehedi Hasan">
                    <div class="card-body text-center bg-light">
                        <h5 class="card-title mb-1">Mohammad Mehedi Hasan</h5>
                        <p class="card-text mb-1">Chief Instructor</p>
                        <p class="card-text text-muted">Computer Science & Technology</p>
                        <div class="d-flex justify-content-center mt-2">
                            <a href="#" class="btn btn-sm btn-outline-primary mx-1 rounded-circle"><i
                                    class="fab fa-twitter"></i></a>
                            <a href="#" class="btn btn-sm btn-outline-primary mx-1 rounded-circle"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a href="#" class="btn btn-sm btn-outline-primary mx-1 rounded-circle"><i
                                    class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="btn btn-sm btn-outline-primary mx-1 rounded-circle"><i
                                    class="fab fa-instagram"></i></a>
                            <a href="#" class="btn btn-sm btn-outline-primary mx-1 rounded-circle"><i
                                    class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm h-100">
                    <img src="{{ asset('frontend/assets/img/instructor/civil.jpg') }}" class="card-img-top img-fluid"
                        alt="Mohammad Mehedi Hasan">
                    <div class="card-body text-center bg-light">
                        <h5 class="card-title mb-1">Shafiul Azam</h5>
                        <p class="card-text mb-1">Instructor</p>
                        <p class="card-text text-muted">Civil Technology</p>
                        <div class="d-flex justify-content-center mt-2">
                            <a href="#" class="btn btn-sm btn-outline-primary mx-1 rounded-circle"><i
                                    class="fab fa-twitter"></i></a>
                            <a href="#" class="btn btn-sm btn-outline-primary mx-1 rounded-circle"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a href="#" class="btn btn-sm btn-outline-primary mx-1 rounded-circle"><i
                                    class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="btn btn-sm btn-outline-primary mx-1 rounded-circle"><i
                                    class="fab fa-instagram"></i></a>
                            <a href="#" class="btn btn-sm btn-outline-primary mx-1 rounded-circle"><i
                                    class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm h-100">
                    <img src="{{ asset('frontend/assets/img/instructor/electrical ci.jpg') }}"
                        class="card-img-top img-fluid" alt="Mohammad Mehedi Hasan">
                    <div class="card-body text-center bg-light">
                        <h5 class="card-title mb-1">Engr Shuvro Das</h5>
                        <p class="card-text mb-1">Chief Instructor</p>
                        <p class="card-text text-muted">Electrical Technology</p>
                        <div class="d-flex justify-content-center mt-2">
                            <a href="#" class="btn btn-sm btn-outline-primary mx-1 rounded-circle"><i
                                    class="fab fa-twitter"></i></a>
                            <a href="#" class="btn btn-sm btn-outline-primary mx-1 rounded-circle"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a href="#" class="btn btn-sm btn-outline-primary mx-1 rounded-circle"><i
                                    class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="btn btn-sm btn-outline-primary mx-1 rounded-circle"><i
                                    class="fab fa-instagram"></i></a>
                            <a href="#" class="btn btn-sm btn-outline-primary mx-1 rounded-circle"><i
                                    class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm h-100">
                    <img src="{{ asset('frontend/assets/img/instructor/mechanical ci.jpeg') }}"
                        class="card-img-top img-fluid" alt="Mohammad Mehedi Hasan">
                    <div class="card-body text-center bg-light">
                        <h5 class="card-title mb-1">MD Omar Faruk</h5>
                        <p class="card-text mb-1">Chief Instructor</p>
                        <p class="card-text text-muted">Mechanical Technology</p>
                        <div class="d-flex justify-content-center mt-2">
                            <a href="#" class="btn btn-sm btn-outline-primary mx-1 rounded-circle"><i
                                    class="fab fa-twitter"></i></a>
                            <a href="#" class="btn btn-sm btn-outline-primary mx-1 rounded-circle"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a href="#" class="btn btn-sm btn-outline-primary mx-1 rounded-circle"><i
                                    class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="btn btn-sm btn-outline-primary mx-1 rounded-circle"><i
                                    class="fab fa-instagram"></i></a>
                            <a href="#" class="btn btn-sm btn-outline-primary mx-1 rounded-circle"><i
                                    class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm h-100">
                    <img src="{{ asset('frontend/assets/img/instructor/power.png') }}" class="card-img-top img-fluid"
                        alt="Mohammad Mehedi Hasan">
                    <div class="card-body text-center bg-light">
                        <h5 class="card-title mb-1">Tarun Kumar Nath</h5>
                        <p class="card-text mb-1">Chief Instructor</p>
                        <p class="card-text text-muted">Power Technology</p>
                        <div class="d-flex justify-content-center mt-2">
                            <a href="#" class="btn btn-sm btn-outline-primary mx-1 rounded-circle"><i
                                    class="fab fa-twitter"></i></a>
                            <a href="#" class="btn btn-sm btn-outline-primary mx-1 rounded-circle"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a href="#" class="btn btn-sm btn-outline-primary mx-1 rounded-circle"><i
                                    class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="btn btn-sm btn-outline-primary mx-1 rounded-circle"><i
                                    class="fab fa-instagram"></i></a>
                            <a href="#" class="btn btn-sm btn-outline-primary mx-1 rounded-circle"><i
                                    class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm h-100">
                    <img src="{{ asset('frontend/assets/img/instructor/env.jpg') }}" class="card-img-top img-fluid"
                        alt="Mohammad Mehedi Hasan">
                    <div class="card-body text-center bg-light">
                        <h5 class="card-title mb-1">Selim Uddin</h5>
                        <p class="card-text mb-1">Chief Instructor</p>
                        <p class="card-text text-muted">Environmnetal Technology</p>
                        <div class="d-flex justify-content-center mt-2">
                            <a href="#" class="btn btn-sm btn-outline-primary mx-1 rounded-circle"><i
                                    class="fab fa-twitter"></i></a>
                            <a href="#" class="btn btn-sm btn-outline-primary mx-1 rounded-circle"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a href="#" class="btn btn-sm btn-outline-primary mx-1 rounded-circle"><i
                                    class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="btn btn-sm btn-outline-primary mx-1 rounded-circle"><i
                                    class="fab fa-instagram"></i></a>
                            <a href="#" class="btn btn-sm btn-outline-primary mx-1 rounded-circle"><i
                                    class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection