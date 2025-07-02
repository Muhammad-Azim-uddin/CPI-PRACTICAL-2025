@extends('layouts.backendlayout')
@section('title', 'About')
@section('backend')
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-lg-6">
                                <h5>All About </h5>
                            </div>
                            <div class="col-lg-6 text-end">
                                <a href="{{ route('backend.about.create') }}" class="btn btn-primary">Add About</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-responsive">
                            <thead>
                                <th>Sl.</th>
                                <th width="100px">Image</th>
                                <th>Title</th>
                                <th>Short Description</th>
                                <th>Long Description</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Actions</th>
                            </thead>
                            <tbody>

                                @forelse($abouts as $index => $about)
                                    <tr>

                                        <td>{{ ++$index }}</td>
                                        <td width="100px"><img width="80px" class="img-fluid "
                                                src="{{ asset('storage/' . $about->image)  }}"></td>
                                        <td>{{ $about->title }}</td>
                                        <td>{!! Str::limit($about->short_description, 20) !!}</td>
                                        <td>{!! Str::limit($about->long_description, 30) !!}</td>
                                        <td class="text-center">
                                            @if($about->status === 'publish')
                                                <span class="badge text-bg-success">Published</span>
                                            @else
                                                <span class="badge text-bg-danger">Draft</span>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <a href="{{ route('backend.about.edit', $about->id) }}"
                                                class="btn btn-primary btn-sm">Edit</a>
                                            <a href="{{ route('backend.about.destroy', $about->id) }}"
                                                onclick="return confirm('Are you sure you want to delete this about section?');"
                                                class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr class="text-center">
                                        <td colspan="8">No about Found!</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection