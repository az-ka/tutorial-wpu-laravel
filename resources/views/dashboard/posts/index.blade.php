@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My Posts</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive col-lg-8">
        <a href="/dashboard/posts/create" class="btn btn-primary mb-3">Create New Post</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Category</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->category->name }}</td>
                        <td>
                            <a href="/dashboard/posts/{{ $item->slug }}" class="badge bg-dark">
                                <span data-feather="eye" class="text-white"></span>
                            </a>
                            <a href="{{ $item->id }}" class="badge bg-dark">
                                <span data-feather="edit-2" class="text-white"></span>
                            </a>
                            <a href="{{ $item->id }}" class="badge bg-dark">
                                <span data-feather="x" class="text-white"></span>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
