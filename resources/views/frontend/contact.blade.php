
@extends('layouts.frontendlayout')
@section('title', 'Contact Us')

@push('css')
<style>
    .form-control:focus {
        box-shadow: none;
        border-color: #234567;
    }
</style>
@endpush

@section('content')
<div class="container py-5">
    <div class="row justify-content-center mb-5">
        <div class="col-12 text-center">
            <h6 class="text-uppercase text-secondary">Contact</h6>
            <h1 class="display-5">Get In Touch</h1>
            <p class="text-muted">We’d love to hear from you. Fill out the form and we’ll get back to you shortly.</p>
        </div>
    </div>

    <div class="row g-5">
        <!-- Contact Form -->
        <div class="col-lg-6">
            <form method="POST" action="{{ route('contact.store') }}">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Your Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter your name" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Your Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Subject</label>
                    <input type="text" name="subject" class="form-control" placeholder="Subject" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Message</label>
                    <textarea name="message" class="form-control" rows="5" placeholder="Your message" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary px-4 py-2">Send Message</button>
            </form>
            <span class="text-success"></span>
        </div>

        <!-- Contact Info -->
        <div class="col-lg-6">
            <div class="bg-light p-4 rounded shadow-sm">
                <h5 class="mb-3"><i class="fas fa-map-marker-alt me-2 text-primary"></i>Address</h5>
                <p>Chattogram Polytechnic Institute, Nasirabad, Chattogram</p>

                <h5 class="mt-4 mb-3"><i class="fas fa-phone-alt me-2 text-primary"></i>Phone</h5>
                <p>+8801XXXXXXXXX</p>

                <h5 class="mt-4 mb-3"><i class="fas fa-envelope me-2 text-primary"></i>Email</h5>
                <p>info@yourdomain.com</p>

                <h5 class="mt-4 mb-3"><i class="fas fa-globe me-2 text-primary"></i>Website</h5>
                <p>www.yourdomain.com</p>
            </div>
        </div>
    </div>
</div>
@endsection
