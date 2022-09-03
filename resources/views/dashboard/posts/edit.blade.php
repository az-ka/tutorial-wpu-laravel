@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Post</h1>
    </div>

    <div class="col-lg-8">
        <form method="POST" action="/dashboard/posts/{{ $post->id }}" class="mb-5">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text"
                    class="form-control 
                    @error('title')
                    is-invalid
                    @enderror"
                    id="title" name="title" value="{{ old('title', $post->title) }}" required autofocus>
                @error('title')
                    {{ $message }}
                @enderror
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text"
                    class="form-control @error('slug')
                    is-invalid
                @enderror"
                    id="slug" name="slug" value="{{ old('slug', $post->slug) }}" required>
                @error('slug')
                    {{ $message }}
                @enderror
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <select class="form-select" name="category_id">
                    @foreach ($categories as $item)
                        @if (old('category_id', $post->category_id) == $item->id)
                            <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
                        @else
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Body</label>
                @error('body')
                    <p>{{ $message }}</p>
                @enderror
                <input id="body" type="hidden" name="body" value="{{ old('body', $post->body) }}">
                <trix-editor input="body"></trix-editor>
            </div>
            <button type="submit" class="btn btn-primary">Edit Post</button>
        </form>
    </div>

    <script>
        const title = document.querySelector("#title");
        const slug = document.querySelector("#slug");

        title.addEventListener("keyup", function() {
            let preslug = title.value;
            preslug = preslug.replace(/ /g, "-");
            slug.value = preslug.toLowerCase();
        });
    </script>
@endsection
