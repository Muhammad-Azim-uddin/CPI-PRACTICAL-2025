@extends('layouts.backendlayout')
@section('title', 'Add About')

@section('css')
    <link rel="stylesheet" href="{{ asset('backend/assets/css/filepond.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/filepond-plugin-image-preview.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/rte_theme_default.css') }}">
@endsection

@section('backend')
<div class="container mt-2">
    <div class="card">
        <form action="{{ route('backend.about.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="card-header">
                    <div class="row">
                        <div class="col-lg-6"><h5>Add About</h5></div>
                        <div class="col-lg-6 text-end">
                            <button name="status" value="draft" class="btn btn-warning me-2">Save As Draft</button>
                            <button name="status" value="publish" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="card-body">
                        <div class="form-group mb-2">
                            <label>Enter About Title <span class="text-danger">*</span></label>
                            <input type="text" name="title" class="form-control" value="{{ old('title') }}">
                            @error('title') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <div class="form-group mb-2  align-items-center">
                            <label>About description <span class="text-danger">*</span></label>
                            <textarea name="short_description" id="short_description">{{ old('short_description') }}</textarea>
                            @error('short_description') <small class="text-danger d-block">{{ $message }}</small> @enderror
                        </div>
                        <div class="form-group mb-2">
                            <label>About long description <span class="text-danger">*</span></label>
                            <textarea name="long_description"  id="details" >{{ old('long_description') }} </textarea>
                            @error('long_description') <small class="text-danger d-block">{{ $message }}</small> @enderror
                        </div>


                        <div class="form-group mb-2">
                            <label>Image <span class="text-danger">*</span></label>
                            <input type="file" class="image" name="image">
                            @error('image') <small class="text-danger d-block">{{ $message }}</small> @enderror
                        </div>
        
                       
                    </div>
                </div>

                <div class="col-lg-3 mt-3">
                    <div class="form-group mb-2">
                        <label>Enter Meta Title</label>
                        <input type="text" class="form-control" name="meta_title" value="{{ old('meta_title') }}">
                        @error('meta_title') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                    <div class="form-group">
                        <label>Meta Description</label>
                        <textarea name="meta_description" class="form-control">{{ old('meta_description') }}</textarea>
                        @error('meta_description') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@push('scripts')
    <script src="{{ asset('backend/assets/js/filepond-plugin-image-preview.js') }}"></script>
    <script src="{{ asset('backend/assets/js/filepond.js') }}"></script>
    <script src="{{ asset('backend/assets/js/filepond.jquery.js') }}"></script>
    <script src="{{ asset('backend/assets/js/rte.js') }}"></script>
    <script src="{{ asset('backend/assets/js/all_plugins.js') }}"></script>
    <script>
        var editor1 = new RichTextEditor("#details");
        var editor2 = new RichTextEditor("#short_description");
        FilePond.registerPlugin(FilePondPluginImagePreview);

        $('.image').filepond({
            storeAsFile: true,
            allowReorder: true,
            allowImagePreview: true,
        });
    </script>
@endpush
