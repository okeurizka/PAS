@extends('layout.layout2')

@section('title', 'Post Edit')

@section('content')

    <div class="container m-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        EDIT POST
                    </div>
                    @if (session('success'))
                        <div class="alert-success">
                            <p>{{ session('success') }}</p>
                        </div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            @foreach ($errors->all() as $error)
                                {{ $error }} <br>
                            @endforeach
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('posts.update', $post->id) }}" class="m-3">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="title" class="form-label">Nama</label>
                            <input type="text" name="title" class="form-control" id="title"
                                value="{{ $post->title }}">
                        </div>
                        <div class="mb-3">
                            <label for="body" class="form-label">Alamat</label>
                            <input type="text" name="body" class="form-control" id="body"
                                value="{{ $post->body }}">
                        </div>
                        <button type="submit" class="btn btn-success">Submit</button>
                        <a href="{{ route('posts.index') }}" class="btn btn-danger">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
