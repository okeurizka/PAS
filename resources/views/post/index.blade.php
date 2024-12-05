@extends('layout.layout2')

@section('title', 'Semua Post')

@section('content')

    <div class="container m-auto p-4">
        <div class="d-flex justify-content-between">
            <h5>Posts</h5>
            <a href="{{ route('posts.create') }}" class="btn btn-primary m-1 ">Create</a>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th class="text-end">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                                    <tr>
                                        <td>{{ $post->title }}</td>
                                        <td>{{ $post->body }}</td>
                                        <td>
                                            <div class="d-flex flex-row mb-3 float-end">
                                                <a href="{{ route('posts.edit', $post->id) }}"
                                                    class="btn btn-primary m-1">Edit</a>
                                                <form method="POST" action="{{ url('posts', $post->id) }}"
                                                    onsubmit="return confirm('Are you sure you want to DELETE?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button
                                                        class="btn
                                                    btn-danger m-1">Hapus</button>
                                                </form>
                                            </div>
                                        </td>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
