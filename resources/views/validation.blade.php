@extends('layout.layout2')

@section('title', 'Request from validation')

@section('content')


    <div class="container m-5">
        <h2 class="fs-4 fw-bold text-center">Laravel Form
            Request Validation</h2>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert"></div>
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
            <form action="/" method="post">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title"
                        value="{{ old('title') }}">
                    @error('title')
                        <div class="invalid-feedback">{{$message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="body" class="form-label">Body</label>
                    <textarea name="body" id="body" cols="30" rows="10" class="form-control @error('body') is-invalid
                    @enderror">{{ old('body') }}</textarea>
                    @error('body')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>


@endsection