@extends('layouts.backendlayout')
@section('title', 'Teacher')
@section('backend')


           
    <!-- <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Teacher Management</h1>
                <form action="{{ route('backend.teacher.storeAndUpdate', $id ?? null) }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name"
                            value="{{ old('name', $teacher->name ?? '') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="designation">Designation</label>
                        <input type="text" class="form-control" id="designation" name="designation"
                            value="{{ old('designation', $teacher->designation ?? '') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="department">Department</label>
                        <input type="text" class="form-control" id="department" name="department"
                            value="{{ old('department', $teacher->department ?? '') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control" id="image" name="image">
                        @if ($teacher->image)
                            <img src="{{ asset('storage/'. $teacher->image) }}" alt="">
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="facebook">Facebook</label>
                        <input type="text" class="form-control" id="facebook" name="facebook"
                            value="{{ old('facebook', $teacher->facebook ?? '') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="linkedin">LinkedIn</label>
                        <input type="text" class="form-control" id="linkedin" name="linkedin"
                            value="{{ old('linkedin', $teacher->linkedin ?? '') }}" required>
                    </div>

                    <button type="submit" class="btn btn-primary">{{ $id ? 'Update' : 'Create' }} Teacher</button>
                </form>
            </div>
        </div>
    </div> -->


    


    @endsection