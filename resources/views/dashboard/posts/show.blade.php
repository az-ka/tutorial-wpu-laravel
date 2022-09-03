@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h2>{{ $post->title }}</h2>
                <a href="/dashboard/posts" class="btn btn-dark">
                    <span data-feather="arrow-left" class="text-white"></span>
                </a>
                <a href="" class="btn btn-dark mx-2">
                    <span data-feather="edit-2" class="text-white"></span>
                </a>
                <a href="" class="btn btn-dark my-3">
                    <span data-feather="x" class="text-white"></span>
                </a>

                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}"
                    alt="{{ $post->category->name }}" class="img-fluid">
                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>
            </div>
        </div>
    </div>
@endsection
