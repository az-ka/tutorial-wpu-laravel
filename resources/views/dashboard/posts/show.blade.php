@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h2>{{ $post->title }}</h2>
                <a href="/dashboard/posts" class="btn btn-dark">
                    <span data-feather="arrow-left" class="text-white"></span>
                </a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-dark mx-2 my-3">
                    <span data-feather="edit-2" class="text-white"></span>
                </a>
                <form action="/dashboard/posts/{{ $post->slug }}" class="d-inline" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="border-0 btn btn-dark" onclick="return confirm('Are Your Sure?')">
                        <span data-feather="x" class="text-white"></span>
                    </button>
                </form>

                @if ($post->image)
                    <div style="max-height: 400px; overflow: hidden;">
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}"
                            class="img-fluid">
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}"
                        alt="{{ $post->category->name }}" class="img-fluid">
                @endif


                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>
            </div>
        </div>
    </div>
@endsection
