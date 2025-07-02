@extends('layouts.backendlayout')
@section('title', 'Dashboard')
@section('backend')
<div class="conainter-fluid mt-2">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body text-center position-relative">
                    <div class="img" style="background: linear-gradient(rgba(60, 128, 224, 0.7), rgba(76, 127, 197, 0.77)), url({{ asset('frontend/assets/img/cpi.jpg') }}), no-repeat center center; height: 100vh; ">
                    </div>
                    <h1 style="color: #fff;font-size:50px; opacity: 1; position: absolute; top: 50%; left:50%; transform:translate(-50%, -50%)">Welcome To CPI Dashboard</h1>
                    <p style="color: #fff; opacity: 1; position: absolute; top: 55%; left:50%; transform:translate(-50%, -50%)">Logged in As {{ Auth()->user()->name }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection