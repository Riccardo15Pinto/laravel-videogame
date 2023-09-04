@extends('layouts.app')

@section('title', 'videogames')

@section('content')
    <header>
        <div class="text-center">
            <h1 class="my-4">videogames List</h1>
        </div>
        <div class="d-flex justify-content-end my-3">
            <a href="{{ route('admin.videogames.create') }}" class="btn btn-success ms-2">Create new videogame</a>
        </div>
    </header>

    <div class="row">
        @foreach ($videogames as $videogame)
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="{{ $videogame->img_path }}" class="card-img-top" alt="{{ $videogame->title }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $videogame->title }}</h5>
                        <p class="card-text">{{ $videogame->description }}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Data di uscita:</strong> {{ $videogame->release_date }}</li>
                        <li class="list-group-item"><strong>Età minima:</strong> {{ $videogame->min_age }} anni</li>
                    </ul>
                    <div class="card-footer d-flex">
                        <a href="{{ route('admin.videogames.show', $videogame) }}" class="btn btn-primary ms-2">Go to
                            the videogame</a>
                        <a href="{{ route('admin.videogames.edit', $videogame) }}" class="btn btn-warning ms-2">Edit</a>
                        <button type="button" class="btn btn-danger ms-2" data-bs-toggle="modal"
                            data-bs-target="#{{ $videogame->id }}">
                            Delete
                        </button>
                        @include('admin.includes.modal_delete')
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
