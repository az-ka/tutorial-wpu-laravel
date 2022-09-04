@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Post Categories</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success col-lg-8" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive col-lg-8">
        <a href="/dashboard/categories/create" class="btn btn-primary mb-3">Create New Category</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Category Name</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>
                            <a href="/dashboard/categories/{{ $item->slug }}" class="badge bg-dark">
                                <span data-feather="eye" class="text-white"></span>
                            </a>
                            <a href="/dashboard/categories/{{ $item->slug }}/edit" class="badge bg-dark">
                                <span data-feather="edit-2" class="text-white"></span>
                            </a>
                            <form action="/dashboard/categories/{{ $item->slug }}" class="d-inline" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="border-0 badge bg-dark" onclick="return confirm('Are Your Sure?')">
                                    <span data-feather="x" class="text-white"></span>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
