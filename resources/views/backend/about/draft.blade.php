@extends('layouts.backendlayout')
@section('title', 'About Drafts')
@section('backend')
<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">All Drafts</div>
                <div class="card-body">
                    <table class="table table-responsive">
                        <thead>
                            <th>Sl.</th>
                            <th width="100px">Image</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Author Name</th>
                            <th>Publish Date</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Actions</th>
                        </thead>
                        <tbody>
                            @forelse($abouts as $index => $about)
                            <tr>
                                <td>{{ ++$index }}</td>
                                <td width="100px"><img width="80px" class="img-fluid lazy" data-src="{{ asset('storage/' . $about->image) }}" alt="image"></td>
                                <td>{{ $about->title }}</td>
                                <td>{!!   $about->short_description !!}</td>
                                <td>{!!   $about->long_description !!}</td>
                                <td>{!! Str::limit($about->description, 20) !!}</td>
                                <td class="text-center">
                                    @if($about->is_published)
                                        <span class="badge text-bg-success">Published</span>
                                    @else
                                        <span class="badge text-bg-danger">Draft</span>
                                    @endif
                                </td>
                                <td class="text-center">
                                    <a href="{{ route('backend.about.edit', $about->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                    <a href="{{ route('backend.about.destroy', $about->id) }}" onclick="return confirm('Are you sure you want to delete this about Post?');" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            @empty
                            <tr class="text-center">
                                <td colspan="8">No about Post Found!</td>
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