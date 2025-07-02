@extends('layouts.backendlayout')
@section('title', 'Departments')
@section('backend')
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-lg-6">
                                <h4>All Departments</h4>
                            </div>
                            <div class="col-lg-6 text-end">
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addDepartmentModal">
                                    <i data-feather="plus"></i> Add Department
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <table class="table table-responsive text-center">
                            <thead>
                                <tr>
                                    <th>Sl.</th>
                                    <th>Department Image</th>
                                    <th>Department Name</th>
                                    <th>Department Head</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @forelse($departments as $index => $department)
                                    <tr>
                                        <td>{{ ++$index }}</td>
                                        <td><img width="50px" src="{{ asset($department->image) }}" alt="image"></td>
                                        <td>{{ $department->name }}</td>
                                        <td>{{ $department->head }}</td>
                                        <td>
                                            <!-- Edit -->
                                            <button class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#editDepartmentModal{{ $department->id }}">Edit</button>

                                            <!-- Delete -->
                                            <form action="{{ route('backend.department.destroy', $department->id) }}"
                                                method="POST" class="d-inline"
                                                onsubmit="return confirm('Are you sure you want to delete this department?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td>
                                    </tr>

                                    <!-- Edit Modal -->
                                    <div class="modal fade" id="editDepartmentModal{{ $department->id }}" tabindex="-1"
                                        aria-labelledby="editDepartmentLabel{{ $department->id }}" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <form action="{{ route('backend.department.update', $department->id) }}"
                                                method="POST" enctype="multipart/form-data" class="modal-content">
                                                @csrf
                                                @method('PUT')
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editDepartmentLabel{{ $department->id }}">Edit
                                                        Department</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>

                                                <div class="modal-body">
                                                    <div class="row g-3">
                                                        <div class="col-md-6">
                                                            <label class="form-label">Department Name</label>
                                                            <input type="text" name="name" class="form-control"
                                                                value="{{ $department->name }}" required>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="form-label">Department Head</label>
                                                            <input type="text" name="head" class="form-control"
                                                                value="{{ $department->head }}" required>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label class="form-label">Department Image</label><br>
                                                            <img src="{{ asset($department->image) }}" width="50"
                                                                class="mb-2 d-block">
                                                            <input type="file" name="image" class="form-control" accept="image/*">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-success">Update</button>
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Cancel</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                @empty
                                    <tr>
                                        <td colspan="5">No Department Found!</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Department Modal -->
    <div class="modal fade" id="addDepartmentModal" tabindex="-1" aria-labelledby="addDepartmentLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <form action="{{ route('backend.department.store') }}" method="POST" enctype="multipart/form-data"
                class="modal-content">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="addDepartmentLabel">Add Department</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body row g-3">
                    <div class="col-md-6">
                        <label class="form-label">Department Name</label>
                        <input type="text" name="name" class="form-control" required placeholder="Enter department name">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Department Head</label>
                        <input type="text" name="head" class="form-control" required placeholder="Enter head name">
                    </div>
                    <div class="col-md-12">
                        <label class="form-label">Department Image</label>
                        <input type="file" name="image" class="image" accept="image/*">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Save Department</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('backend/assets/css/filepond.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/filepond-plugin-image-preview.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('backend/assets/js/filepond-plugin-image-preview.js') }}"></script>
    <script src="{{ asset('backend/assets/js/filepond.js') }}"></script>
    <script src="{{ asset('backend/assets/js/filepond.jquery.js') }}"></script>
    <script>
        FilePond.registerPlugin(FilePondPluginImagePreview);
        $('.image').filepond({
            storeAsFile: true,
        });
    </script>
@endpush