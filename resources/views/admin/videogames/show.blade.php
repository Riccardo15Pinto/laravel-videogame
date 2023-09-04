@extends('layouts.app')

@section('title', 'videogames')

@section('content')
    <header>
        <div class="text-center">
            <h1 class="my-4">videogames List</h1>
        </div>
        <div class="d-flex justify-content-end my-3">
            <a href="{{ route('admin.videogames.create') }}" class="btn btn-success ms-2">Create new videogame</a>
            <a href="{{ route('admin.videogames.index') }}" class="btn btn-primary ms-2">Torna alla Home</a>
        </div>
    </header>

    <div class="container my-4">

        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ $videogame->img_path }}" class="card-img-top" alt="{{ $videogame->title }}">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{ $videogame->title }}</h5>
                        <p class="card-text">{{ $videogame->description }}</p>
                        <span><strong>Data di uscita:</strong> {{ $videogame->release_date }}</span>
                        <span><strong>Età minima:</strong> + {{ $videogame->min_age }}</span>
                        <div class="d-flex align-items-center justify-content-end">

                            <a href="{{ route('admin.videogames.edit', $videogame) }}" class="btn btn-warning">Edit</a>

                            <button type="button" class="btn btn-danger ms-2" data-bs-toggle="modal"
                                data-bs-target="#{{ $videogame->id }}">
                                Delete
                            </button>
                            @include('admin.includes.modal_delete')
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
