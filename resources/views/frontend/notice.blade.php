@extends('layouts.frontendlayout')
@section('title', 'Notices')

@push('css')
    <style>
        .notice-card {
            border-left: 4px solid #234567;
            transition: 0.3s ease-in-out;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            /* light shadow */
        }

        .notice-card:hover {
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.08);
            /* slightly stronger on hover */
            transform: translateY(-2px);
        }

        .notice-date {
            font-size: 14px;
            color: #888;
        }
    </style>
@endpush


@section('content')
    <div class="container py-5">
        <div class="text-center mb-5">
            <h6 class="text-uppercase text-secondary">Notice</h6>
            <h1 class="display-5">Latest Announcements</h1>
        </div>

        <div class="row g-4">
            <!-- Notice 1 -->
            <div class="col-md-6 col-lg-4">
                <div class="bg-light rounded p-4 notice-card h-100">
                    <h5 class="mb-2">Mid-Term Exam Schedule Published</h5>
                    <p class="notice-date mb-2"><i class="fas fa-calendar-alt me-1 text-primary"></i> July 5, 2025</p>
                    <p class="mb-3 text-muted">Mid-term exam routine for all departments is now available.</p>
                    <a href="#" class="btn btn-sm btn-outline-primary">View Details</a>
                </div>
            </div>

            <!-- Notice 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="bg-light rounded p-4 notice-card h-100">
                    <h5 class="mb-2">Semester Final Registration Deadline</h5>
                    <p class="notice-date mb-2"><i class="fas fa-calendar-alt me-1 text-primary"></i> July 10, 2025</p>
                    <p class="mb-3 text-muted">Last date for final exam registration is July 10, 2025.</p>
                    <a href="#" class="btn btn-sm btn-outline-primary">View Details</a>
                </div>
            </div>

            <!-- Notice 3 -->
            <div class="col-md-6 col-lg-4">
                <div class="bg-light rounded p-4 notice-card h-100">
                    <h5 class="mb-2">Holiday Announcement: Eid-ul-Adha</h5>
                    <p class="notice-date mb-2"><i class="fas fa-calendar-alt me-1 text-primary"></i> July 15, 2025</p>
                    <p class="mb-3 text-muted">Institute will remain closed from July 16 to 21 for Eid holidays.</p>
                    <a href="#" class="btn btn-sm btn-outline-primary">View Details</a>
                </div>
            </div>

            <!-- Notice 4 -->
            <div class="col-md-6 col-lg-4">
                <div class="bg-light rounded p-4 notice-card h-100">
                    <h5 class="mb-2">Lab Final Exam Schedule</h5>
                    <p class="notice-date mb-2"><i class="fas fa-calendar-alt me-1 text-primary"></i> July 18, 2025</p>
                    <p class="mb-3 text-muted">Lab-based final exams will start from July 20, 2025 across all departments.
                    </p>
                    <a href="#" class="btn btn-sm btn-outline-primary">View Details</a>
                </div>
            </div>

            <!-- Notice 5 -->
            <div class="col-md-6 col-lg-4">
                <div class="bg-light rounded p-4 notice-card h-100">
                    <h5 class="mb-2">Form Fill-Up for Diploma Board Exam</h5>
                    <p class="notice-date mb-2"><i class="fas fa-calendar-alt me-1 text-primary"></i> July 25, 2025</p>
                    <p class="mb-3 text-muted">Form fill-up process for the upcoming BTEB Diploma exam begins from July 25.
                    </p>
                    <a href="#" class="btn btn-sm btn-outline-primary">View Details</a>
                </div>
            </div>

            <!-- Notice 6 -->
            <div class="col-md-6 col-lg-4">
                <div class="bg-light rounded p-4 notice-card h-100">
                    <h5 class="mb-2">Workshop on Career & Skill Development</h5>
                    <p class="notice-date mb-2"><i class="fas fa-calendar-alt me-1 text-primary"></i> July 30, 2025</p>
                    <p class="mb-3 text-muted">Special seminar for final year students on career opportunities and skills.
                    </p>
                    <a href="#" class="btn btn-sm btn-outline-primary">View Details</a>
                </div>
            </div>

            <!-- Notice 4 -->
            <div class="col-md-6 col-lg-4">
                <div class="bg-light rounded p-4 notice-card h-100">
                    <h5 class="mb-2">Lab Final Exam Schedule</h5>
                    <p class="notice-date mb-2"><i class="fas fa-calendar-alt me-1 text-primary"></i> July 18, 2025</p>
                    <p class="mb-3 text-muted">Lab-based final exams will start from July 20, 2025 across all
                        departments.</p>
                    <a href="#" class="btn btn-sm btn-outline-primary">View Details</a>
                </div>
            </div>

            <!-- Notice 5 -->
            <div class="col-md-6 col-lg-4">
                <div class="bg-light rounded p-4 notice-card h-100">
                    <h5 class="mb-2">Form Fill-Up for Diploma Board Exam</h5>
                    <p class="notice-date mb-2"><i class="fas fa-calendar-alt me-1 text-primary"></i> July 25, 2025</p>
                    <p class="mb-3 text-muted">Form fill-up process for the upcoming BTEB Diploma exam begins from July
                        25.</p>
                    <a href="#" class="btn btn-sm btn-outline-primary">View Details</a>
                </div>
            </div>

            <!-- Notice 6 -->
            <div class="col-md-6 col-lg-4">
                <div class="bg-light rounded p-4 notice-card h-100">
                    <h5 class="mb-2">Workshop on Career & Skill Development</h5>
                    <p class="notice-date mb-2"><i class="fas fa-calendar-alt me-1 text-primary"></i> July 30, 2025</p>
                    <p class="mb-3 text-muted">Special seminar for final year students on career opportunities and
                        skills.</p>
                    <a href="#" class="btn btn-sm btn-outline-primary">View Details</a>
                </div>
            </div>
        </div>
    </div>
@endsection